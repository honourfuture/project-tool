<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GovPdfRename extends Command
{
    protected $signature = 'gov:pdf-rename';
    protected $description = '';

    public function handle()
    {
        $disk = Storage::disk('gov');

        $files = collect($disk->allFiles())
            ->filter(fn($file) => pathinfo($file, PATHINFO_EXTENSION) === 'pdf');

        foreach ($files as $file) {
            $folderPath = dirname($file); // 获取文件的直属文件夹路径
            $folderName = basename($folderPath); // 获取直属文件夹的名称
            $extension = pathinfo($file, PATHINFO_EXTENSION); // 获取文件扩展名
            $newFilePath = $folderPath . '/' . $folderName . '.' . $extension; // 新文件路径
            $this->info($newFilePath);
            // 避免重名文件覆盖
            if ($disk->exists($newFilePath)) {
                continue; // 文件已存在，则跳过
            }

            $disk->move($file, $newFilePath); // 重命名文件
        }
    }
}

