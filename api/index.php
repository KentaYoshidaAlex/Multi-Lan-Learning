<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

// 書き込み可能な/tmpにキャッシュディレクトリを設定
$tmpCache = '/tmp/laravel/cache';
$tmpViews = '/tmp/laravel/views';

if (!is_dir($tmpCache)) mkdir($tmpCache, 0777, true);
if (!is_dir($tmpViews)) mkdir($tmpViews, 0777, true);

$app = require __DIR__.'/../bootstrap/app.php';

// bootstrap/cacheを/tmpに向ける
$app->useStoragePath('/tmp/laravel');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);