<?php
// require 'vimeo/vimeo-api/autoload.php';
use Vimeo\Vimeo;

$client = new Vimeo("{client_id}", "{client_secret}", "{access_token}");

$response = $client->request('/tutorial', array(), 'GET');
print_r($response);