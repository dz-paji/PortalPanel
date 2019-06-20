@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="padding-top:0;">
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="portlet light bordered">
            <div class="portlet-body">
                <div class="alert alert-info" style="text-align: center;">
                    请使用<strong style="color:red;">支付宝扫描如下二维码
                </div>
                <div class="row" style="text-align: center; font-size: 1.05em;">
                    <div class="col-md-12">
                        <div class="table-scrollable">
                            <table class="table table-hover table-light">
                                <tr>
                                    <td align="right" width="50%">款项名称：</td>
                                    <td align="left" width="50%">微距报名费</td>
                                </tr>
                                <tr>
                                    <td align="right">应付金额：</td>
                                    <td align="left">1499元</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        扫描下方二维码进行付款
                                        <br>
                                        请于15分钟内支付，到期未支付订单将自动关闭
                                        <br>
                                        支付后请稍作等待，系统将自动处理
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <img id="qr" src="{{$payment->qr_local_url}}"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('script')
    <script type="text/javascript">
        // 每800毫秒查询一次订单状态
        $(document).ready(function(){
            // 支付宝直接跳转支付
                document.body.innerHTML += unescapeHTML("{{$payment->qr_code}}");
                document.forms['alipaysubmit'].submit();
            setInterval("getStatus()", 800);
        });

        // 检查支付单状态
        function getStatus() {
            var sn = '{{$payment->sn}}';

            $.get("{{url('payment/getStatus')}}", {sn:sn}, function (ret) {
                console.log(ret);
                if (ret.status == 'success') {
                    layer.msg(ret.message, {time:1500}, function() {
                        window.location.href = '{{url('invoices')}}';
                    });
                } else if(ret.status == 'error') {
                    layer.msg(ret.message, {time:1500}, function () {
                        window.location.href = '{{url('invoices')}}';
                    })
                }
            });
        }

        // 付款二维码自适应
        var w = window.innerWidth;
        var h = window.innerHeight;
        x = document.getElementById("qr");
        if (w <= h) {
            x.setAttribute("width", "75%");
        } else {
            x.setAttribute("height", "75%");
        }

        // 还原html脚本 < > & " '
        function unescapeHTML(str) {
            str = "" + str;
            return str.replace(/&lt;/g, "<").replace(/&gt;/g, ">").replace(/&amp;/g, "&").replace(/&quot;/g, '"').replace(/&#039;/g, "'");
        }
    </script>

@endsection