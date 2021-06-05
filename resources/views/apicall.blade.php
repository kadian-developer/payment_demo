<?php
use Vimeo\Vimeo;

$client = new Vimeo("{f3bce8f9ec6a20cc200e94e710d6ff3da68b594a}", "{2xa/1b4s8DlaVnkO5Z1DPSyI9w279PJPP4V73lRfBAEDW8alB5RQW+ZUDFrhrvaPdl4mA7QhbwkZpNtsQGgceO2q+w7vW36O9dctJzrmSAy1rfSfa3C/jpas2g7G+E47}", "{dc7ddbe4515e3671d17f11bb747d2a6e
}");
// dd($client);
$response = $client->request('/tutorial', array(), 'GET');
print_r($response);

// use Vimeo\Vimeo;
// // Include the Vimeo API file. Download from here: https://github.com/vimeo/vimeo-php-lib
// // require_once('vimeo.php');

// /*
//  * Helper Function to Handle Vimeo Authentication
//  */ 
//     function authenticate_vimeo(){
//         // Settings below.
//         // You'll need to set these to your account's as show here: // Get from https://developer.vimeo.com/apps/new

//         $vimeo_id = 'user12345'; // Get from https://vimeo.com/settings, must be in the form of user123456
//         $consumer_key = 'f3bce8f9ec6a20cc200e94e710d6ff3da68b594a';
//         $consumer_secret = '2xa/1b4s8DlaVnkO5Z1DPSyI9w279PJPP4V73lRfBAEDW8alB5RQW+ZUDFrhrvaPdl4mA7QhbwkZpNtsQGgceO2q+w7vW36O9dctJzrmSAy1rfSfa3C/jpas2g7G+E47';
//         $token = 'dc7ddbe4515e3671d17f11bb747d2a6e';
//         $token_secret = '1234567';

//         // Do an authentication call        
//         $vimeo = new phpVimeo($consumer_key, $consumer_secret);
//         $vimeo->setToken($token, $token_secret);        
//         $vimeo->user_id = $vimeo_id;

//         return $vimeo;
//     }   

// /*
//  * This is how you make a call to the Vimeo API
//  */ 
//     // Authenticate Vimeo
//     $vimeo = authenticate_vimeo();

//     // Try to access the API
//     try {
//         $args = array(
//             'full_response' => true,
//             'user_id'       => $vimeo->user_id, // This limits the request to the one user's videos
//             'per_page'      => 50, // 50 is the max per page, use "page" parameter for more pages
//         );
//         $results = $vimeo->call('vimeo.videos.getUploaded', $args); // List of methods here: https://developer.vimeo.com/apis/advanced/methods
//     }
//     catch (VimeoAPIException $e) {
//         $error = "Encountered an API error -- code {$e->getCode()} - {$e->getMessage()}";
//     }

//     // Do something with error or results
//     if( isset($error) ) {
//         print_r($error);
//     } else {
//         print_r($results); // This will be a gigantic PHP object of all videos and meta data
//     }