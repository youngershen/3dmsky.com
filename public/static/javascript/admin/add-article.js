/**
 * Created by youngershen on 15-2-9.
 */

/*
 <select class="form-control" id="">
 <option>1</option>
 <option>2</option>
 <option>3</option>
 <option>4</option>
 <option>5</option>
 </select>
 */

var load_categories  = function()
{
    $.ajax({
        'type':'GET',
        'url': '/cms/category/all',
        'success': function (data)
        {
            var html = " <select class='form-control' >";

            $('#article_category').html();
            for(var i = 0 ; i < data.length ; i++)
            {
                var temp = ' <option value="' + data[i].id +'"> ' + data[i].name + '</option>'
                html += temp;
            }
            $('#article_category').html(html);

        },

        'error':function(data)
        {
            alert('服务器忙，获取分类失败');
        }
    });
}

$('#article_category_submit').click(function(){

    var category = $('#article_category_input').val();
    var token = $('meta[name="_token"]').attr('content')

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

$(document).ready(function(){

    load_categories();

});