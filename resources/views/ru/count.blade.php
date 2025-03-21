@extends('layouts.app')

<div class="container">
    <h2>统计结果</h2>

    @foreach ($data as $key => $values)
        <div class="table-container">
            {{implode(',', $values['books'])}}
            <table class="custom-table">
                <thead>
                <tr>
                    <th>T2-f</th>
                    <th>No</th>
                    @foreach (['C', 'CTTR', 'D', 'K', 'R', 'ARI', 'RIX', 'SMOG', 'TTR', 'Flesch', 'Tokens', 'Sentences', 'Types'] as $col)
                        <th>{{ $col }} (中位数)</th>
                        <th>{{ $col }} (均值)</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach ($values['table'] as $group => $stats)
                    <tr>
                        <td class="bold">{{ $group }}</td>
                        <td>{{$stats['N']}}</td>
                        @foreach ($stats as $col => $values)
                            @if($col == 'N')
                                @continue
                            @endif
                            <td>{{ $values['median']}}</td>
                            <td>{{ $values['average']}}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>
