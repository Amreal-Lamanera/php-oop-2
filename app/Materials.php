<?php

trait Materials
{
    protected $materials;

    protected function setMaterials($materials)
    {
        $this->materials[] = $materials;
    }

    public function getMaterials()
    {
        return $this->materials;
    }
}
