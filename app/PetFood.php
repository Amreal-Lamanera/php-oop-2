<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Measurements.php';

class PetFood extends Product
{
    use Measurements;
    protected $petAge = null;
    protected $petSize = null;
    // protected $weight;
    // protected $dim;

    public function __construct($param)
    {
        parent::__construct($param);
        //obbligatori
        $this->setMeasurements($param);
        $this->setVol();
    }

    // opzionali
    public function setPetAge($petAge)
    {
        if (is_string($petAge))
            $this->petAge = $petAge;
    }

    public function setPetSize($petSize)
    {
        if (is_string($petSize))
            $this->petSize = $petSize;
    }
}
