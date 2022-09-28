<?php

include_once __DIR__ . '/app/Product.php';
include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetToy.php';
include_once __DIR__ . '/app/PetAccessory.php';
include_once __DIR__ . '/app/Order.php';

$data = [
    'name' => 'Crocchette di manzo',
    'description' => 'Le migliori crocchette sulla piazza',
    'price' => 19.99,
    'weight' => 12,
    'dim' => [0.4, 0.5, 0.6],
];

$crocchette = new PetFood($data);
$crocchette->setBrand('Almo Nature');
$crocchette->setPetSize('Medium');
$crocchette->setPetAge('Adult');
$crocchette->setCategories(['Crocchette per cani', 'Monoproteico']);
$crocchette->setPoster('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/manzo/fresco/5/400/68015_pla_almo_nature_holistic_adult_rind_reis_medium_746_12kg_dog_5.jpg');

var_dump($crocchette);

$data = [
    'name' => 'Tiragraffi',
    'description' => 'Tiragraffi gigante',
    'price' => 199.99,
    'weight' => 50,
    'dim' => [1, 1, 2],
];

$tiragraffi = new PetToy($data);
$tiragraffi->setBrand('GraffiamiAncora &co.');
$tiragraffi->setCategories(['Giochi per gatti', 'Tiragraffi']);
$tiragraffi->setPoster('https://www.ibs.it/images/8050043120823_0_0_536_0_75.jpg');
$tiragraffi->addMaterials(['Plastica', 'Poliestere', 'Legno']);


var_dump($tiragraffi);

$data = [
    'name' => 'Ciotola',
    'description' => 'Ciotola piccola in acciaio',
    'price' => 9.99,
    'weight' => 1,
    'dim' => [0.5, 0.5, 0.2],
];

$ciotola = new PetAccessory($data);
$ciotola->setBrand('Ciotolatari');
$ciotola->setCategories(['Ciotola']);
$ciotola->setPoster('https://arcaplanet.vtexassets.com/arquivos/ids/227032-1200-auto?v=637454789025870000&width=1200&height=auto&aspect=true');
$ciotola->addMaterials(['Acciaio']);
$ciotola->setVolume(470);

var_dump($ciotola);

// TEST: ordine prezzo > 200
$ordine = new Order([$tiragraffi, $ciotola, $crocchette, $crocchette]);
var_dump($ordine);

// TEST: ordine prezzo < 200 | volume < 200
$ordine = new Order([$tiragraffi]);
var_dump($ordine);

$data = [
    'name' => 'Tiragraffi Economico',
    'description' => 'Tiragraffi economico gigante',
    'price' => 2.99,
    'weight' => 50,
    'dim' => [1, 1, 2],
];

$tiragraffi2 = new PetToy($data);
$tiragraffi2->setBrand('GraffiamiAncora &co.');
$tiragraffi2->setCategories(['Giochi per gatti', 'Tiragraffi']);
$tiragraffi2->setPoster('https://www.ibs.it/images/8050043120823_0_0_536_0_75.jpg');
$tiragraffi2->addMaterials(['Plastica', 'Poliestere', 'Legno']);
var_dump($tiragraffi2);

// TEST: ordine prezzo < 200 | volume < 300
$ordine = new Order([$tiragraffi2, $tiragraffi2]);
var_dump($ordine);

// TEST: ordine prezzo < 200 | volume > 300
$ordine = new Order([$tiragraffi2, $tiragraffi2, $tiragraffi2, $ciotola]);
var_dump($ordine);

// TEST: prodotto generico
$prodotto = new Product(
    [
        'name' => 'Prodotto',
        'price' => 80.99,
        'description' => 'Un prodotto a caso'
    ]
);
$prodotto->setVol(250);
$ordine = new Order([$prodotto]);
var_dump($ordine);

// ECCEZIONE DIM < 0

$data = [
    'name' => 'Prova eccezione dim',
    'description' => 'bla bla bla',
    'price' => 9000,
    'weight' => 500,
    'dim' => [-1, 1, 2],
];

try {
    $exception = new PetToy($data);
    var_dump($exception);
} catch (Exception $e) {
    echo $e->getMessage();
}

// ECCEZIONE WEIGHT < 0

$data = [
    'name' => 'Prova eccezione dim',
    'description' => 'bla bla bla',
    'price' => 9000,
    'weight' => -500,
    'dim' => [1, 1, 2],
];

try {
    $exception = new PetToy($data);
    var_dump($exception);
} catch (Exception $e) {
    echo $e->getMessage();
}

// ECCEZIONE DIM NON NUMERICO

$data = [
    'name' => 'Prova eccezione dim',
    'description' => 'bla bla bla',
    'price' => 9000,
    'weight' => 500,
    'dim' => ['ciao', 1, 2],
];

try {
    $exception = new PetToy($data);
    var_dump($exception);
} catch (Exception $e) {
    echo $e->getMessage();
}

// ECCEZIONE WEIGHT NON NUMERICO

$data = [
    'name' => 'Prova eccezione dim',
    'description' => 'bla bla bla',
    'price' => 9000,
    'weight' => 'ciao',
    'dim' => [1, 1, 2],
];

try {
    $exception = new PetToy($data);
    var_dump($exception);
} catch (Exception $e) {
    echo $e->getMessage();
}
