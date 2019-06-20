<?php
use Illuminate\Routing\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['isLogin']], function() {
    Route::post('payment/create', 'PaymentController@create'); // 创建支付
    Route::get('payment/getStatus', 'PaymentController@getStatus'); // 获取支付单状态
    Route::get('payment/{sn}', 'PaymentController@detail'); // 支付单详情

});