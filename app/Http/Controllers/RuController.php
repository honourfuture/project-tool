<?php
/**
 * Created by PhpStorm
 *
 * @author    joy <younghearts2008@gmail.com>
 * Date: 2025/3/3
 * Time: 15:14
 */

namespace App\Http\Controllers;

use App\Models\Ru_qute;
use Illuminate\Support\Facades\DB;

class RuController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function count()
    {

        $groups = [
            ['Восток: Русский язык 1(2009)', 'Восток: Русский язык 2(2010)', 'Восток: Русский язык 4(2010)', 'Восток: Русский язык3(2009.9)', 'Восток: Русский язык5(2011)', 'Восток: Русский язык6(2012)', 'Восток: Русский язык7(2013)', 'Восток: Русский язык8(2014)'],
            ['Русский язык1(2008)', 'Русский язык2(2008)', 'Русский язык3(2018)', 'Русский язык4(2010)', 'Русский язык5(2010)', 'Русский язык6(2011)', 'Русский язык7(2011)', 'Русский язык8(2011)']
        ];

        $minCount = $this->_getMinCount($groups);

        foreach ($groups as $group) {
            $data[] = [
                'table' => $this->_count($minCount, $group),
                'books' => $group
            ];
        }

        return view('ru.count', compact('data'));
    }

    private function _getMinCount($y2s)
    {
        $minCount = 0;
        foreach ($y2s as $y2) {
            $group = Ru_qute::select(['T2-f', DB::raw('count(*) as count')])
                ->whereIn('Y2', $y2)
                ->whereNotNull('H')
                ->groupBy('T2-f')
                ->get();

            $min = $group->pluck('count')->min();
            $minCount = $minCount ? min($minCount, $min) : $min;
        }

        return $minCount;
    }

    /**
     * @param $y2
     * @return mixed
     */
    private function _count($minCount, $y2)
    {
        return Ru_qute::whereIn('Y2', $y2)
            ->whereNotNull('H')
            ->get()
            ->groupBy('T2-f') // 按T2-f分组
            ->map(function ($group) use ($minCount) {
                $group = $group->take($minCount); // 取前 $minCount 条数据
                // 计算每列的均值和中位数
                $columns = ['C', 'CTTR', 'D', 'K', 'R', 'ARI', 'RIX', 'SMOG', 'TTR', 'Flesch', 'Tokens', 'Sentences', 'Types'];
                $nos = $group->pluck('N')->unique()->sort()->values()->toArray();
                $nos = implode(',', $nos);
                foreach ($columns as $col) {
                    $values = $group->pluck($col)->filter()->sort()->values();
                    $count = $values->count();

                    // 计算中位数
                    $median = $count ? ($count % 2 == 0
                        ? ($values[$count / 2 - 1] + $values[$count / 2]) / 2
                        : $values[floor($count / 2)]
                    ) : null;

                    // 计算均值
                    $average = $values->avg();

                    $stats[$col] = [
                        'median' => $median,
                        'average' => $average,

                    ];
                    $stats['N'] = $nos;
                }

                return $stats;
            });
    }
}
