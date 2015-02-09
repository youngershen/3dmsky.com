@extends('admin/base')

@section('title')
@stop

@section('css')
@stop

@section('javascript')
@stop

@section('headbar')
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="搜索">
        </div>
        <button type="submit" class="btn-sm btn-default">搜索</button>
    </form>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">操作<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="/admin/add-article">添加文章</a></li>
        </ul>
    </li>
@stop


@section('body')

    @foreach ($articles as $article)
        <p>This is article {{ $article->id }}</p>
        <p><a href="/admin/article?id={{$article->id}}">{{$article->title}}</a></p>
        <p>{{$article->content}}</p>
    @endforeach

@stop
