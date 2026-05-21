<?php
try {
    require __DIR__.'/../vendor/autoload.php';
    echo "autoload OK<br>";
    
    $app = require_once __DIR__.'/../bootstrap/app.php';
    echo "bootstrap OK<br>";
    
    require __DIR__.'/../public/index.php';
} catch (\Throwable $e) {
    echo "<pre>";
    echo $e->getMessage() . "\n";
    echo $e->getFile() . ":" . $e->getLine() . "\n";
    echo $e->getTraceAsString();
    echo "</pre>";
}