<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// /tmp にキャッシュディレクトリを作成
$dirs = [
    '/tmp/laravel/cache',
    '/tmp/laravel/views',
    '/tmp/laravel/sessions',
    '/tmp/laravel/testing',
    '/tmp/laravel/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) mkdir($dir, 0777, true);
}

// bootstrap/cacheを/tmpにコピー
$bootstrapCache = __DIR__ . '/../bootstrap/cache';
if (!is_dir('/tmp/bootstrap/cache')) {
    mkdir('/tmp/bootstrap/cache', 0777, true);
}

// 環境変数でキャッシュパスを上書き
putenv('APP_STORAGE_PATH=/tmp/laravel');

require __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../bootstrap/app.php';

$app->useStoragePath('/tmp/laravel');
$app->instance('path.storage', '/tmp/laravel');

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);