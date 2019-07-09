@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    <h5 class="grey-text text-darken-1">
                        报名规则：
                        <br>
                        代表选出自己最想参与的三个project，并根据意愿程度先后排出第一志愿、第二志愿、第三志愿。在表单下方用100字左右简要陈述第一志愿、第二志愿的选择原因。
                    </h5>
                </div>
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
                                <input type="email" name="email" class="form-control" required="required"
                                    value="{{ old('email') }}" placeholder="请输入您的邮箱">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">姓名</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" required="required"
                                    value="{{ old('name') }}" placeholder="请输入您的姓名">
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
                                    <option value="刘韵吉">石韵吉-走出去和引进来,地球村居民须知</option>
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
                                    <option value="刘韵吉">石韵吉-走出去和引进来,地球村居民须知</option>
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
                                    <option value="刘韵吉">石韵吉-走出去和引进来,地球村居民须知</option>
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
                                <textarea id="desc" class="materialize-textarea" name="desc"
                                    required="required"></textarea>
                                <label for="desc">请在这里输入您选择第一志愿的理由. 此文本框可无限延长</label>
                                <!-- <input type="text" name="desc" class="form-control" required="required" value="{{ old('desc') }}" placeholder="请在这里输入您选择第一志愿的理由. 此文本框可无限向后延长"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desc" class="col-md-4 col-form-label text-md-right">选择第二志愿的理由</label>
                            <div class="col-md-6">
                                <textarea id="desc" class="materialize-textarea" name="desc2"
                                    required="required"></textarea>
                                <label for="desc">请在这里输入您选择第二志愿的理由. 此文本框可无限延长</label>
                                <!-- <input type="text" name="desc" class="form-control" required="required" value="{{ old('desc') }}" placeholder="请在这里输入您选择第一志愿的理由. 此文本框可无限向后延长"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="checkbox" class="col-md-4 col-form-label text-md-right">我确认可携带必须的物料</label>
                            <div class="col-md-6">
                                <label>
                                    <div class="form-group row">
                                        <input type="checkbox" required="required" />
                                        <span>确认</span>
                                </label>

                            </div>

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
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-12">
                <h5 class="grey-text text-darken-1">
                    报名需知：
                    <br>
                    <br>

                    小组project作为微距论坛的一大重要环节，你的选择将决定你与哪位导师共度3天微距之旅，与哪一学科相识相知，在何种project形式中进行探索。所以，我们希望你在进行project选择前，充分思考自己的学术兴趣、爱好，充分了解导师的传授内容与形式，以保证小组project效果最大化。
                    <br>
                    <br>

                    注意请在报名前翻阅公众号文章《2019微距国际青年论坛小组project大揭秘》，确保自己能满足意向project的物料要求
                    <br>
                    <br>

                    录取规则：
                    <br>

                    <br>

                    我们会在代表报名结束后，统一对代表进行project分配。按照第一志愿优先，志愿顺序依次递减的原则，当某一小组报名人数超过10人时，对学员进行报名意愿充分性的考量，进行择优选取。
                    <br>
                    <br>

                    备注：
                    <br>
                    <br>

                    如果你没有被分配至第一志愿，请保持积极对待。每一位导师都很优秀，project也会非常精彩。
                    <br>
                    <br>

                    如果代表想对分配结果进行复议，请微信联系微距小助手。
                    <br>
                    <br>

                    希望大家尽快，并且仔细填写。
                </h5>
            </div>

        </div>
    </div>
</div>
</div>
</div>

<script>
    $(document).ready(function () {
        $('select').formSelect();
    });
    var instance = M.FormSelect.getInstance(elem);

</script>
@endsection
