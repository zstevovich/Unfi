<?php declare (strict_types = 1);


namespace SCH\Unfi;

use SCH\Unfi\Exception\UnfiException;

abstract class BaseUnfi
{
    protected $request;

    /**
     * BaseUnfi constructor.
     * @param $apiKey
     * @param null $enabled
     * @param null $inventoryCredential
     * @param bool $staging
     * @throws UnfiException
     */
    public function __construct($apiKey, $inventoryCredential = null, $staging = true, $enabled = null)
    {
        if (!$enabled) {
            throw new UnfiException('Integration Unfi is not enabled');
        }
        $connection = $inventoryCredential;
        if (!is_array($inventoryCredential) || is_null($inventoryCredential)) {
            $sftpUserName = null;
            $sftpPassword = null;
        } else {
            $sftpUserName = $connection[0];
            $sftpPassword = $connection[1];
        }
        $this->request = new Request($sftpUserName, $sftpPassword, $apiKey, $staging);

    }

    abstract function sendOrderToServer(string $output, string $inventory);
    abstract function getProducts($page = 1, $limit = 1000);
    abstract function getInfo($limit = 1000);
}