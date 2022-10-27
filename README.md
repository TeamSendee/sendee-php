### sendee-php
[![Latest Stable Version](http://poser.pugx.org/sendee/sendee-php/v)](https://packagist.org/packages/sendee/sendee-php) [![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=TeamSendee_sendee-php&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=TeamSendee_sendee-php) [![Total Downloads](http://poser.pugx.org/sendee/sendee-php/downloads)](https://packagist.org/packages/sendee/sendee-php) [![Latest Unstable Version](http://poser.pugx.org/sendee/sendee-php/v/unstable)](https://packagist.org/packages/sendee/sendee-php) [![License](http://poser.pugx.org/sendee/sendee-php/license)](https://packagist.org/packages/sendee/sendee-php) [![PHP Version Require](http://poser.pugx.org/sendee/sendee-php/require/php)](https://packagist.org/packages/sendee/sendee-php)

## Documentation
The documentation for the Sendee API can be found [here](https://docs.gosendee.com/sendee-api-docs)

## Installation
sendee-php is available on packagist as the [sendee/sendee-php](https://packagist.org/packages/sendee/sendee-php) package

```
composer require sendee/sendee-php
```

## Quickstart

#### Send an SMS

```php
// Send a single SMS using Sendee's REST API and PHP
<?php
$apiKey = "1|ZXXXXXX";

$client = new Sendee\SendeePhp\SendeeClient($apiKey);
$message =  $client->sendMessage(
  '+15134939410', // Text this Number
  [
    'from' => '+17479998108', // From a valid Twilio number
    'body' => 'Queue me up with Sendee'
  ]
);

print $message;

```

#### Send a Bulk SMS

```php
// Send a multiple SMS with the same body using Sendee's REST API and PHP
<?php
$apiKey = "1|ZXXXXXX";

$client = new Sendee\SendeePhp\SendeeClient($apiKey);
$message =  $client->sendBulkMessage(
  '+17479998108', // From a valid Twilio Number
  [
    'to' => [ // Text this array of numbers
        '+15134939410','+15134939410','+15134939410',
    ],
    'body' => 'this is an api test bulk'
   ]
);

print $message;
```

## Getting Help

If you need help installing or using the library, [file a support ticket](https://gosendee.com/contact).

If you've found a bug in the library or would like new features added open issues or pull requests against this repo!