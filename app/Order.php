<?php

class Order
{
    private $products = [];
    private $amount = 0;
    private $deliveryPrice = 0;

    public function __construct($product)
    {
        $this->setProducts($product);
        $this->setAmount($product);
        $this->setDeliveryPrice($product);
    }

    private function setAmount($product)
    {
        foreach ($product as $value) {
            $this->amount += $value->getPrice();
        }
    }

    private function setProducts($product)
    {
        foreach ($product as $value) {
            if (in_array($value->getName(), array_keys($this->products))) {
                $this->products[$value->getName()][1]++;
            } else {
                $this->products[$value->getName()] = [$value, 1];
            }
        }
    }

    private function setDeliveryPrice($product)
    {
        if ($this->amount > 200) {
            $this->deliveryPrice = 0;
            return;
        }
        $totalVolume = 0;
        foreach ($product as $value) {
            $totalVolume += $value->getVolume();
        }
        if ($totalVolume <= 100)
            $this->deliveryPrice = 10;
        elseif ($totalVolume <= 200)
            $this->deliveryPrice = 50;
        elseif ($totalVolume <= 300)
            $this->deliveryPrice = 80;
        else
            $this->deliveryPrice = 120;
    }
}
