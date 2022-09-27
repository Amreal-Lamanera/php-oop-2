<?php

class Order
{
    private $products = [];
    private $productsNum = [];
    private $amount = 0;

    public function __construct($product)
    {
        $this->setProducts($product);
        $this->setAmount($product);
    }

    public function setAmount($products)
    {
        foreach ($products as $value) {
            $this->amount += $value->getPrice();
        }
    }

    public function setProducts($product)
    {
        foreach ($product as $value) {
            if (in_array($value, $this->products)) {
                $this->productsNum[$value->getName()]++;
            } else {
                $this->products[] = $value;
                $this->productsNum[$value->getName()] = 1;
            }
        }
    }
}
