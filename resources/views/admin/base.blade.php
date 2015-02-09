<!DOCTYPE html>
<html lang='zh-cmn-Hans'>
    <head>
        <meta name="_token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@section('title')3DM星空后台管理@show</title>
        <base href="/">
        <base target="_self">
        <link rel="stylesheet" href="/static/lib/bootstrap-3.3.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/static/lib/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/static/css/admin/common.css"/>
        @section('css') @show
        @section('head') @show
    </head>

    <body>
        <!-- navi bar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">3DM星空后台管理</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @section('headbar') @show
                        <li><a href="#">修改密码</a></li>
                        <li><a href="#">退出</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navi bar end-->
        <div class="container-fluid">s
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="{{$all_menu or ''}}"><a href="/admin">总览 <span class="sr-only">(current)</span></a></li>
                        <li class="{{$article_menu or ''}}"><a href="/admin/articles">文章管理</a></li>
                        <li class="{{$tag_menu or ''}}"><a href="/admin/tags">标签管理</a></li>
                        <li class="{{$category_menu or ''}}"><a href="/admin/categories">分类管理</a></li>
                        <li class="{{$comment_menu or ''}}"><a href="/admin/comments">评论管理</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li class="{{$system_menu or ''}}"><a href="/admin/systems">系统设置</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li class="{{$user_menu or ''}}"><a href="/admin/users">用户管理</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @section('body') @show
                </div>
            </div>
        </div>

        <script  type="text/javascript" src="/static/lib/jquery/jquery-2.1.3.min.js"></script>
        <script  type="text/javascript" src="/static/lib/bootstrap-3.3.2-dist/js/bootstrap.js"></script>
        @section('javascript')
        @show
    </body>
</html>