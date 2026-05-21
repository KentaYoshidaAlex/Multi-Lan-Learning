<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

$defaults = Illuminate\Support\ServiceProvider::defaultProviders()->toArray();

echo "<pre>";
print_r($defaults);
echo "</pre>";