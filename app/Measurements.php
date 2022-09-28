<?php

trait Measurements
{
    protected $weight;
    protected $dim;

    protected function setMeasurements($param)
    {
        $this->weight = $param['weight'];
        $this->dim = $param['dim'];
        // echo 'Measurement funziona';
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDim()
    {
        return $this->dim;
    }
}
