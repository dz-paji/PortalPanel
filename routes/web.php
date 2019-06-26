<?php
use Illuminate\Support\Facades\Route;
use Faker\Provider\sv_SE\Payment;
use App\Http\Controllers\PaymentController;

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
//Route::post('payment/create', 'PaymentController@create'); // 创建支付
//Route::get('payment/getStatus', 'PaymentController@getStatus'); // 获取支付单状态
//Route::get('payment/{sn}', 'PaymentController@detail'); // 支付单详情
Route::get('payment/alipay', 'PaymentController@alipay');//支付宝支付
Route::get('payment/wechat', 'PaymentController@wechat');//微信支付
Route::get('projects/decide', 'ProjectsController@create');//Project 选择器
Route::post('projects', 'ProjectsController@store');//結果儲存器