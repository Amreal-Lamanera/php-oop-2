<?php

include_once __DIR__ . '/app/Product.php';
include_once __DIR__ . '/app/PetFood.php';

$data = [
    'name' => 'Crocchette di manzo',
    'description' => 'Le migliori crocchette sulla piazza',
    'price' => 19.99,
    'brand' => 'Almo Nature',
    'weight' => 5,
    'dim' => [0.4, 0.5, 0.6],
];

$crocchette = new PetFood($data);
$crocchette->setVol();

var_dump($crocchette);
