<?php

namespace Sendee\SendeePhp\Services;

use Exception;
use GuzzleHttp\Client;

class SendMessage
{
    private $apiKey;

    function __construct($apiKey)
    {
        $this->baseUrl = 'https://gosendee.com/api/';
        $this->apiKey = $apiKey;
    }

    public function sendSingle($to, $infoArray)
    {
        try {
            $client = new Client([
                'base_uri' => $this->baseUrl,
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('POST', 'sms/send', [
                'headers'=> ['Authorization' => 'Bearer '.$this->apiKey],
                'json'    => [
                    'from' => $infoArray['from'],
                    'to' => $to,
                    'body' => $infoArray['body']
                ],
            ]);
    
            $code = $response->getStatusCode();
            
            $body = $response->getBody();
    
            return $body->getContents();

        } catch (Exception $e) {
            $error = [
                'success' => 'false',
                'message' => 'An error has occured.' 
            ];
            return json_encode($error);
        }
        

    }

    public function sendBulk($from, $infoArray)
    {
        //dd($infoArray);
        try {
            $client = new Client([
                'base_uri' => $this->baseUrl,
                'timeout'  => 2.0,
            ]);
            
            $response = $client->request('POST', 'sms/bulk/send', [
                'headers'=> ['Authorization' => 'Bearer '.$this->apiKey],
                'json'    => [
                    'from' => $from,
                    'to' => $infoArray['to'],
                    'body' => $infoArray['body']
                ],
            ]);
    
            $code = $response->getStatusCode();
            
            $body = $response->getBody();
    
            return $body->getContents();

        } catch (Exception $e) {
            $error = [
                'success' => 'false',
                'message' => 'An error has occured.' 
            ];
            return json_encode($error);
        }
    }
}