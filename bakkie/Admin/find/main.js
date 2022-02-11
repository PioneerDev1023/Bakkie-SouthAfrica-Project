$(document).ready(function(){

    // $(".approve-btn").click(function(e){
    //     alert
    //     alert("Asdf")
    //     // $.ajax({url: "approve.php", success: function(result){
          
    //     // }});
    //   });
    


    $taskTemplate = $('.form');
    // $.post("./get_userdata.php", 
    // {
    //     seltown: seltown
    // }, 
    // function(data, status){
    //     alert("Data: " + data +"\nStatus: " + status);
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
    //         $newTaskTemplate.find('.user-img').attr('src', './../../RU/inc' + show_data[i]['user_photo']);
    //         $newTaskTemplate.find('.bakkie-img').attr('src', './../../RU/inc' + show_data[i]['bakkie_photo']);
            
    //         // console.log($taskTemplate.find('.user-img').attr('src'));
    //         $('.form-card').append($newTaskTemplate);
    //     }
    // });

    
    $.get("./get_userdata.php", function(data, status){
        var show_data = JSON.parse(data);
        var obj_len = (Object.keys(show_data).length);
        for(var i = 0; i < obj_len; i++){
            const $newTaskTemplate = $taskTemplate.clone();
            // <img src="<?='inc/'.$_SESSION['user']['user_photo'] ?>" style="width: 450px; margin: 20px;" alt=""/>
            // $newTaskTemplate.find('#user_photo').val(show_data[i]['user_photo']);
            // console.log(show_data[i]['user_photo']);
            $newTaskTemplate.find('#nickname').val(show_data[i]['nickname']);
            // $newTaskTemplate.find('#email').val(show_data[i]['email']);
            $newTaskTemplate.find('#daily_rate').val(show_data[i]['daily_rate']);
            $newTaskTemplate.find('#hoc_rate').val(show_data[i]['hoc_rate']);
            $newTaskTemplate.find('#free_rate').val(show_data[i]['free_km']);
            $newTaskTemplate.find('#province').val(show_data[i]['province']);
            $newTaskTemplate.find('#hometown').val(show_data[i]['hometown']);
            $newTaskTemplate.find('.user-img').attr('src', './../../RU/inc' + show_data[i]['user_photo']);
            $newTaskTemplate.find('.bakkie-img').attr('src', './../../RU/inc' + show_data[i]['bakkie_photo']);
            $newTaskTemplate.find('#form-content').html("<button onclick='displayDate(`" + show_data[i]['email'] + "`)' class='btn btn-primary approve-btn'z>Approve</button><button style='border: none; background-color: white;'><img style='width: 50px;'src='./../../images/whatsapp.png'></img></button><button onclick='displayDate1(`" + show_data[i]['email'] + "`)' class='btn btn-danger disapprove-btn'>Disapprove</button>");
         // console.log($taskTemplate.find('.user-img').attr('src'));
            $('.form-card').append($newTaskTemplate);
            // console.log('displayDate(' + show_data[i]['email'] + ')')
            // $('.form-card').append("<button onclick='displayDate(`" + show_data[i]['email'] + "`)' class='btn btn-primary approve-btn'z>Approve</button><button style='border: none; background-color: white;'><img style='width: 50px;'src='./../../images/whatsapp.png'></img></button><button onclick='displayDate1(`" + show_data[i]['email'] + "`)' class='btn btn-danger disapprove-btn'>Disapprove</button>");
        }
    });
});