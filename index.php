<?php

require __DIR__ . '/vendor/autoload.php';

use src\classes\Product;

$ps5 = new Product;
$ps5->name = 'PlayStation 5';
$ps5->price = 2899.99;
$ps5->stock = 4;

dump($ps5);
