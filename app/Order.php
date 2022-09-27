<?php

class Order
{
    private $products = [];
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
            if (in_array($value->getName(), array_keys($this->products))) {
                $this->products[$value->getName()][1]++;
            } else {
                $this->products[$value->getName()] = [$value, 1];
            }
        }
    }
}
