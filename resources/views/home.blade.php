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
                    <p>您还未支付报名费用，请及时缴纳以完成报名。若有任何问题，请与右下角客服联系</p>
                    <p>请选择您的支付方式：</p>
                    <li><a href="https://google.com"><img src="img/alipay.png" width="150px"></a></li>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
