<?php

class Product
{
    public $name;
    public $price;
    public $poster;
    public $description;
    protected $volume;
    public $brand;
    public $categories;

    function __construct($param)
    {
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
    }
}
