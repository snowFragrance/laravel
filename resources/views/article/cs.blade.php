@extends("layouts.main")
@section("title","分类文章")
@section("content")
{{--    <a href="{{route("article.add")}}" class="btn btn-info">添加</a>--}}

    <table class="table">
        <tr>
            <th>标题</th>
            <th>作者</th>
            <th>简介</th>
            <th>发布时间</th>
        </tr>
        @foreach($rows as $row)
            <tr>
                <td>{{$row->title}}</td>
                <td>{{$row->author}}</td>
                <td>{{$row->intr}}</td>
                <td>{{$row->created_at}}</td>
            </tr>
        @endforeach
    </table>

{{--    <div class="pull-right"> {{$articles->links()}}</div>--}}

@endsection