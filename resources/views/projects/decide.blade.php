@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">请输入您的信息，以完成 Project 的选择. 每人仅有一次选择机会, 任何重复的提交将会被删除. 若您有任何问题, 请咨询微距小助手或右下角客服.</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>新增失败</strong> 输入不符合要求<br><br> {!! implode('<br>', $errors->all()) !!}
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
                                <input type="text" name="nanme" class="form-control" required="required" value="{{ old('name') }}" placeholder="请输入您的电话">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Project</label>
                            <div class="col-md-6">
                                <select class="form-control" name="project" value="{{ old('gender') }}" required>
                                    @if($num_p1 < 2 )
                                    <option value="project1">project1</option>
                                    @endif
                                    @if($num_p2 < 2 )
                                    <option value="project2">project2</option>
                                    @endif
                                    @if($num_p3 < 2 )
                                    <option value="project3">project3</option>
                                    @endif
                                    @if($num_p4 < 2 )
                                    <option value="project4">project4</option>
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