<?php

namespace SendeePhp;

use SendeePhp\Services;

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

    public function sendBulkMessage()
    {
        $sendMessage = new SendMessage();
        $response = $sendMessage->SendBulk($this->apiKey);

        return $response;
    }
    
}