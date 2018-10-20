@extends("layouts.main")
@section("title","文章添加")
@section("content")

    <form class="form-horizontal" method="post" >
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="标题" name="title">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">作者</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="作者" name="author">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">简介</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="简介" name="intr">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">分类</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputPassword3" name="sorts_id">
                    @foreach($classes as $class)
                        <option value="{{$class->id}}">{{$class->name}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-sm-2 control-label">内容</label>
            <div class="col-sm-10">
                <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="button" class="btn btn-info" onclick="history.go(-1)" value="返回">
                <button type="submit" class="btn btn-success">提交</button>
            </div>
        </div>
    </form>

@endsection


