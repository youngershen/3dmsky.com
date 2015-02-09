/**
 * Created by youngershen on 15-2-9.
 */

$('#article_category_submit').click(function(){

    var category = $('#article_category_input').val();
    var token = $('meta[name="_token"]').attr('content')

    $.ajax({
        type:'POST',
        url:'/admin/category',
        data:{
            '_token':token,
            'category':category
        },
        success:function(data)
        {
            
        },
        error: function (data) {

        }
    });
});