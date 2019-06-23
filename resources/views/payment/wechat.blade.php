@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row" style="text-align: center; font-size: 1.05em;">
                <div class="col-md-12">
                    <div class="table-scrollable">
                        <ul class="collection">
                            <li class="collection-item">请使用微信扫描下方二维码进行付款</li>
                            <li class="collection-item">款项名称： 微距报名费</li>
                            <li class="collection-item">应付金额： 1499 元</li>
                            <li class="collection-item">款项需人工审核，请您耐心等待。确认支付完成后直接关闭网页即可</li>
                            <li class="collection-item">请在付款备注处备注: <strong><code>{{$id}}</code><strong></li>
                            <li class="collection-item"><img src="#"
                                    alt="Snipaste_2019-06-22_20-49-41.png" title="Snipaste_2019-06-22_20-49-41.png">
                            </li>
                        </ul>
                    </div>
                    <button class="btn waves-effect waves-light red white-text" onclick="history.back();">点我返回上一页
                        <i class="material-icons right">keyboard_backspace</i>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection