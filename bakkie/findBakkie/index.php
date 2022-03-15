<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <script src="./../asset/js/jQuery-v3.5.1.js"></script>
    <script src="../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    
    <title>Hire-My-Bakkie</title>
    <style>
        .modal-button:focus {
            outline: 0 !important;
        }
    </style>
    <?php
        // Check if the user is logged in, if not then redirect him to login page
        if(!isset($_SESSION['eu_info'])){
            header("location: ./../../index.php");
            exit;
        }
    ?>
    <script>
        var selprovince = "<?php if(isset($_GET['selprovince'])) echo $_GET['selprovince']; ?>";
        var seltown = "<?php if(isset($_GET['seltown'])) echo $_GET['seltown']; ?>";
    </script>
</head>

<body id="body">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 justify-content-center text-center form-card">
                <!-- REGISTER AREA  -->
                <h2 id="no_pbakkie" style="text-align: center; font-weight: 600;font-family: cursive; margin-top: 25px; color: blue; display: none;">There is no Bakkie available from this province.<br>Please select another province OR<br> Register your Bakkie to become the first in your province</h2>
                <h2 id="no_tbakkie" style="text-align: center; font-weight: 600;font-family: cursive; margin-top: 25px; color: blue; display: none;">There is no Bakkie available from this town.<br>Please select another town OR<br> Register your Bakkie to become the first in your town</h2>
                <form action="inc/handler.inc.php" method="post" class="form" id="register-form" enctype="multipart/form-data" style="border-bottom: 5px ridge lightgrey; margin-bottom: 15px; display: none;">
                    <input type="hidden" name="status" id="status" value="register">

                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">
                        <label class="col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; margin: auto; color: red;">
                            <img class="user-img" id="user_photo" src="./../images/driver.jpg" height="100%" width="100%" alt="No driver photo">
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Your nickname (what people call you)" style="margin-bottom: 5px; text-align: center; color: red; text-decoration: underline; font-weight: 700;" readonly>

                            <div class="form-group d-flex justify-content-between" style="box-sizing: border-box; margin-bottom: 5px;">
                                <input name="country" id="country" class="form-control" style="margin-right: 10px;display:none;" required data-rule="minlen:5" data-msg="Please select on your province">
                                </input>
                                <input name="province" id="province" class="form-control" style="margin-right: 10px; font-weight: 700; text-align: center;" placeholder="Province" readonly>
                                </input>
                                <input name="hometown" id="hometown" class="form-control" style="font-weight: 700; text-align: center;" placeholder="City/Town" readonly>
                                </input>
                            </div>

                            <div class="form-group d-flex justify-content-between flex-wrap" style=" margin-bottom: 5px;">
                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h4>R</h4>
                                    <input type="number" name="daily_rate" id="daily_rate" class="form-control col-3" placeholder="Amount" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;" readonly>
                                    <h6 class="col-9" style="margin-bottom: 10px;">Daily Rate (Unlimited km's - 8 hrs)</h6>
                                </div>

                                <div class="col-12 align-items-center" style="color: grey;"><p style="margin-bottom: 0px;">(Excludes FUEL; LABOUR)</p></div>

                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h6 style="margin-bottom: 0px;">Free</h6>
                                    <input type="number" name="free_rate" id="free_rate" class="form-control col-3" placeholder="Enter Km's" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;" readonly>
                                    <h6 style="margin-bottom: 0px;">km's</h6>
                                    
                                    <h4 style="margin-bottom: 0px; padding-left: 20px">R</h4>
                                    <input type="number" name="hoc_rate" id="hoc_rate" class="form-control col-3" placeholder="Amount" style="text-align: center; color: red; font-weight: 700;" readonly>
                                    <h6 style="margin-bottom: 0px;">Ad Hoc Rate</h6>
                                </div>                        
                            </div>
                            <div>
                                <a type="button"  class="modal-button app-button" style="border: none; background-color: white;" onclick="cellbtn_click(this)">
                                    <input type="text" name="cellnumber" class="cellnumber" id="cellnumber" class="form-control col-7" placeholder="cellnumber" style="margin-top: 10px; text-align: center; color: red; font-weight: 700; display: none;" readonly>
                                    <img style="width: 250px;" src="../images/whatsapp.png"></img>
                                </a>
                            </div>
                        </div>
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red; margin: auto;">
                            <img class="bakkie-img" src="./../images/bakkie.jpg" height="100%" width="100%" alt="No bakkie photo">
                        </label>                          
                                             
                    </div>
                                        
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $taskTemplate = $('.form');

        if(selprovince != ''){
            $.post("./get_userdata.php", 
            {
                selprovince: selprovince
            }, 
            function(data, status){
                if(data == ""){
                    $("#no_pbakkie").show();
                    return;
                } 
                var show_data = JSON.parse(data);
                var obj_len = (Object.keys(show_data).length);
                for(var i = 0; i < obj_len; i++){
                    const $newTaskTemplate = $taskTemplate.clone();
                    $newTaskTemplate.css("display", "block");
                    $newTaskTemplate.find('#nickname').val(show_data[i]['nickname']);
                    $newTaskTemplate.find('#daily_rate').val(show_data[i]['daily_rate']);
                    $newTaskTemplate.find('#hoc_rate').val(show_data[i]['hoc_rate']);
                    $newTaskTemplate.find('#free_rate').val(show_data[i]['free_km']);
                    $newTaskTemplate.find('#province').val(show_data[i]['province']);
                    $newTaskTemplate.find('#hometown').val(show_data[i]['hometown']);
                    $newTaskTemplate.find('.cellnumber').val(show_data[i]['cellnumber']);
                    $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
                    $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
                    $('.form-card').append($newTaskTemplate);
                }
            });
        } else if (seltown != ''){
            $.post("./get_userdata.php", 
            {
                seltown: seltown
            }, 
            function(data, status){
                if(data == ""){
                    $("#no_tbakkie").show();
                    return;
                }
                var show_data = JSON.parse(data);
                var obj_len = (Object.keys(show_data).length);
                for(var i = 0; i < obj_len; i++){
                    const $newTaskTemplate = $taskTemplate.clone();
                    $newTaskTemplate.css("display", "block");
                    $newTaskTemplate.find('#nickname').val(show_data[i]['nickname']);
                    $newTaskTemplate.find('#daily_rate').val(show_data[i]['daily_rate']);
                    $newTaskTemplate.find('#hoc_rate').val(show_data[i]['hoc_rate']);
                    $newTaskTemplate.find('#free_rate').val(show_data[i]['free_km']);
                    $newTaskTemplate.find('#province').val(show_data[i]['province']);
                    $newTaskTemplate.find('#hometown').val(show_data[i]['hometown']);
                    $newTaskTemplate.find('.cellnumber').val(show_data[i]['cellnumber']);
                    $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
                    $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
                    $('.form-card').append($newTaskTemplate);
                }
            });
        } else {
            $.get("./get_userdata.php", function(data, status){
                var show_data = JSON.parse(data);
                var obj_len = (Object.keys(show_data).length);
                for(var i = 0; i < obj_len; i++){
                    const $newTaskTemplate = $taskTemplate.clone();
                    $newTaskTemplate.css("display", "block");
                    $newTaskTemplate.find('#nickname').val(show_data[i]['nickname']);
                    $newTaskTemplate.find('#daily_rate').val(show_data[i]['daily_rate']);
                    $newTaskTemplate.find('#hoc_rate').val(show_data[i]['hoc_rate']);
                    $newTaskTemplate.find('#free_rate').val(show_data[i]['free_km']);
                    $newTaskTemplate.find('#province').val(show_data[i]['province']);
                    $newTaskTemplate.find('#hometown').val(show_data[i]['hometown']);
                    $newTaskTemplate.find('.cellnumber').val(show_data[i]['cellnumber']);
                    $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
                    $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
                    $('.form-card').append($newTaskTemplate);
                }
            });
        }

        
        function cellbtn_click (e) {
            var cellnumber = $(e).children().eq(0).val();
            window.open("./whatsapp/whatsapp.php?cellnumber=" + cellnumber);
        }
    </script>
</body>
</html>