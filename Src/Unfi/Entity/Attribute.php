<?php declare (strict_types = 1);


namespace Infogram\Unfi\Entity;


class Attribute
{
    private $pack, $size, $sellingUnit, $ingredients, $countryOfOrigin, $type = 's', $keywords;

    /**
     * @return mixed
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * @param mixed $pack
     */
    public function setPack($pack): void
    {
        $this->pack = $pack;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSellingUnit()
    {
        return $this->sellingUnit;
    }

    /**
     * @param mixed $sellingUnit
     */
    public function setSellingUnit($sellingUnit): void
    {
        $this->sellingUnit = $sellingUnit;
    }

    /**
     * @return mixed
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param mixed $ingredients
     */
    public function setIngredients($ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return mixed
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param mixed $countryOfOrigin
     */
    public function setCountryOfOrigin($countryOfOrigin): void
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type = "s";
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param mixed $keywords
     */
    public function setKeywords($keywords): void
    {
        $this->keywords = $keywords;
    }
}