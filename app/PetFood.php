<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
    public $petAge;
    public $petSize;
    public $weight;
    public $dim;

    public function __construct($param)
    {
        parent::__construct($param);
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
    }

    public function setVol()
    {
        $this->volume = 1;
        foreach ($this->dim as $value) {
            $this->volume *= $value;
        }
        $this->volume *= $this->weight;
    }
}
