<?php

$http_client_ip = $_SERVER[ 'HTTP_CLINT_IP' ];
$http_forwarded_for = $_SERVER[ 'HTTP_FORWARDED_FOR' ];
$remote_addr = $_SERVER[ 'REMOTE_ADDR' ];
$ip=0;

if( !empty( $http_client_ip )) {
    $ip = $http_client_ip;
} else if ( !empty( $http_forwarded_for )) {
    $ip = $http_forwarded_for;
} else if ( !empty( $remote_addr )) {
    $ip = $remote_addr;
}

echo $ip;

// function getRealIpAddr() {
//     if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet {
//         $ip=$_SERVER['HTTP_CLIENT_IP'];
//     }
//     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//         $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
//     }
//     else {
//         $ip=$_SERVER['REMOTE_ADDR'];
//     }
//     return $ip;
// }

