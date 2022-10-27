<?php

namespace Sendee\SendeePhp;

use Sendee\SendeePhp\Services\SendMessage;

class SendeeClient
{

    private $apiKey;

    function __construct($apiKey)
    {
        $this->apiKey = $apiKey;        
    }

    public function sendMessage($to, $infoArray)
    {
        $sendMessage = new SendMessage($this->apiKey);
        $response = $sendMessage->SendSingle($to, $infoArray);

        return $response;
    }

    public function sendBulkMessage($from, $infoArray)
    {
        $sendMessage = new SendMessage($this->apiKey);
        $response = $sendMessage->SendBulk($from, $infoArray);

        return $response;
    }
    
}