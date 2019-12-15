<?php declare (strict_types = 1);


namespace Infogram\Unfi\Entity;


class OrderProduct
{
    private $upcNumber, $partDescription, $quantityOrdered, $retailPrice, $regWholesale, $extendedPrice;
    private $unfiPoLineNumber,$onHandStatus;

    /**
     * @return mixed
     */
    public function getUpcNumber()
    {
        return $this->upcNumber;
    }

    /**
     * @param mixed $upcNumber
     */
    public function setUpcNumber($upcNumber): void
    {
        $this->upcNumber = $upcNumber;
    }

    /**
     * @return mixed
     */
    public function getPartDescription()
    {
        return $this->partDescription;
    }

    /**
     * @param mixed $partDescription
     */
    public function setPartDescription($partDescription): void
    {
        $this->partDescription = $partDescription;
    }

    /**
     * @return mixed
     */
    public function getQuantityOrdered()
    {
        return $this->quantityOrdered;
    }

    /**
     * @param mixed $quantityOrdered
     */
    public function setQuantityOrdered($quantityOrdered): void
    {
        $this->quantityOrdered = $quantityOrdered;
    }

    /**
     * @return mixed
     */
    public function getRetailPrice()
    {
        return $this->retailPrice;
    }

    /**
     * @param mixed $retailPrice
     */
    public function setRetailPrice($retailPrice): void
    {
        $this->retailPrice = $retailPrice;
    }

    /**
     * @return mixed
     */
    public function getRegWholesale()
    {
        return $this->regWholesale;
    }

    /**
     * @param mixed $regWholesale
     */
    public function setRegWholesale($regWholesale): void
    {
        $this->regWholesale = $regWholesale;
    }

    /**
     * @return mixed
     */
    public function getExtendedPrice()
    {
        return $this->extendedPrice;
    }

    /**
     * @param mixed $extendedPrice
     */
    public function setExtendedPrice($extendedPrice): void
    {
        $this->extendedPrice = $extendedPrice;
    }

    /**
     * @return mixed
     */
    public function getUnfiPoLineNumber()
    {
        return $this->unfiPoLineNumber;
    }

    /**
     * @param mixed $unfiPoLineNumber
     */
    public function setUnfiPoLineNumber($unfiPoLineNumber): void
    {
        $this->unfiPoLineNumber = $unfiPoLineNumber;
    }

    /**
     * @return mixed
     */
    public function getOnHandStatus()
    {
        return $this->onHandStatus;
    }

    /**
     * @param mixed $onHandStatus
     */
    public function setOnHandStatus($onHandStatus): void
    {
        $this->onHandStatus = $onHandStatus;
    }

}