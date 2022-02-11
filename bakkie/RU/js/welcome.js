jQuery(document).ready(function ($) {
    // welcome page
    $taskTemplate = $('.form');
    $.post("./inc/check.php", 
    {
        email: email
    }, 
    function(data, status){
        var show_data = JSON.parse(data);
        $('#nickname').val(show_data[0]['nickname']);
        $('#daily_rate').val(show_data[0]['daily_rate']);
        $('#hoc_rate').val(show_data[0]['hoc_rate']);
        $('#free_rate').val(show_data[0]['free_km']);
        $('#province').val(show_data[0]['province']);
        $('#hometown').val(show_data[0]['hometown']);
        $('.user-img').attr('src', './inc' + show_data[0]['user_photo']);
        $('.bakkie-img').attr('src', './inc' + show_data[0]['bakkie_photo']);
            // console.log($taskTemplate.find('.user-img').attr('src'));
            // $('.form-card').append($newTaskTemplate);
        $(".form").show();
    });
});