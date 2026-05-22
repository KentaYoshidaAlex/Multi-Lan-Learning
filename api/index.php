<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// /tmp にキャッシュディレクトリを作成
if (!is_dir('/tmp/bootstrap/cache')) {
    mkdir('/tmp/bootstrap/cache', 0777, true);
}
if (!is_dir('/tmp/laravel/views')) {
    mkdir('/tmp/laravel/views', 0777, true);
}

require __DIR__.'/../vendor/autoload.php';

$app = new Illuminate\Foundation\Application(
    dirname(__DIR__)
);

// bootstrap/cacheを/tmpに向ける
$app->useBootstrapPath('/tmp/bootstrap');
$app->useStoragePath('/tmp/laravel');

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);