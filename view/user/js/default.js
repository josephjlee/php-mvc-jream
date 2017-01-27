/**
 * Created by Denny on 27.12.2016.
 */
$(function(){
    $.get('dashboard/xhrGetListing', function(o){

        for(var i=0; i< o.length; i++){
            $('#listInsert').append('<div>'+o[i].text + ' <a class="del" rel="'+ o[i].id + '" href="#">delete</a></div>');
        }

        $('.del').on('click', function(){
            delItem = $(this);
            var id = $(this).attr('rel');


            $.post('dashboard/xhrDeleteListing', {"id": id}, function(o){
                //$('#listInsert').append('<li>'+ o.text+ '&nbsp; <a class="del" rel="'+ o.id+'" href="#">delete</a></li>');
                delItem.parent().remove();
            });

            return false;
        });

    }, 'json');


    $("#randomInsert").submit(function(){
        var url = $(this).attr('action');
        var data = $(this).serialize();

        $.post(url, data, function(o){

            $('#listInsert').append('<div>'+ o.text+ '&nbsp; <a class="del" rel="'+ o.id+'" href="#">delete</a></div>');
            $("[name='text']").val("");
        }, 'json');

        return false;

    })

});