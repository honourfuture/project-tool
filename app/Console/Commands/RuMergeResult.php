<?php

namespace App\Console\Commands;

use App\Models\Ru_qute;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class RuMergeResult extends Command
{
    protected $signature = 'txt:insert-xls';
    protected $description = '';

    public function handle()
    {
//        $this->txt();
        // 过滤 Excel 文件
        $files = collect(Storage::disk('ru')->allFiles())
            ->filter(fn($file) => in_array(pathinfo($file, PATHINFO_EXTENSION), ['xlsx', 'xls']));

        foreach ($files as $file) {
            $filePath = Storage::disk('ru')->path($file); // 获取完整路径

            if (!file_exists($filePath)) {
                echo "文件不存在: $filePath\n";
                continue;
            }

            $qutes = [];
            // 读取 Excel 数据
            $rows = Excel::toArray([], $filePath);
            $names = [];
            foreach ($rows[0] as $row) {
                $name = $row[8];
                if (!$row[0]) {
                    continue;
                }
                if (isset($names[$name])) {
                    $names[$name]++;
                    $name = $name . '_' . $names[$name] . '.txt';
                } else {
                    $names[$name] = 1;
                    $name = $name . '.txt';
                }

                $qutes[] = [
                    'N' => $row[0],
                    'H' => $row[1],
                    'T' => $row[2],
                    'Y' => $row[3],
                    'B' => $row[4],
                    'C2' => $row[5],
                    'T2' => $row[6],
                    'Y2' => $row[7],
                    'N2' => $name,
                ];

            }
            Ru_qute::insert($qutes);
        }
    }

    public function txt()
    {
        $files = collect(Storage::disk('ru')->allFiles())
            ->filter(fn($file) => in_array(pathinfo($file, PATHINFO_EXTENSION), ['txt']));

        foreach ($files as $file) {
            $qutes = [];
            $filePath = Storage::disk('ru')->path($file); // 获取完整路径
            $this->info($filePath);
            $rows = explode("\n", file_get_contents($filePath));
            $names = [];
            foreach ($rows as $key => $row) {
                $qute = [];
                if (!$row) {
                    continue;
                }
                $data = explode("\t", $row);
                if ($key == 0) {
                    $names = $data;
                    continue;
                }
                foreach ($names as $key => $name) {
                    if ($name == 'Text') {
                        $name = 'document';
                    }
                    $qute[$name] = $data[$key];
                }
                $qutes[] = $qute;
            }

            foreach ($qutes as $qute) {

                $document = $qute['document'];
                unset($qute['document']);
                Ru_qute::where('N2', $document)->update($qute);
            }
        }
    }

}

