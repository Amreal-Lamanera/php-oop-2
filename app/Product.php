<?php

class Product
{
    protected $name;
    protected $price;
    protected $description;
    protected $poster = null;
    protected $volume = null;
    protected $brand = null;
    protected $categories = [];

    function __construct($param)
    {
        // obbligatori
        $this->name = $param['name'];
        $this->price = $param['price'];
        $this->description = $param['description'];
    }

    // rendo setVol pubblica con la possibilità di avere prodotti generici
    public function setVol()
    {
        if (!func_get_args()) {
            $this->volume = 1;
            foreach ($this->dim as $value) {
                $this->volume *= $value;
            }
            $this->volume *= $this->weight;
        } else {
            $arg = func_get_args();
            $this->volume = $arg[0];
        }
    }

    // opzionali - setters
    public function setBrand($brand)
    {
        if (is_string($brand))
            $this->brand = $brand;
    }

    public function setPoster($poster)
    {
        if (filter_var($poster, FILTER_VALIDATE_URL) || is_file($poster))
            $this->poster = $poster;
    }

    public function setCategories($categories)
    {
        if (is_array($categories))
            $this->categories = $categories;
    }

    //getters
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getVolume()
    {
        return $this->volume;
    }
}
