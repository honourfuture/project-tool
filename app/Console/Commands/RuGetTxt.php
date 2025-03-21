<?php

namespace App\Console\Commands;

use App\Models\Ru_qute;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class RuGetTxt extends Command
{
    protected $signature = 'txt:get-xls';
    protected $description = '';

    public function handle()
    {
        // 过滤 Excel 文件
        $files = collect(Storage::disk('ru')->files('base'))
            ->filter(fn($file) => in_array(pathinfo($file, PATHINFO_EXTENSION), ['xlsx', 'xls']));
        foreach ($files as $file) {
            $filePath = Storage::disk('ru')->path($file); // 获取完整路径

            if (!file_exists($filePath)) {
                echo "文件不存在: $filePath\n";
                continue;
            }

            $qutes = [];
            // 读取 Excel 数据
            $names = [];
            $rows = Excel::toArray([], $filePath);
            foreach ($rows[0] as $key => $row) {

                if (!$row[0] || $key == 0) {
                    continue;
                }
                $name = $row[9];
                $content = $row[1] ?? $row[2];
                if(isset($names[$name])){
                    $names[$name]++;
                    $name = $name . '_' . $names[$name] . '.txt';
                }else{
                    $names[$name] = 1;
                    $name = $name . '.txt';
                }
                Storage::disk('ru')->put('corpus/'.$name, $content);
                echo "文件已生成: $name\n";
            }

        }
    }

}

