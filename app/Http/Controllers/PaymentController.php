<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Components\Helpers;
// use App\Components\AlipaySubmit;
// use App\Http\Models\Goods;
// use App\Http\Models\Order;
// use App\Http\Models\Payment;
// use Payment\Client\Charge;
// use Response;
// use Redirect;
// use Log;
use DB;
use Auth;


/**
 * 支付控制器
 *
 * Class PaymentController
 *
 * @package App\Http\Controllers
 */
class PaymentController extends Controller
{
    protected static $systemConfig;

    //function __construct()
    //{
    //    self::$systemConfig = Helpers::systemConfig();
    //}

    //支付宝支付
    public function alipay()
    {
        $id = DB::table('users')->where('id', Auth::user()->id)->value('id');
        return view('payment/alipay', ['id' => $id]);
    }

    //微信支付
    public function wechat()
    {
        $id = DB::table('users')->where('id', Auth::user()->id)->value('id');
        return view('payment/wechat', ['id' => $id]);
    }


    // 创建支付单
    // public function create(Request $request)
    // {
    //     $goods_id = intval($request->get('goods_id'));
    //     $pay_type = $request->get('pay_type');

    //     $goods = Goods::query()->where('is_del', 0)->where('status', 1)->where('id', $goods_id)->first();
    //     if (!$goods) {
    //         return Response::json(['status' => 'fail', 'data' => '', 'message' => '创建支付单失败：商品或服务已下架']);
    //     }

    //     // 判断是否存在同个商品的未支付订单
    //     $existsOrder = Order::query()->where('status', 0)->where('user_id', Auth::user()->id)->where('goods_id', $goods_id)->exists();
    //     if ($existsOrder) {
    //         return Response::json(['status' => 'fail', 'data' => '', 'message' => '创建支付单失败：尚有未支付的订单，请先去支付']);
    //     }


    //     // 计算实际应支付总价
    //     $amount = "1";

    //     DB::beginTransaction();
    //     try {
    //         $orderSn = date('ymdHis') . mt_rand(100000, 999999);
    //         $sn = makeRandStr(12);

    //         // 支付方式
    //         if (self::$systemConfig['is_f2fpay']) {
    //             $pay_way = 1;
    //         } elseif (self::$systemConfig['is_1shanghu']) {
    //             $pay_way = 2;
    //         }

    //         // 生成订单
    //         $order = new Order();
    //         $order->order_sn = $orderSn;
    //         $order->user_id = Auth::user()->id;
    //         $order->goods_id = $goods_id;
    //         $order->origin_amount = $goods->price;
    //         $order->amount = $amount;
    //         $order->expire_at = date("Y-m-d H:i:s", strtotime("+" . $goods->days . " days"));
    //         $order->is_expire = 0;
    //         $order->pay_way = $pay_way;
    //         $order->status = 0;
    //         $order->save();

    //         // 生成支付单
    //         if (self::$systemConfig['is_alipay']) {
    //             $parameter = [
    //                 "service"        => "create_forex_trade", // WAP:create_forex_trade_wap ,即时到帐:create_forex_trade
    //                 "partner"        => self::$systemConfig['alipay_partner'],
    //                 "notify_url"     => self::$systemConfig['website_url'] . "/api/alipay", // 异步回调接口
    //                 "return_url"     => self::$systemConfig['website_url'],
    //                 "out_trade_no"   => $orderSn,  // 订单号
    //                 "subject"        => "Package", // 订单名称
    //                 //"total_fee"      => $amount, // 金额
    //                 "rmb_fee"        => $amount,   // 使用RMB标价，不再使用总金额
    //                 "body"           => "",        // 商品描述，可为空
    //                 "currency"       => self::$systemConfig['alipay_currency'], // 结算币种
    //                 "product_code"   => "NEW_OVERSEAS_SELLER",
    //                 "_input_charset" => "utf-8"
    //             ];

    //             // 建立请求
    //             $alipaySubmit = new AlipaySubmit(self::$systemConfig['alipay_sign_type'], self::$systemConfig['alipay_partner'], self::$systemConfig['alipay_key'], self::$systemConfig['alipay_private_key']);
    //             $result = $alipaySubmit->buildRequestForm($parameter, "post", "确认");
    //         } elseif (self::$systemConfig['is_f2fpay']) {
    //             $result = Charge::run("ali_qr", [
    //                 'use_sandbox'     => false,
    //                 "partner"         => self::$systemConfig['f2fpay_app_id'],
    //                 'app_id'          => self::$systemConfig['f2fpay_app_id'],
    //                 'sign_type'       => 'RSA2',
    //                 'ali_public_key'  => self::$systemConfig['f2fpay_public_key'],
    //                 'rsa_private_key' => self::$systemConfig['f2fpay_private_key'],
    //                 'notify_url'      => self::$systemConfig['website_url'] . "/api/f2fpay", // 异步回调接口
    //                 'return_url'      => self::$systemConfig['website_url'],
    //                 'return_raw'      => false
    //             ], [
    //                 'body'     => '',
    //                 'subject'  => '微距 - 收款结算系统', // TODO：改为生成随机零售商品，比如：银鹭牛奶花生复合蛋白饮品（CAN370g）、晋江牛肉馆 - 外卖订单
    //                 'order_no' => $orderSn,
    //                 'amount'   => $amount,
    //             ]);
    //         }

    //         $payment = new Payment();
    //         $payment->sn = $sn;
    //         $payment->user_id = Auth::user()->id;
    //         $payment->oid = $order->oid;
    //         $payment->order_sn = $orderSn;
    //         $payment->pay_way = 1;
    //         $payment->amount = $amount;
    //         if (self::$systemConfig['is_youzan']) {
    //             $payment->qr_id = $result['response']['qr_id'];
    //             $payment->qr_url = $result['response']['qr_url'];
    //             $payment->qr_code = $result['response']['qr_code'];
    //             $payment->qr_local_url = $this->base64ImageSaver($result['response']['qr_code']);
    //         } elseif (self::$systemConfig['is_alipay']) {
    //             $payment->qr_code = $result;
    //         } elseif (self::$systemConfig['is_f2fpay']) {
    //             $payment->qr_code = $result;
    //             $payment->qr_url = ' https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $result . '&bg=ffffff&fg=1eabfc&pt=1c73bd&m=0&w=400&el=1&inpt=1eabfc';
    //             $payment->qr_local_url = $payment->qr_url;
    //         }
    //         $payment->status = 0;
    //         $payment->save();

    //         DB::commit();

    //         if (self::$systemConfig['is_alipay']) {
    //             // Alipay返回支付信息
    //             return Response::json(['status' => 'success', 'data' => $result, 'message' => '创建订单成功，正在转到付款页面，请稍后']);
    //         } else {
    //             return Response::json(['status' => 'success', 'data' => $sn, 'message' => '创建订单成功，正在转到付款页面，请稍后']);
    //         }
    //     } catch (\Exception $e) {
    //         DB::rollBack();

    //         Log::error('创建支付订单失败：' . $e->getMessage());

    //         return Response::json(['status' => 'fail', 'data' => '', 'message' => '创建订单失败：' . $e->getMessage()]);
    //     }
    // }

    // // 支付单详情
    // public function detail(Request $request, $sn)
    // {
    //     if (empty($sn)) {
    //         return Redirect::to('services');
    //     }

    //     $payment = Payment::query()->with(['order', 'order.goods'])->where('sn', $sn)->where('user_id', Auth::user()->id)->first();
    //     if (!$payment) {
    //         return Redirect::to('services');
    //     }

    //     $order = Order::query()->where('oid', $payment->oid)->first();
    //     if (!$order) {
    //         \Session::flash('errorMsg', '订单不存在');

    //         return Response::view('payment/' . $sn);
    //     }

    //     $view['payment'] = $payment;
    //     $view['website_logo'] = self::$systemConfig['website_logo'];
    //     $view['website_analytics'] = self::$systemConfig['website_analytics'];
    //     $view['website_customer_service'] = self::$systemConfig['website_customer_service'];
    //     $view['is_f2fpay'] = self::$systemConfig['is_f2fpay'];

    //     return Response::view('payment.detail', $view);
    // }

    // // 获取订单支付状态
    // public function getStatus(Request $request)
    // {
    //     $sn = $request->get('sn');

    //     if (empty($sn)) {
    //         return Response::json(['status' => 'fail', 'data' => '', 'message' => '请求失败']);
    //     }

    //     $payment = Payment::query()->where('sn', $sn)->where('user_id', Auth::user()->id)->first();
    //     if (!$payment) {
    //         return Response::json(['status' => 'error', 'data' => '', 'message' => '支付失败']);
    //     } elseif ($payment->status > 0) {
    //         return Response::json(['status' => 'success', 'data' => '', 'message' => '支付成功']);
    //     } elseif ($payment->status < 0) {
    //         return Response::json(['status' => 'error', 'data' => '', 'message' => '订单超时未支付，已自动关闭']);
    //     } else {
    //         return Response::json(['status' => 'fail', 'data' => '', 'message' => '等待支付']);
    //     }
    // }
}
