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
<div class="container">
    <div class="row">
        <div class=" col-sm-12 col-md-8 col-lg-8 jumbotron">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="article_title_name" class="col-sm-2 control-label">标题</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="article_title_name" id="article_title_id" placeholder="标题">
                    </div>
                </div>
                <div class="form-group">
                    <label for="article_digest_name" class="col-sm-2 control-label">摘要</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="article_digest_id"  name="article_digest_name" placeholder="摘要">
                    </div>
                </div>
                <div class="form-group">
                    <label for="article_content_name" class="col-sm-2 control-label">内容</label>
                    <div class="col-sm-10">
                        <textarea name="article_content_name" id="" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">提交</button>
                        <button class="btn btn-default">重置</button>
                        <button class="btn btn-default">预览</button>
                    </div>
                </div>
            </form>
        </div>
        <div class=" col-sm-12 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1 jumbotron">

        </div>
    </div>
</div>
@stop

