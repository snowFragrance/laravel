@extends("layouts.main")
@section("title","分类管理")
@section("content")
    <a href="{{route("Class.add")}}" class="btn btn-info">添加</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>类名</th>
        </tr>
        @foreach($classes as $class)
            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->name}}</td>
                <td>
                    <a href="{{route("Class.edit",$class->id)}}">编辑</a>
                    <a href="{{route("Class.del",$class->id)}}">删除</a>
                </td>
            </tr>
        @endforeach
    </table>

{{--    <div class="pull-right"> {{$articles->links()}}</div>--}}

@endsection