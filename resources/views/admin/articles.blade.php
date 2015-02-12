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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9 well">
                @foreach ($articles as $article)
                    <div class="jumbotron">
                        <h3>
                            <a href="/admin/article?id={{$article->id}}">{{$article->title}}</a>
                        </h3>
                        <p>{!! $article->content !!}</p>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-12 col-md-2  col-lg-2 well">
                <div id="article_category">
                    <select class="form-control" id="article_category_select">
                    </select>
                </div>

                <br/>

                <div>
                    <span class="label label-success tag-body">水电费是的</span>
                    <span class="label label-success tag-body">水电费是的</span>
                    <span class="label label-success tag-body">水电费是的</span>
                    <span class="label label-success tag-body">水电费是的</span>
                    <span class="label label-success tag-body">水电费是的</span>
                    <span class="label label-success tag-body">水电费是的</span>
                    <span class="label label-success tag-body">水电费是的</span>
                </div>
            </div>

        </div>
    </div>

@stop
