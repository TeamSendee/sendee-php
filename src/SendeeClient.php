<?php

namespace SendeePhp;

use SendeePhp\Services;

class SendeeClient
{

    private $apiKey;

    function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = 'https://gosendee.com/api/';
    }

    public function sendMessage()
    {
        $url = $this->baseUrl . 'sms/send';

        $sendMessage = new SendMessage();
        $response = $sendMessage->SendSingle();

        return $response;
    }

    public function sendBulkMessage()
    {
        $url = $this->baseUrl . 'sms/bulk/send';

        $sendMessage = new SendMessage();
        $response = $sendMessage->SendBulk();

        return $response;
    }
    
}