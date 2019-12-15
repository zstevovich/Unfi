<?php declare (strict_types = 1);


namespace SCH\Unfi\Entity;

/*
 * Price - HGW
 * Inventory: GLY, HG, HVA, RAC
 */
class Product extends BaseEntity
{
    private $productName, $description, $barCode, $images, $category, $mainCategory, $brand, $attributes, $size;
    private $price, $discountable, $inventory, $productNumber;

    /**
     * @return mixed
     */
    public function getProductNumber()
    {
        return $this->productNumber;
    }

    /**
     * @param mixed $productNumber
     */
    public function setProductNumber($productNumber): void
    {
        $this->productNumber = $productNumber;
    }

    /**
     * @return Inventory
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * @param Inventory $inventory
     */
    public function setInventory($inventory): void
    {
        $this->inventory = $inventory;
    }


    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param mixed $barCode
     */
    public function setBarCode($barCode): void
    {
        $this->barCode = $barCode;
    }

    /**
     * @return image|null
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param Image|null $images
     */
    public function setImages($images): void
    {
        $this->images[] = $images;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return Attribute
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Attribute $attributes
     */
    public function setAttributes($attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return Size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param Size $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDiscountable()
    {
        return $this->discountable;
    }

    /**
     * @param mixed $discountable
     */
    public function setDiscountable($discountable): void
    {
        $this->discountable= $discountable;
    }

    /**
     * @return mixed
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @param mixed $totalPages
     */
    public function setTotalPages($totalPages): void
    {
        $this->totalPages = $totalPages;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param mixed $currentPage
     */
    public function setCurrentPage($currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * @return mixed
     */
    public function getProductCountInThisResult()
    {
        return $this->ProductCountInThisResult;
    }

    /**
     * @param mixed $ProductCountInThisResult
     */
    public function setProductCountInThisResult($ProductCountInThisResult): void
    {
        $this->ProductCountInThisResult = $ProductCountInThisResult;
    }

    /**
     * @return mixed
     */
    public function getMainCategory()
    {
        return $this->mainCategory;
    }

    /**
     * @param mixed $mainCategory
     */
    public function setMainCategory($mainCategory): void
    {
        $this->mainCategory = $mainCategory;
    }
}

