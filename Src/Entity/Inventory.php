<?php declare (strict_types = 1);


namespace Infogram\Unfi\Entity;


class Inventory
{
    private $GLY = 0, $HG = 0, $HVA = 0, $RAC = 0;

    /**
     * @return mixed
     */
    public function getGLY()
    {
        return $this->GLY;
    }

    /**
     * @param mixed $GLY
     */
    public function setGLY($GLY): void
    {
        $this->GLY = $GLY;
    }

    /**
     * @return mixed
     */
    public function getHG()
    {
        return $this->HG;
    }

    /**
     * @param mixed $HG
     */
    public function setHG($HG): void
    {
        $this->HG = $HG;
    }

    /**
     * @return mixed
     */
    public function getHVA()
    {
        return $this->HVA;
    }

    /**
     * @param mixed $HVA
     */
    public function setHVA($HVA): void
    {
        $this->HVA = $HVA;
    }

    /**
     * @return mixed
     */
    public function getRAC()
    {
        return $this->RAC;
    }

    /**
     * @param mixed $RAC
     */
    public function setRAC($RAC): void
    {
        $this->RAC = $RAC;
    }

}