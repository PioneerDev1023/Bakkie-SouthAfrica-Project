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
        $('.bakkie-img').attr('src', './inc' + show_data[0]['bakkie_photo']);
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
});