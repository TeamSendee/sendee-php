<?php

namespace SendeePhp\Services;

use GuzzleHttp\Client;

class SendMessage
{
    private $apiKey;

    function __construct($apiKey)
    {
        $this->baseUrl = 'https://gosendee.com/api';
        $this->apiKey = $apiKey;
    }

    public function sendSingle($to, $infoArray)
    {
        $client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout'  => 2.0,
        ]);

        $response = $client->request('POST', '/sms/send', [
            'headers'=> ['Authorization' => 'Bearer '.$this->apiKey],
            'json'    => [
                'from' => $infoArray['from'],
                'to' => $to,
                'body' => $infoArray['body']
            ],
        ]);

    }

    public function sendBulk($apiKey)
    {
        $url = $this->baseUrl . 'sms/bulk/send';
    }
}