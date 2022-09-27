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

    // opzionali
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
}
