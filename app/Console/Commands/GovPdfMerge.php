<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use setasign\Fpdi\Fpdi;

class GovPdfMerge extends Command
{
    protected $signature = 'gov:pdf-merge';
    protected $description = '';

    public function handle()
    {
        $allDirs = collect(Storage::disk('gov')->directories()); // 获取所有目录

        foreach ($allDirs as $dir) {
            // 过滤 Excel 文件
            $files = collect(Storage::disk('gov')->allFiles($dir))
                ->filter(fn($file) => in_array(pathinfo($file, PATHINFO_EXTENSION), ['xlsx', 'xls']));

            foreach ($files as $file) {
                $filePath = Storage::disk('gov')->path($file); // 获取完整路径

                $filePaths = explode('/', $file);
                if (!file_exists($filePath)) {
                    echo "文件不存在: $filePath\n";
                    continue;
                }

                try {
                    // 读取 Excel 数据
                    $data = Excel::toArray([], $filePath);
                    $rows = current($data);
                    $fileDir = dirname(Storage::disk('gov')->path($file)); // 获取文件所在的目录
                    $fileDir = basename($fileDir);
                    foreach ($rows as $key => $row) {
                        if ($key == 0) {
                            continue;
                        }
                        $dirName = trim($row[1]);
                        $pdfName = trim($row[4]);
                        $dirName = $filePaths[1] . "/" . $fileDir . "/" . $dirName; // 拼接完整目录
                        $dirName = str_replace('202O', '2020', $dirName);
                        $pdfPath = Storage::disk('gov')->path("{$dirName}/{$pdfName}.pdf");

                        if (file_exists($pdfPath)) {
                            echo "文件 {$pdfPath} 已经存在，跳过。\n";
                            continue;
                        }

                        $pdfFiles = collect(Storage::disk('gov')->allFiles($dirName))
                            ->filter(fn($file) => pathinfo($file, PATHINFO_EXTENSION) === 'pdf')
                            ->map(fn($file) => Storage::disk('gov')->path($file))
                            ->toArray();

                        if (empty($pdfFiles)) {
                            echo "目录 {$dirName} 下没有 PDF，尝试转换图片。\n";
                            $pdfPath = Storage::disk('gov')->path("{$dirName}/{$pdfName}.pdf");
                            $converted = $this->convertImagesToPdf($dirName, $pdfPath);

                            if ($converted) {
                                $pdfFiles[] = $pdfPath; // 添加新生成的 PDF
                            } else {
                                continue; // 没有生成 PDF 就跳过
                            }
                        }

                        // 合并 PDF
                        $outputPdfPath = Storage::disk('gov')->path("{$dirName}/{$pdfName}.pdf");
                        $this->mergePdfs($pdfFiles, $outputPdfPath);
                    }
                } catch (\Exception $e) {
                    echo "解析 Excel 失败: " . $e->getMessage();
                }
            }
        }
    }

    /**
     * 合并 PDF 文件
     */
    public function mergePdfs(array $pdfFiles, string $outputPdfPath)
    {
        $pdf = new Fpdi();

        foreach ($pdfFiles as $pdfFile) {
            if (!file_exists($pdfFile)) {
                echo "文件 {$pdfFile} 不存在，跳过。\n";
                continue;
            }

            $pageCount = $pdf->setSourceFile($pdfFile);

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $tplIdx = $pdf->importPage($pageNo);
                $pdf->AddPage();
                $pdf->useTemplate($tplIdx);
            }
        }

        $pdf->Output($outputPdfPath, 'F');
        echo "PDF 合并成功: {$outputPdfPath}\n";
    }

    public function convertImagesToPdf(string $dirPath, string $pdfOutputPath)
    {
        $pdf = new \FPDF();

        $imageFiles = collect(Storage::disk('gov')->allFiles($dirPath))
            ->filter(fn($file) => in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png']))
            ->map(fn($file) => Storage::disk('gov')->path($file))
            ->toArray();
        if (empty($imageFiles)) {
            echo "文件夹 $dirPath 没有图片，跳过转换。\n";
            return false;
        }

        foreach ($imageFiles as $image) {
            $size = getimagesize($image);
            if (!$size) {
                continue;
            }

            $pdf->AddPage();
            $pdf->Image($image, 10, 10, 190);
        }

        $pdf->Output($pdfOutputPath, 'F');
        echo "图片已转换为 PDF：$pdfOutputPath\n";
        return $pdfOutputPath;
    }

}

