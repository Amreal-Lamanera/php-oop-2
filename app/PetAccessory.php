<?php

include_once __DIR__ . '/Product.php';

class PetAccessory extends Product
{
    protected $weight;
    protected $dim;
    protected $material;
    protected $volume;

    public function __construct($param)
    {
        parent::__construct($param);
        //obbligatori
        $this->weight = $param['weight'];
        $this->dim = $param['dim'];
        $this->setVol();
    }

    // opzionali
    public function setMaterial($material)
    {
        if (is_string($material))
            $this->material = $material;
    }

    public function setVolume($volume)
    {
        if (is_int($volume))
            $this->volume = $volume;
    }
}
