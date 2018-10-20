@extends("layouts.main")
@section("title","文章管理")
@section("content")
    <a href="{{route("article.add")}}" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>作者</th>
            <th>简介</th>
            <th>类别</th>
            <th>发布时间</th>
            <th>修改时间</th>
            <th>操作</th>
        </tr>
        @foreach($rows as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->author}}</td>
                <td>{{$row->intr}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
                <td>
                    <a href="{{route("article.edit",$row->id)}}">编辑</a>
                    <a href="{{route("article.del",$row->id)}}">删除</a>
                </td>
            </tr>
        @endforeach
    </table>

{{--    <div class="pull-right"> {{$articles->links()}}</div>--}}

@endsection