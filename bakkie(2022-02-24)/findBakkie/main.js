$(document).ready(function(){
    $taskTemplate = $('.form');
    
    $.post("./get_userdata.php", 
    {
        selprovince: selprovince
    }, 
    function(data, status){
        alert("Data: " + data +"\nStatus: " + status);
        var show_data = JSON.parse(data);
        var obj_len = (Object.keys(show_data).length);
        for(var i = 0; i < obj_len; i++){
            const $newTaskTemplate = $taskTemplate.clone();
            
            $newTaskTemplate.find('#nickname').val(show_data[i]['nickname']);
            $newTaskTemplate.find('#daily_rate').val(show_data[i]['daily_rate']);
            $newTaskTemplate.find('#hoc_rate').val(show_data[i]['hoc_rate']);
            $newTaskTemplate.find('#free_rate').val(show_data[i]['free_km']);
            $newTaskTemplate.find('#province').val(show_data[i]['province']);
            $newTaskTemplate.find('#hometown').val(show_data[i]['hometown']);
            // $newTaskTemplate.find('#cellnumber').val(show_data[i]['cellnumber']);
            $newTaskTemplate.find('.user-img').attr('src', './../../RU/inc' + show_data[i]['user_photo']);
            $newTaskTemplate.find('.bakkie-img').attr('src', './../../RU/inc' + show_data[i]['bakkie_photo']);
            
            // console.log($taskTemplate.find('.user-img').attr('src'));
            $('.form-card').append($newTaskTemplate);
        }
    });
                
    // $.get("./get_userdata.php", function(data, status){
    //     // alert("Data: " + data +"\nStatus: " + status);
    //     var show_data = JSON.parse(data);
    //     var obj_len = (Object.keys(show_data).length);
    //     for(var i = 0; i < obj_len; i++){
    //         const $newTaskTemplate = $taskTemplate.clone();
    //         // <img src="<?='inc/'.$_SESSION['user']['user_photo'] ?>" style="width: 450px; margin: 20px;" alt=""/>
    //         // $newTaskTemplate.find('#user_photo').val(show_data[i]['user_photo']);
    //         // console.log(show_data[i]['user_photo']);
    //         $newTaskTemplate.find('#nickname').val(show_data[i]['nickname']);
    //         $newTaskTemplate.find('#daily_rate').val(show_data[i]['daily_rate']);
    //         $newTaskTemplate.find('#hoc_rate').val(show_data[i]['hoc_rate']);
    //         $newTaskTemplate.find('#free_rate').val(show_data[i]['free_km']);
    //         $newTaskTemplate.find('#province').val(show_data[i]['province']);
    //         $newTaskTemplate.find('#hometown').val(show_data[i]['hometown']);
    //         $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
    //         $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
            
    //         // console.log($taskTemplate.find('.user-img').attr('src'));
    //         $('.form-card').append($newTaskTemplate);
    //     }
    // });
    
});