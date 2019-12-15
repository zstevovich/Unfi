<?php declare (strict_types = 1);

namespace Infogram\Unfi;

use Infogram\Unfi\Entity\Order;
use Infogram\Unfi\Entity\OrderProduct;

class Service
{

    public static function makeOrder(array $order, array $orderItem) : array
    {
        $createOrder = new Order($order);
        $createProduct = new OrderProduct();
        $createOrder->setProductLine($createProduct);
        $createTxt = self::createTempFile($order, $orderItem);
        return [
            'HVA' => $createTxt,
            'RAC' => $createTxt
            ];
    }

    public static function createTempFile(array $orderData, array $productData) : string
    {
        $filename = generateRandomString().'.txt';
        $tmp = sys_get_temp_dir().DIRECTORY_SEPARATOR.$filename;
        $fp = fopen($tmp, 'w');
        for ($i = 0; $i < count($orderData); $i++) {
            fwrite($fp, $orderData[$i]."\n");
        }
        for ($i = 0; $i < count($productData); $i++) {
            fwrite($fp, $productData[$i]."\n");
        }
        fclose($fp);
        return $tmp;
    }

}