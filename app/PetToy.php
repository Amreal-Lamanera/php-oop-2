<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Measurements.php';
include_once __DIR__ . '/Materials.php';

class PetToy extends Product
{
    use Measurements, Materials;
    // protected $weight;
    // protected $dim;
    // protected $materials;

    public function __construct($param)
    {
        parent::__construct($param);
        //obbligatori
        $this->setMeasurements($param);
        $this->setVol();
    }

    // opzionali
    public function addMaterials(array $materials)
    {
        $this->setMaterials($materials);
    }
}
