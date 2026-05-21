<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../bootstrap/app.php';

try {
    $app->bootstrapWith([
        \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
        \Illuminate\Foundation\Bootstrap\LoadConfiguration::class,
        \Illuminate\Foundation\Bootstrap\HandleExceptions::class,
        \Illuminate\Foundation\Bootstrap\RegisterFacades::class,
        \Illuminate\Foundation\Bootstrap\RegisterProviders::class,
    ]);
    echo "RegisterProviders OK<br>";
    
    $providers = $app->getLoadedProviders();
    $hasView = array_key_exists('Illuminate\View\ViewServiceProvider', $providers);
    echo "ViewServiceProvider loaded: " . ($hasView ? 'YES' : 'NO') . "<br>";
    
    $app->boot();
    echo "Boot OK<br>";
    
} catch (\Throwable $e) {
    echo "<h1>Error during bootstrap</h1>";
    echo "<p><strong>Message:</strong> " . $e->getMessage() . "</p>";
    echo "<p><strong>File:</strong> " . $e->getFile() . "</p>";
    echo "<p><strong>Line:</strong> " . $e->getLine() . "</p>";
}