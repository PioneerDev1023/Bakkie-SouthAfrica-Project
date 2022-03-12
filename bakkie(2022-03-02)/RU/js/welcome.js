jQuery(document).ready(function ($) {
    // welcome page
    $taskTemplate = $('.form');
    $.post("./inc/check.php", 
    {
        email: email
    }, 
    function(data, status){
        var show_data = JSON.parse(data);
        $('.nickname').val(show_data[0]['nickname']);
        $('.daily-rate').val(show_data[0]['daily_rate']);
        $('.hoc-rate').val(show_data[0]['hoc_rate']);
        $('.free-rate').val(show_data[0]['free_km']);
        $('#w_province').val(show_data[0]['province']);
        $('#w_hometown').val(show_data[0]['hometown']);
        $('#m_cell_number').val(show_data[0]['cellnumber']);
        $('#m_email').val(show_data[0]['email']);
        
        $('.user-img').attr('src', './inc' + show_data[0]['user_photo']);
        // $('.m_user_photo').val(show_data[0]['user_photo']);
        // document.getElementsByClassName("m_user_photo").value = show_data[0]['user_photo'];
        // $('#m_user_photo').attr('name', show_data[0]['user_photo']);

        $('.bakkie-img').attr('src', './inc' + show_data[0]['bakkie_photo']);
        // $('#m_bakkie_photo').attr('name', show_data[0]['bakkie_photo']);
            // console.log($taskTemplate.find('.user-img').attr('src'));
            // $('.form-card').append($newTaskTemplate);
        $(".form").show();
    });

    
    $('.signout-btn').click(function () {
        $.post("./inc/signout.php", 
            {
                email: email
            }, 
            function(){
                alert("Your registration cancelled successfully.");
            });
    });

    

    // $('#edit-register').on('click', function() {
    //     alert('safdf');
        
    // });
    // $('#edit-register').on('click', function() {
    //     $("#re-edit-form").submit();
    // });
    // $("form").submit(function (event) {
    //     alert("asdf");
    //     var formData = {
    //       userphoto: $("#m_user_photo").val(),
    //       nickname: $("#m_nickname").val(),
    //       province: $(".m_province").val(),
    //       hometown: $(".m_hometown").val(),
    //       dailyrate: $("#m_daily_rate").val(),
    //       freerate: $("#m_free_rate").val(),
    //       hocrate: $("#m_hoc_rate").val(),
    //       cellnumber: $("#m_cell_number").val(),
    //       bakkiephoto: $("#m_bakkie_photo").val(),
    //     };
    
    //     $.ajax({
    //       type: "POST",
    //       url: "./inc/re-edit.php",
    //       data: formData,
    //       dataType: "json",
    //       encode: true,
    //     }).done(function (data) {
    //       console.log(data);
    //     });
    
    //     event.preventDefault();
    //   });
});