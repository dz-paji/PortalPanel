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
                            <label for="gender" class="col-md-4 col-form-label text-md-right">姓名</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" required="required" value="{{ old('name') }}" placeholder="请输入您的姓名">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Project</label>
                            <div class="col-md-6">
                                <select class="form-control" name="project" value="{{ old('project') }}" required>
                                    @if($p1 < 8)
                                    <option value="project1">陈子熙-编程、人工智能、机器学习</option>
                                    @endif
                                    @if($p2 < 8)
                                    <option value="project2">康讯-环球市场投资与财富管理</option>
                                    @endif
                                    @if($p3 < 8)
                                    <option value="project3">刘科余-设计的过程体验</option>
                                    @endif
                                    @if($p4 < 8)
                                    <option value="project4">刘晓琦-人类的视觉皮层是怎样处理视觉信息的?</option>
                                    @endif
                                    @if($p5 < 8)
                                    <option value="project5">刘韵吉-走出去和引进来,地球村居民须知</option>
                                    @endif
                                    @if($p6 < 8)
                                    <option value="project6">吴俁婷-言语无法表达之时, 便是音乐沟通之际</option>
                                    @endif
                                    @if($p7 < 8)
                                    <option value="project7">薛卓-麦克白初探</option>
                                    @endif
                                    @if($p8 < 8)
                                    <option value="project8">张玮烨-拿什么拯救你,我的大白兔奶糖</option>
                                    @endif
                                    @if($p9 < 8)
                                    <option value="project9">周奕彤-法学初探</option>
                                    @endif

                                </select> @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
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

@endsection