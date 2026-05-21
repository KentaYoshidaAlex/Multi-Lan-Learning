<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../bootstrap/app.php';

// サービスプロバイダーの登録状況を確認
$providers = $app->getLoadedProviders();
$hasView = array_key_exists('Illuminate\View\ViewServiceProvider', $providers);

echo "ViewServiceProvider loaded: " . ($hasView ? 'YES' : 'NO') . "<br>";

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// kernelをbootする
$kernel->bootstrap();

$providers2 = $app->getLoadedProviders();
$hasView2 = array_key_exists('Illuminate\View\ViewServiceProvider', $providers2);

echo "ViewServiceProvider after bootstrap: " . ($hasView2 ? 'YES' : 'NO') . "<br>";

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);