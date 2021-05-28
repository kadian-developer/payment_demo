<?php
// require 'vimeo/vimeo-api/autoload.php';
use Vimeo\Vimeo;

$client = new Vimeo("{c075db2dc502efcc6ca8fbdc79cc2c1018b2d9ba}", "{DmiyYzze38tswAnRDlGp9mKqnF/Jt3dhVeFS2IdvpE8hUOFPy7alJdPGjd8Z75/n/z4cXamE7cDmqzTuwIn+LEcT/KP0bIxjzxKKqQFM8e07DZYFsEl+cpjvJiabzstN}", "{85dae9d08572a96a1165ab633a4f08a7}");

$response = $client->request('/tutorial', array(), 'GET');
print_r($response);