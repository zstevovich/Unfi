<?php declare (strict_types = 1);

namespace SCH\Unfi;

use SCH\Unfi\Exception\UnfiException;
use Exception;
use GuzzleHttp\Exception\ClientException;
use phpseclib\Net\SFTP;
use GuzzleHttp\Client;

/*
 * define('API_KEY', config('supplier.unfi.key','bf32ab7e091c45cda83446b0d75a6d12'));
 * define('SFTP_USER_NAME', config('supplier.sftp.username','johnmwesigwa@gmail.com'));
 * define('SFTP_PASSWORD', config('supplier.sftp.password','summer@2019'));
 * define('STAGING', config('supplier.staging',true));
 * define('ENABLED', config('supplier.enabled',false));
 */

define('END_POINT_API', 'https://unfi.azure-api.net/api/product');
define('SFTP_TEST', 'sftp://uat-edi.unfi.com');
define('SFTP_PRODUCTION', 'sftp://edi.unfi.com');

class Request
{
    private $testFtpEndPoint, $productionFtpEndPoint, $apiEndPoint, $apiCredential, $ftpUserName, $ftpPassword, $folder;
    private $staging;

    public function __construct($sftp_un, $sftp_pass, $apiKey, $staging = true)
    {
        $this->apiEndPoint = END_POINT_API;
        $this->productionFtpEndPoint = SFTP_PRODUCTION;
        $this->testFtpEndPoint = SFTP_TEST;
        $this->staging = $staging;
        $this->apiCredential = $apiKey;
        $this->ftpUserName = $sftp_un;
        $this->ftpPassword = $sftp_pass;
        $this->folder = 'order';
    }

    /**
     * @return SFTP
     * @throws UnfiException
     */
    public function AuthSFTP() : SFTP
    {
        $endpoint = $this->staging ? $this->testFtpEndPoint : $this->productionFtpEndPoint;
        $sftp = new SFTP($endpoint);

        if (!$sftp->login($this->ftpUserName, $this->ftpPassword)) {
            throw new UnfiException('Login failed');
        }

        return $sftp;
    }


    /**
     * @param int $page
     * @param int $limit
     * @return Response
     * @throws UnfiException
     */
    public function RequestAPI($page = 1, $limit = 2000): Response
    {
        $client = new Client(
            [
                'headers' => ['Connection' => 'close'],
                CURLOPT_FORBID_REUSE => true,
                CURLOPT_FRESH_CONNECT => true,
            ]
        );
        try {
            $response = $client->request('GET', "$this->apiEndPoint?page=$page&limit=$limit", [
                'headers' => [
                    'User-Agent' => 'testing/1.0',
                    'Content-Type' => 'application/json',
                    'Ocp-Apim-Subscription-Key' => $this->apiCredential
                ]
            ]);
            $response = $response->getBody()->getContents();
            $res = new Response();
            $res->setResponse($response);
            return $res;
        } catch (ClientException $e) {
            throw new UnfiException($e->getMessage());
        } catch (Exception $e){
            throw new UnfiException($e->getMessage());
        }
    }
}