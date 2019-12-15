<?php declare (strict_types = 1);


namespace SCH\Unfi;

use SCH\Unfi\Entity\Attribute;
use SCH\Unfi\Entity\Image;
use SCH\Unfi\Entity\Inventory;
use SCH\Unfi\Entity\Product;
use SCH\Unfi\Entity\Size;
use SCH\Unfi\Exception\UnfiException;

class Response
{
    private $response;

    /**
     * argument $i terminate products, allowing is only info about response
     * @param null $i
     * @return mixed
     * @throws UnfiException
     */
    public function getResponse($i = null)
    {
        $getProducts = json_decode($this->response);
        $info = new Product();
        $info->setProductCountInThisResult($getProducts->PageInfo->ProductCountInThisResult);
        $info->setPageSize($getProducts->PageInfo->PageSize);
        $info->setTotalPages($getProducts->PageInfo->TotalPages);
        $info->setCurrentPage($getProducts->PageInfo->CurrentPage);
        if ($i) {
            return $info;
        }
        $products = [];
        if (!isset($getProducts->Products) || count($getProducts->Products) == 0) {
            throw new UnfiException("Object products is empty");
        }
        foreach ($getProducts->Products as $product) {
            $productEntity = new Product();
            $productEntity->setProductNumber($product->ProductNumber);
            if (isset($product->PricingInfo[4])) {
                $productEntity->setPrice((float)$product->PricingInfo[4]->SuggestedRetailPrice);
                if (isset($product->Images) && is_array($product->Images)) {
                    $images = array_reverse($product->Images);
                    foreach ($images as $key => $image) {
                        $validateImage = preg_match("#\.(jpg|jpeg|gif|png)$# i", $image);
                        if ($validateImage){
                            $img = new Image();
                            $img->setPath($image);
                            $img->setBaseName($image);
                            if (strpos($image, '_front') !== false) {
                                $img->setIsMain(true);
                            } else {
                                $img->setIsMain(false);
                            }
                            $productEntity->setImages($img);
                        }
                    }
                }
                $productEntity->setDescription($product->Description);
                $productEntity->setBarCode($product->UPC);
                $productEntity->setProductName($product->ProductName);
                $productEntity->setCategory($product->Subcategory);
                $productEntity->setMainCategory($product->Category);
                $productEntity->setBrand($product->Brand);
                if (isset($product->Inventory)) {
                    $inventory = new Inventory();
                    foreach ($product->Inventory as $item => $value) {
                        if ($item == "HVA") {
                            $inventory->setHVA($value);
                        } elseif ($item == "RAC") {
                            $inventory->setRAC($value);
                        } elseif ($item == "GLY") {
                            $inventory->setGLY($value);
                        } elseif ($item == "HG") {
                            $inventory->setHG($value);
                        }

                        $productEntity->setInventory($inventory);
                    }
                }
                $productEntity->setDiscountable($product->Discountable ? true : false);
                $attribute = new Attribute();
                $attribute->setCountryOfOrigin($product->CountryOfOrigin);
                $attribute->setIngredients($product->Ingredients);
                $attribute->setPack($product->Pack);
                $attribute->setSellingUnit($product->SellingUnit);
                $attribute->setSize($product->Size);
                $attribute->setKeywords($product->Keywords);
                $productEntity->setAttributes($attribute);
                $size = new Size();
                $size->setHeight($product->Height);
                $size->setLength($product->Length);
                $size->setWeight($product->Weight);
                $size->setWidth($product->Width);
                $productEntity->setSize($size);
                $products[] = $productEntity;


            }
        }
        return $products;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response): void
    {
        $this->response = $response;
    }

}