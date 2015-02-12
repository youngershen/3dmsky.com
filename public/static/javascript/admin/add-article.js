/**
 * Created by youngershen on 15-2-9.
 */

var load_categories  = function()
{
    $.ajax({
        type:'GET',
        url: '/cms/category/all',
        success: function (data)
        {
            var html = " <select class='form-control' id='article_category_select'>";

            $('#article_category').html();
            for(var i = 0 ; i < data.length ; i++)
            {
                var temp = ' <option value="' + data[i].id +'"> ' + data[i].name + '</option>'
                html += temp;
            }
            $('#article_category').html(html);

        },

        error:function(data)
        {
            alert('服务器忙，获取分类失败');
        }
    });
}

var load_tags = function()
{
    $.ajax({
        type:'GET',
        url :'/cms/tag/all',
        success:function(data)
        {
            var html = '';

            $('#article_tag').html('');

            for(var i = 0 ; i < data.length; i++)
            {
                html += "<span onclick=article_tag_click(this) class='label label-success tag-body' value="+ data[i].id +">"+ data[i].name +"</span>";
            }

            $('#article_tag').html(html);
        },
        error:function(data)
        {
            console.log(data);
        }
    });
}

var article_tag_click = function(dom)
{

    if($(dom).attr('clicked') == 'true')
    {
        $(dom).attr('clicked', 'false');
        $(dom).attr('class', 'label label-success tag-body');
    }
    else
    {
        $(dom).attr('clicked', 'true');
        $(dom).attr('class', 'label label-warning tag-body');
    }
}


$('#article_tag_submit').click(function(){

    var tag = $('#article_tag_input').val();
    var token = $('meta[name="_token"]').attr('content');

    $.ajax({
        type:'POST',
        url : '/cms/tag/store',
        data: {
            name:tag,
            _token: token
        },
        success : function(data)
        {
            if(data.state)
            {
                alert('标签创建成功');
                load_tags();
            }
            else
            {
                alert(data.message['name'][0]);
            }
        },
        error: function(data)
        {
            console.log(data);
        }
    });

});

$('#article_category_submit').click(function(){

    var category = $('#article_category_input').val();
    var token = $('meta[name="_token"]').attr('content');

    $.ajax({
        type:'POST',
        url:'/cms/category/store',
        data:{
            '_token':token,
            'name':category
        },
        success:function(data)
        {
            if(data.state)
            {
                load_categories();
                alert('分类创建成功');
            }
            else
            {
                alert(data.message['name'][0]);
            }
        },
        error: function (data) {

            alert('服务器忙,请稍后再试');
        }
    });
});

$('#article_form_submit').click(function() {

    var tags = $("span.tag-body");
    var token = $('meta[name="_token"]').attr('content');
    var tags_id = [];
    for (var i = 0; i < tags.length; i++)
    {
        var obj = $(tags[i]);

        if(obj.attr('clicked') && obj.attr('clicked') == 'true')
        {
            var html = "<input name='tag' type='hidden' value='"+ obj.attr('value') +"'>";

            $('#article_add_form').append(html);
            tags_id.push(obj.attr('value'));
        }
    }
    var category = $('#article_category_select').val();

    var title = $('#article_title_id').val();
    var content = $('#article_content_id').val();
    var digest = $('#article_digest_id').val();

    $.ajax({
        type:'POST',
        url :'/cms/article/store',
        data : {
            '_token': token,
            'title': title,
            'content': content,
            'digest' : digest,
            'tag' : tags_id,
            'category': category
        },
        success: function(data)
        {
            if(data.state)
            {
                alert('添加文章成功');
            }
            else
            {
                alert(data.message);
            }
        },
        error :function(data)
        {

            console.log(data);
        }
    });


});

$(document).ready(function(){

    load_categories();

    load_tags();

});