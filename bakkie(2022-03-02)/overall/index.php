<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./asset/style/overall.css"> -->
    <link rel="shortcut icon" href="./../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <title>Hire-My-Bakkie</title>
    <script>
        var selprovince = "<?php if(isset($_GET['selprovince'])) echo $_GET['selprovince']; ?>";
        var seltown = "<?php if(isset($_GET['seltown'])) echo $_GET['seltown']; ?>";
        console.log(seltown);
    </script>

</head>

<body id="body">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 justify-content-center text-center form-card">
                <!-- REGISTER AREA  -->
                <h2 style="font-weight: 800; text-decoration: underline;">Hire-my-Bakkie</h2>

                <form action="inc/handler.inc.php" method="post" class="form" id="register-form" enctype="multipart/form-data" style="border-bottom: 5px ridge lightgrey; margin-bottom: 15px;">
                    <input type="hidden" name="status" id="status" value="register">

                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">
                        <label class="col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; margin: auto; color: red;">
                            <!-- <i class="fa fa-image"></i>Picture of your face(head & shoulders) -->
                            <!-- <input type="file" name="user_photo" id="user_photo" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule-required="true" onchange="previewFile1()"> -->
                            <img class="user-img" id="user_photo" src="./../images/driver.jpg" width="100%" alt="No driver photo">
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
                                    <input type="number" name="daily_rate" id="daily_rate" class="form-control col-3" placeholder="Amount" style="    margin-bottom: 10px; text-align: center; color: red; font-weight: 700;" readonly>
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
                            <button  class="app-button" style="border: none; background-color: white;" onclick="cellNumFunc()">
                                <img style="width: 50px;"src="../images/whatsapp.png"></img>
                            </button>
                        </div>
                        <label class="col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red; margin: auto;">
                            <!-- <i class="fa fa-image"></i>Picture of your bakkie(front & side-numberplate blanked)
                            <input type="file" name="bakkie_photo" id="bakkie_photo" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule-required="true" onchange="previewFile2()"> -->
                            <img class="bakkie-img" src="./../images/bakkie.jpg" width="100%" alt="No bakkie photo">
                        </label>                          
                                             
                    </div>
                                        
                </form>
            </div>
            </row>
        </div>
    </div>

    <script src="./../asset/js/jQuery-v3.5.1.js"></script>
    <script type="text/javascript">
        function cellNumFunc() {
            alert('Please login or register to view a number or contact someone.');
        }
        $taskTemplate = $('.form');

        if(selprovince != ''){
            $.post("./get_userdata.php", 
            {
                selprovince: selprovince
            }, 
            function(data, status){
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
                    $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
                    $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
                    
                    // console.log($taskTemplate.find('.user-img').attr('src'));
                    $('.form-card').append($newTaskTemplate);
                }
            });
        } else if (seltown != ''){
            $.post("./get_userdata.php", 
            {
                seltown: seltown
            }, 
            function(data, status){
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
                    $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
                    $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
                    
                    // console.log($taskTemplate.find('.user-img').attr('src'));
                    $('.form-card').append($newTaskTemplate);
                }
            });
        } else {
            $.get("./get_userdata.php", function(data, status){
                // alert("Data: " + data +"\nStatus: " + status);
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
                    $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
                    $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
                    
                    // console.log($taskTemplate.find('.user-img').attr('src'));
                    $('.form-card').append($newTaskTemplate);
                }
            });
        }
    </script>
    
</body>

</html>