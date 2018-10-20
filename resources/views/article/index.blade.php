@extends("layouts.main")
@section("title","首页")
@section("content")
    <a href="{{route("article.add")}}" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>标题</th>
            <th>作者</th>
            <th>类别</th>
            <th>简介</th>
            <th>发布时间</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->author}}</td>
                <td>{{$article->name}}</td>
                <td>{{$article->intr}}</td>
                <td>{{$article->created_at}}</td>
            </tr>
        @endforeach
    </table>

{{--    <div class="pull-right"> {{$articles->links()}}</div>--}}

@endsection