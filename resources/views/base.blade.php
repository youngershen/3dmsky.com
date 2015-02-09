<!DOCTYPE html>
<html lang='zh-cmn-Hans'>
    <head>
        <meta http-equiv="content-type" content="text/html">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="charset" content="utf8">
        <meta name="keywords" content="@section('keyword') 游戏，单机游戏，游戏攻略，攻略，游戏开发，网游，评论，独立游戏，独立 @show">
        <meta name="description" content="@section('description')3DM星空 是一个以单机游戏攻略为主的独立网站@show">
        <meta name="author"  content="@section('author')3DM星空 @show">
        <meta name="revised" content="@section('revised') 3DM星空 @show">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta content="telephone=no" name="format-detection" />
        <meta content="email=no" name="format-detection" />
        <meta name="_token" content="{{ csrf_token() }}" />

        <title>@section('title')3DM星空@show</title>
        <base href="/">
        <base target="_self">
        <link rel="stylesheet" href="/static/lib/bootstrap-3.3.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/static/lib/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/static/css/common.css"/>
        @section('css') @show
        @section('head') @show
    </head>
    <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">3DM星空</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse navi_position " >
                <ul class="nav navbar-nav pull-left">
                    <li class="active"><a href="#">文章</a></li>
                    <li><a href="#about">讨论</a></li>
                    <li><a href="#contact">关于</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">分类<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"></a></li>
                            <li><a href="#">PS3</a></li>
                            <li><a href="">xbox360</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href=""  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >@我<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">收藏</a></li>
                                <li><a href="">私信</a></li>
                                <li><a href="">投稿</a></li>
                                <li><a href="">注销</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href=""  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >登录 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">QQ帐号</a></li>
                                <li><a href="">新浪微博</a></li>
                                <li><a href="">3DM星空</a></li>
                                <li><a href="">忘记密码</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    @section('body')
    @show

    <hr class="featurette-divider">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <footer>
                    <p class="pull-right"><a href="#">回到顶部</a></p>
                    <p>&copy; 2014 3DM星空
                </footer>
            </div>
        </div>

    </div>

    <script  type="text/javascript" src="/static/lib/jquery/jquery-2.1.3.min.js"></script>
    <script  type="text/javascript" src="/static/lib/bootstrap-3.3.2-dist/js/bootstrap.js"></script>
    @section('javascript')
    @show
    </body>
</html>
