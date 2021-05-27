<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| MERCHANT_ID=SAMPLEGEN
| MERCHANT_PASSWORD=
| ENV_TEST=0
| ENV_LIVE=1
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dragonpay', [PaymentController::class, 'dragonpay']);

Route::get('/paypal_demo', function () {
    return view('paypal');
});

Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));

Route::get('/device', function () {
    return view('detact');
});

Route::get('/checkIp', function () {
    return view('checkIp');
});