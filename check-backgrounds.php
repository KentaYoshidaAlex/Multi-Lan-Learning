<?php

use Illuminate\Support\Facades\Http;

$models = [
    \App\Models\QuizMyanmarDatum::class,
    \App\Models\QuizTagalogDatum::class,
    \App\Models\QuizKansaibenDatum::class,
    \App\Models\QuizWorldGreetingsDatum::class,
    \App\Models\QuizSpanishDatum::class,
    \App\Models\QuizFrenchDatum::class,
];

$baseUrl = 'https://multi-lan-learning.vercel.app';

foreach ($models as $model) {
    $model::whereNotNull('pathBackground')->where('pathBackground', '!=', '')->get()->each(function ($row) use ($model, $baseUrl) {
        try {
            $response = Http::timeout(10)->get($baseUrl . $row->pathBackground);
            $status = $response->status();
            $sizeKB = round(strlen($response->body()) / 1024);
            if ($status !== 200) {
                echo "{$model} no:{$row->no} → {$status} : {$row->pathBackground}\n";
            } elseif ($sizeKB > 1000) {
                echo "{$model} no:{$row->no} → サイズ大({$sizeKB}KB) : {$row->pathBackground}\n";
            }
        } catch (\Throwable $e) {
            echo "{$model} no:{$row->no} → 取得失敗 : {$row->pathBackground}\n";
        }
    });
}