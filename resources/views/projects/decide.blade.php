@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">请输入您的信息，以完成 Project 的选择. 每人仅有一次选择机会, 任何重复的提交将会被删除. 若您有任何问题, 请咨询微距小助手或右下角客服.</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>错误</strong> 输入不符合要求<br><br> {!! implode('<br>', $errors->all()) !!}
                    </div>
                    @endif

                    <form action="{{ url('projects') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">邮箱</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" required="required" value="{{ old('email') }}" placeholder="请输入您的邮箱">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">姓名</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" required="required" value="{{ old('name') }}" placeholder="请输入您的姓名">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">第一志愿</label>
                            <div class="col-md-6">
                                <select class="form-control" name="project1" value="{{ old('project1') }}" required>
                                <option value="陈子熙">陈子熙-编程、人工智能、机器学习</option>
                                    <option value="康讯">康讯-环球市场投资与财富管理</option>
                                    <option value="刘科余">刘科余-设计的过程体验</option>
                                    <option value="刘晓琦">刘晓琦-人类的视觉皮层是怎样处理视觉信息的?</option>
                                    <option value="刘韵吉">刘韵吉-走出去和引进来,地球村居民须知</option>
                                    <option value="吴俁婷">吴俁婷-言语无法表达之时, 便是音乐沟通之际</option>
                                    <option value="薛卓">薛卓-麦克白初探</option>
                                    <option value="张玮烨">张玮烨-拿什么拯救你,我的大白兔奶糖</option>
                                    <option value="周奕彤">周奕彤-法学初探</option>
                                </select> @error('project')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">第二志愿</label>
                            <div class="col-md-6">
                                <select class="form-control" name="project2" value="{{ old('project2') }}" required>
                                <option value="陈子熙">陈子熙-编程、人工智能、机器学习</option>
                                    <option value="康讯">康讯-环球市场投资与财富管理</option>
                                    <option value="刘科余">刘科余-设计的过程体验</option>
                                    <option value="刘晓琦">刘晓琦-人类的视觉皮层是怎样处理视觉信息的?</option>
                                    <option value="刘韵吉">刘韵吉-走出去和引进来,地球村居民须知</option>
                                    <option value="吴俁婷">吴俁婷-言语无法表达之时, 便是音乐沟通之际</option>
                                    <option value="薛卓">薛卓-麦克白初探</option>
                                    <option value="张玮烨">张玮烨-拿什么拯救你,我的大白兔奶糖</option>
                                    <option value="周奕彤">周奕彤-法学初探</option>
                                </select> @error('project')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">第三志愿</label>
                            <div class="col-md-6">
                                <select class="form-control" name="project3" value="{{ old('project3') }}" required>
                                    <option value="陈子熙">陈子熙-编程、人工智能、机器学习</option>
                                    <option value="康讯">康讯-环球市场投资与财富管理</option>
                                    <option value="刘科余">刘科余-设计的过程体验</option>
                                    <option value="刘晓琦">刘晓琦-人类的视觉皮层是怎样处理视觉信息的?</option>
                                    <option value="刘韵吉">刘韵吉-走出去和引进来,地球村居民须知</option>
                                    <option value="吴俁婷">吴俁婷-言语无法表达之时, 便是音乐沟通之际</option>
                                    <option value="薛卓">薛卓-麦克白初探</option>
                                    <option value="张玮烨">张玮烨-拿什么拯救你,我的大白兔奶糖</option>
                                    <option value="周奕彤">周奕彤-法学初探</option>
                                </select> @error('project')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desc" class="col-md-4 col-form-label text-md-right">选择第一志愿的理由</label>
                            <div class="col-md-6">
                                <input type="text" name="desc" class="form-control" required="required" value="{{ old('desc') }}" placeholder="请在这里输入您选择第一志愿的理由. 此文本框可无限向后延长">
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn waves-effect waves-light red darken-2" type="submit" name="action">提交
                                    <i class="material-icons left">send</i>
                                </button>
                            </div>
                        </div>
                </div>

                </form>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        $('select').formSelect();
    });
    var instance = M.FormSelect.getInstance(elem);
</script>
<script>
(function(i,s,o,g,r,a,m){i["DaoVoiceObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;a.charset="utf-8";m.parentNode.insertBefore(a,m)})(window,document,"script",('https:' == document.location.protocol ? 'https:' : 'http:') + "//widget.daovoice.io/widget/fd0e0a36.js","daovoice")
daovoice('init', {
  app_id: "fd0e0a36"
});
daovoice('update');
</script>

@endsection