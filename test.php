<?php
require './vendor/autoload.php';

$url = "https://mpapi.mallgroup.com/v1/products?client_id=mp_puzzlepoint_cz__cHJvZHwzNzkw&filter=";


$client = new GuzzleHttp\Client([
    'verify'  => false,
    'headers' => [
        'content-type' => 'application/json'
    ]
]);




$response = $client->post($url, [
    'ATTRIBUTES' => [
        'category_id' => '971',
        'stage' => 'draft',
        'vat' => 21,
        'id' => 'F192621',
        'title' => 'Title of product',
        'shortdesc' => 'Short description of the product',
        'longdesc' => 'Long description of the product',
        'priority' => 1,
        'shortdesc' => 'Short description of the product',
        'longdesc' => 'Long description of the product',
        'price' => 1933,

        ],
]);

echo $response->getStatusCode();

echo $response->getHeaderLine('content-type');



