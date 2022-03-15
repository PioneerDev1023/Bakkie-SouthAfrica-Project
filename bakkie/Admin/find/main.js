$(document).ready(function(){
    $taskTemplate_new = $('.form-new');
    
    $.get("./get_userdata.php", function(data, status){
        if(data == ""){
            $("#no_newbakkie").show();
            return;
        }
        var show_data = JSON.parse(data);
        var obj_len = (Object.keys(show_data).length);
        for(var i = 0; i < obj_len; i++){
            const $newTaskTemplate_new = $taskTemplate_new.clone();
            $newTaskTemplate_new.css("display","block");
            $newTaskTemplate_new.find('#nickname_new').val(show_data[i]['nickname']);
            
            // $newTaskTemplate.find('#email').val(show_data[i]['email']);
            $newTaskTemplate_new.find('#daily_rate_new').val(show_data[i]['daily_rate']);
            $newTaskTemplate_new.find('#hoc_rate_new').val(show_data[i]['hoc_rate']);
            $newTaskTemplate_new.find('#free_rate_new').val(show_data[i]['free_km']);
            $newTaskTemplate_new.find('#province_new').val(show_data[i]['province']);
            $newTaskTemplate_new.find('#hometown_new').val(show_data[i]['hometown']);
            $newTaskTemplate_new.find('#cellnumber_new').val(show_data[i]['cellnumber']);
            $newTaskTemplate_new.find('.user-img-new').attr('src', './../../RU/inc' + show_data[i]['user_photo']);
            $newTaskTemplate_new.find('.bakkie-img-new').attr('src', './../../RU/inc' + show_data[i]['bakkie_photo']);
            
            $newTaskTemplate_new.find('#form_content_new').html("<button onclick='displayData_new(`" + show_data[i]['email'] + "`)' style='margin-right: 10px' class='btn btn-primary approve-btn'>Approve</button><button onclick='displayData_new1(`" + show_data[i]['email'] + "`)' class='btn btn-danger disapprove-btn'>Disapprove</button>");

            $('.form-card-new').append($newTaskTemplate_new);
            
        }
    });

});