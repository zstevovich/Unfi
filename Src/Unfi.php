<?php declare (strict_types = 1);

namespace SCH\Unfi;

use SCH\Unfi\Entity\Product;
use SCH\Unfi\Exception\UnfiException;
use Exception;

class Unfi extends BaseUnfi
{

    /**
     * @param string $file_name
     * @param string $inventory
     * @throws UnfiException
     */
    public function sendOrderToServer(string $file_name, string $inventory)
    {
        try {
            $this->request->AuthSFTP()->put($file_name, $file_name, SFTP::SOURCE_LOCAL_FILE);
        } catch (Exception $e) {
            throw new UnfiException($e->getMessage());
        } finally {
            unlink($file_name);
        }
    }
    /**
     * @param int $page
     * @param int $limit
     * @return Response
     * @throws UnfiException
     */
    public function getProducts($page = 1, $limit = 2000)
    {
        try {
            return $this->request->RequestAPI($page,$limit)->getResponse();
        } catch (Exception $e) {
            throw new UnfiException($e->getMessage());
        }
    }

    /**
     * @param int $limit
     * @return array
     * @throws UnfiException
     */
    public function getInfo($limit = 2000)
    {
        try {
            $response = $this->request->RequestAPI(1, $limit)->getResponse("info");
            if ($response instanceof Product){
                return [
                    'productCountInThisResult' => $response->getProductCountInThisResult(),
                    'pageSize'=> $response->getPageSize(),
                    'totalPages' => $response->getTotalPages(),
                    'currentPage' => $response->getCurrentPage()
                ];
            } else {
                throw new UnfiException('Response must be instance of Product Entity');
            }
        } catch (Exception $e) {
            throw new UnfiException($e->getMessage());
        }
    }
}