<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GovPicCover extends Command
{
    protected $signature = 'wuhai:process {action} {--limit=100} {--source=pic} {--destination=pdf} {--write-back=finish-pdf}';
    protected $description = 'Process Wuhai files: extract, store paths, or write back';

    public function handle()
    {
        $action = $this->argument('action');
        $sourceFolder = $this->option('source');
        $destinationFolder = $this->option('destination');
        $writeBackFolder = $this->option('write-back');
        $limit = (int)$this->option('limit');

        switch ($action) {
            case 'extract':
                $this->extractFiles($sourceFolder, $destinationFolder, $limit);
                break;

            case 'write-back':
                $this->writeBackFiles($destinationFolder, $writeBackFolder, $limit);
                break;

            default:
                $this->error('Invalid action. Use "extract" or "write-back".');
        }
    }

    protected function extractFiles($sourceFolder, $destinationFolder, $limit)
    {
        // 获取所有子目录及文件
        $allFiles = collect(Storage::disk('wuhai')->allFiles($sourceFolder))
            ->filter(fn($file) => in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'png'])); // 只处理图片文件

        if ($allFiles->isEmpty()) {
            $this->info('No files to process.');
            return;
        }

        $totalFiles = $allFiles->count();
        $this->info("Total files to process: $totalFiles");

        $currentPage = 1;

        while (true) {
            $files = $allFiles->forPage($currentPage, $limit); // 自动分页

            if ($files->isEmpty()) {
                break; // 无文件可处理，结束循环
            }

            foreach ($files as $file) {
                $originalName = pathinfo($file, PATHINFO_BASENAME); // 文件名
                $newName = str_replace(['/', '\\'], 'file-interval', $file); // 转换路径格式

                Storage::disk('wuhai')->move($file, "$destinationFolder/$newName"); // 复制到目标目录

                // 存储到数据库
                DB::table('wuhai_relation')->insert([
                    'file_name' => $originalName,
                    'new_file_name' => $newName,
                    'file_paths' => json_encode(['source' => $file, 'destination' => "$destinationFolder/$newName"]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $this->info("Processed: $file -> $destinationFolder/$newName");
            }

            $this->info("Page $currentPage completed.");
            $currentPage++; // 下一页
        }

        $this->info('All files processed successfully.');
    }


    protected function writeBackFiles($sourceFolder, $writeBackFolder, $limit)
    {
        // 获取所有子目录及文件
        $allFiles = collect(Storage::disk('wuhai')->allFiles($sourceFolder))
            ->filter(fn($file) => in_array(pathinfo($file, PATHINFO_EXTENSION), ['pdf'])); // 只处理图片文件

        if ($allFiles->isEmpty()) {
            $this->info('No files to process.');
            return;
        }

        $totalFiles = $allFiles->count();
        $this->info("Total files to process: $totalFiles");

        $currentPage = 1;

        while (true) {
            $files = $allFiles->forPage($currentPage, $limit); // 自动分页

            if ($files->isEmpty()) {
                break; // 无文件可处理，结束循环
            }

            foreach ($files as $file) {
                $newName = str_replace(['/', '\\'], '-', $file); // 转换路径格式
                $newName = str_replace('pdf-picfile-interval', '', $newName);
                $parts = explode('file-interval', $newName);
                $fileName = array_pop($parts);
                $folderPath = implode('/', $parts);

                $destinationPath = $folderPath . '/' . $fileName;
                Storage::disk('wuhai')->move($file, "$writeBackFolder/$destinationPath"); // 复制到目标目录

                $this->info("Processed: $file -> $writeBackFolder/$destinationPath");
            }

            $this->info("Page $currentPage completed.");
            $currentPage++; // 下一页
        }

        $this->info('All files processed successfully.');
    }
}

