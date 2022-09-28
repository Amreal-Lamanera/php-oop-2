<?php

trait Materials
{
    protected $materials;

    protected function setMaterials($materials)
    {
        foreach ($materials as $material) {
            $this->materials[] = $material;
        }
        // echo 'Materials funziona';
    }

    public function getMaterials()
    {
        return $this->materials;
    }
}
