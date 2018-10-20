@extends("layouts.main")
@section("title","添加分类")
@section("content")

    <form class="form-horizontal" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="ll" class="col-sm-2 control-label">类名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ll" placeholder="想要的分类名" name="name">
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


