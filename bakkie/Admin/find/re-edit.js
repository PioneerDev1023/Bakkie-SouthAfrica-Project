$(document).ready(function(){
    $taskTemplate = $('.form-edit');
    
    $.get("./get_reedituserdata.php", function(data, status){
        if(data == ""){
            $("#no_editbakkie").show();
            return;
        }
        var show_data = JSON.parse(data);
        var obj_len = (Object.keys(show_data).length);
        for(var i = 0; i < obj_len; i++){
            const $newTaskTemplate = $taskTemplate.clone();
            $newTaskTemplate.css("display", "block");
            $newTaskTemplate.find('#nickname_edit').val(show_data[i]['nickname']);
            // $newTaskTemplate.find('#email').val(show_data[i]['email']);
            $newTaskTemplate.find('#daily_rate_edit').val(show_data[i]['daily_rate']);
            $newTaskTemplate.find('#hoc_rate_edit').val(show_data[i]['hoc_rate']);
            $newTaskTemplate.find('#free_rate_edit').val(show_data[i]['free_km']);
            $newTaskTemplate.find('#province_edit').val(show_data[i]['province']);
            $newTaskTemplate.find('#hometown_edit').val(show_data[i]['hometown']);
            $newTaskTemplate.find('#cellnumber_edit').val(show_data[i]['cellnumber']);
            $newTaskTemplate.find('.user-img-edit').attr('src', './../../RU/inc' + show_data[i]['user_photo']);
            $newTaskTemplate.find('.bakkie-img-edit').attr('src', './../../RU/inc' + show_data[i]['bakkie_photo']);

            $newTaskTemplate.find('#form_content_edit').html("<button onclick='displayData_edit(`" + show_data[i]['email'] + "`)' style='margin-right: 10px' class='btn btn-primary approve-btn'>Approve</button><button onclick='displayData_edit1(`" + show_data[i]['email'] + "`)' class='btn btn-danger disapprove-btn'>Disapprove</button>");

            $('.form-card-edit').append($newTaskTemplate);

        }
    });
});