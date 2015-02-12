@extends('admin/base')

@section('title')
@stop

@section('css')
    <link rel="stylesheet" href="static/css/admin/add-article.css"/>
@stop

@section('javascript')
    <script src="static/lib/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="static/javascript/admin/add-article.js"></script>
    <script>
        tinymce.init({
            selector: "textarea",
            plugins:'image, link',
            toolbar:[
                "styleselect | bold italic | link | image |alignleft aligncenter alignright | fontselect | fontsizeselect"
            ],
            language : 'zh_CN',
            'elements':'article_content_id'
        });

    </script>
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
        <div class=" col-sm-12 col-md-9 col-lg-9 well article-form">
            <form class="form-horizontal col-sm-12 col-md-12 col-lg-12 pull-left" method="POST" id="article_add_form" onsubmit="return false;">
                <div class="form-group">
                    <label for="article_title_name" class="col-sm-1 control-label">标题</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="article_title_name" id="article_title_id" placeholder="标题">
                    </div>
                </div>

                <div class="form-group">
                    <label for="article_slug_name" class="col-sm-1 control-label">SLUG</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="article_slug_name" id="article_slug_id" placeholder="SLUG">
                    </div>
                </div>

                <div class="form-group">
                    <label for="article_is_avaliable_name" class="col-sm-1 control-label">状态</label>
                    <div class="col-sm-10">
                        <select name="article_is_avaliable_name" id="article_is_avaliable_id" class="form-control">
                            <option value="0">FALSE</option>
                            <option value="1">TRUE</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="article_digest_name" class="col-sm-1 control-label">摘要</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="article_digest_id"  name="article_digest_name" placeholder="摘要">
                    </div>
                </div>
                <div class="form-group">
                    <label for="article_content_name" class="col-sm-1 control-label">内容</label>
                    <div class="col-sm-10">
                        <textarea name="article_content_name" rows="30" class="form-control" style="resize: none" id="article_content_id"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10 col-lg-offset-1 col-lg-10">
                        <button type="submit" class="btn btn-default" id="article_form_submit">提交</button>
                        <button class="btn btn-default">重置</button>
                        <button class="btn btn-default">预览</button>
                    </div>
                </div>
            </form>
        </div>
        <div class=" col-sm-12 col-md-2  col-lg-2 well article-form">
            <div id="">
                <div id="article_category">
                    <select class="form-control" id="article_category_select">
                    </select>
                </div>
                <br/>
                <form class="form-inline" onsubmit="return false;">
                    <div class="form-group">
                        <input type="text" class="form-control" id="article_category_input" placeholder="分类">
                    </div>
                    <button type="submit" class="btn-sm" id="article_category_submit">确定</button>
                </form>
            </div>
        </div>

        <div class="col-sm-12 col-md-2 col-lg-2 well article-form">
            <div id="article_tag" class=""></div>
            <br/>
            <form class="form-inline" onsubmit="return false;">
                <div class="form-group">
                    <input type="text" class="form-control small" id="article_tag_input" placeholder="标签">
                </div>
                <button type="submit" class="btn-sm" id="article_tag_submit">确定</button>
            </form>
        </div>
    </div>
</div>
@stop

