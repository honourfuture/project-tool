<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class OriginPic extends Command
{
    protected $signature = 'origin:pic';
    protected $description = 'Download files from S3 based on XML response';

    public function handle()
    {
        // S3 Bucket 和文件存储 URL
        $bucket = 'c3-img';
        $region = 'us-east-1';
        $url = "https://{$bucket}.s3.{$region}.amazonaws.com/";

        // 获取 XML 内容
        $response = Http::get($url);

        if ($response->successful()) {
            // 解析 XML 内容
            $xml = simplexml_load_string($response->body());

            // 遍历所有 Contents 元素
            foreach ($xml->Contents as $content) {
                // 获取 Key
                $key = (string)$content->Key;

                // 下载文件
                $this->downloadFile($bucket, $region, $key);
            }

            $this->info('Files downloaded successfully.');
        } else {
            $this->error('Failed to fetch XML.');
        }
    }

    // 根据 Key 下载文件
    public function downloadFile($bucket, $region, $key)
    {
        $name = $key;
        // 判断文件是否有扩展名
        $pathInfo = pathinfo($key);
        $key = md5($key);
        if (empty($pathInfo['extension'])) {
            // 如果没有扩展名，默认为 .jpg
            $key .= '.jpg';
        } else {
            $key .= '.' . $pathInfo['extension'];
        }

        // 确保目标目录存在（Windows环境）
        $localDir = storage_path("app" . DIRECTORY_SEPARATOR . "files");

        // 检查目录是否存在，如果不存在则创建
        if (!File::exists($localDir)) {
            File::makeDirectory($localDir, 0755, true); // 创建目录并设置权限
        }

        // 确定目标文件的本地路径
        $localPath = $localDir . DIRECTORY_SEPARATOR . $key;
        // 判断文件是否已经存在，如果存在则跳过
        if (File::exists($localPath)) {
            $this->info("File {$key} already exists. Skipping...");
            return; // 跳过当前文件
        }

        // 构建文件的下载 URL
        $s3Url = "https://{$bucket}.s3.{$region}.amazonaws.com/{$name}";

        // 获取文件内容

        $fileContent = @file_get_contents($s3Url);

        // 如果文件下载失败，输出错误并跳过当前文件
        if ($fileContent === false) {
            $this->error("Failed to download file: {$key}. Skipping...");
            return;  // 跳过当前文件
        }
        // 保存文件到本地
        File::put($localPath, $fileContent);

        $this->info("File {$key} downloaded successfully.");
    }
}
