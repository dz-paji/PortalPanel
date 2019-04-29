@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($isPaid == 1)
                        <p>您已完成支付，若有任何问题，请与右下角客服联系</p>
                    @else
                        <p>我们已经收到了您的报名信息，但您还未支付报名费用，请及时缴纳以完成报名。若有任何问题，请与右下角客服联系</p>
                        <!--<p>请选择您的支付方式：</p>
                        <li><a href="https://google.com"><img src="img/alipay.png" width="150px"></a></li>-->
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-image">
            <img src="img/alipay.png" width="150px">
        </div>
        <div class="card-content">
            <p>支付宝，是中国的第三方支付平台，于2003年10月15日上线，最初为阿里巴巴集團旗下网站淘宝网的一个部门，2004年12月8日正式独立运营，現為阿里巴巴集團旗下蚂蚁金服的子公司。目前，支付宝已经从单一的支付工具，发展为提供支付、生活服务、政务服务、社交、理财、保险、公益等多个场景并逐步覆盖全行业的开放性平台.</p>
        </div>
        <div class="card-action">
            <a href="#">现在支付</a>
        </div>
      </div>
    </div>
        <div class="col-md-6">
        <div class="card">
            <div class="card-image">
            <img src="img/alipay.png" width="150px">
        </div>
        <div class="card-content">
            <p>支付宝，是中国的第三方支付平台，于2003年10月15日上线，最初为阿里巴巴集團旗下网站淘宝网的一个部门，2004年12月8日正式独立运营，現為阿里巴巴集團旗下蚂蚁金服的子公司。目前，支付宝已经从单一的支付工具，发展为提供支付、生活服务、政务服务、社交、理财、保险、公益等多个场景并逐步覆盖全行业的开放性平台.</p>
        </div>
        <div class="card-action">
            <a href="#">现在支付</a>
        </div>
    </div>

  </div>
</div>

<!--<div class="row">
    <div class="col s12 m4 l8">
      <div class="card grey lighten-4">
        <div class="card-content black-text">
          <span class="card-title">用户面板</span>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if($isPaid == 1)
                <p>您已完成支付，若有任何问题，请与右下角客服联系</p>
            @else
                <p>我们已经收到了您的报名信息，但您还未支付报名费用，请及时缴纳以完成报名。若有任何问题，请与右下角客服联系</p>
                <p>请选择按照下方链接进行支付</p>
                <div class="card-action">
                <a href="#">使用支付宝支付</a>
                </div>

            @endif
        </div>
      </div>
    </div>
  </div>-->
              
@endsection
