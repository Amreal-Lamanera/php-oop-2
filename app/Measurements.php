<?php

trait Measurements
{
    protected $weight;
    protected $dim;

    protected function setMeasurements($param)
    {
        if (!(is_numeric($param['weight']))) {
            throw new Exception('Il peso deve essere un numero');
        }
        if ($param['weight'] < 0) {
            throw new Exception('Il peso deve essere positivo');
        }
        foreach ($param['dim'] as $dim) {
            if (!is_numeric($dim)) {
                throw new Exception('Le dimensioni devono essere un numero!');
            }
            if ($dim < 0) {
                throw new Exception('Le dimensioni devono essere positive');
            }
        }
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
