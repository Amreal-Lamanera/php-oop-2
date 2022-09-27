<?php

include_once __DIR__ . '/Product.php';

class PetToy extends Product
{
    protected $weight;
    protected $dim;
    protected $materials;

    public function __construct($param)
    {
        parent::__construct($param);
        //obbligatori
        $this->weight = $param['weight'];
        $this->dim = $param['dim'];
        $this->setVol();
    }

    // opzionali
    public function setMaterials($materials)
    {
        if (is_array($materials))
            $this->materials = $materials;
    }
}
