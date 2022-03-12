<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./asset/style/overall.css"> -->
    <link rel="shortcut icon" href="./../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="./../asset/js/jQuery-v3.5.1.js"></script>
    <script src="../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    
    <title>Login Form</title>
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
                        <label class="col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; margin: auto;">
                            <!-- <i class="fa fa-image"></i>Picture of your face(head & shoulders) -->
                            <!-- <input type="file" name="user_photo" id="user_photo" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule-required="true" onchange="previewFile1()"> -->
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

                            <!-- <button type="button" class="app-button" style="border: none; background-color: white;" onclick="cellbtnShow()">
                                <img style="width: 50px;"src="../images/whatsapp.png"></img>
                            </button> -->

                            <!-- Modal -->
                            <button type="button" data-toggle="modal" data-target="#cellnumberModal" class="app-button modal-button" style="border: none; background-color: white;">
                                <img style="width: 50px;"src="../images/whatsapp.png"></img>
                            </button>

                            <div class="modal fade" id="cellnumberModal" role="dialog">
                                <div class="modal-dialog  modal-dialog-centered">
                                
                                <div class="modal-content">
                                    <div class="modal-header" style="display: block;">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Whatsapp</h4>
                                    
                                    </div>
                                    <div class="modal-body">
                                        <input type="number" name="mcellnumber" id="mcellnumber" class="form-control col-7 mcellnumber" placeholder="Cell Number" style="margin: 5px auto; text-align: center; color: red; font-weight: 700;">
                                        <p></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                
                                </div>
                            </div>

                            <div class="d-flex justify-content-center" id="cellnumber_area" style="visibility: hidden;">
                                <h6 style="margin-right: 10px; margin-top: 8px;">Cell Number: </h6>
                                <input type="number" name="cellnumber" class="cellnumber" id="cellnumber" class="form-control col-7" placeholder="Cell Number" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;" readonly>
                            </div>
                        </div>
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red; margin: auto;">
                            <img class="bakkie-img" src="./../images/bakkie.jpg" height="100%" width="100%" alt="No bakkie photo">
                        </label>                          
                                             
                    </div>
                                        
                </form>
            </div>
            </row>
        </div>
    </div>

    <script type="text/javascript">
        // stackoverflow.com/questions/7845866/how-to-set-the-input-value-in-a-modal-dialogue
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
                    $newTaskTemplate.find('.cellnumber').val(show_data[i]['cellnumber']);
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
                    $newTaskTemplate.find('.cellnumber').val(show_data[i]['cellnumber']);
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
                    $newTaskTemplate.find('.cellnumber').val(show_data[i]['cellnumber']);
                    $newTaskTemplate.find('.user-img').attr('src', './../RU/inc' + show_data[i]['user_photo']);
                    $newTaskTemplate.find('.bakkie-img').attr('src', './../RU/inc' + show_data[i]['bakkie_photo']);
                    
                    // console.log($taskTemplate.find('.user-img').attr('src'));
                    $('.form-card').append($newTaskTemplate);
                }
            });
        }

        // function cellbtnShow() {
        //     // $(#cellnumber_area).show();
        //     // document.getElementById("cellnumber_area").style.visibility = "hidden";
        //     // alert('cellnumber');
        //     $.post("./get_number.php", 
        //     {
        //         id: id
        //     }, 
        //     function(data, status){
        //         alert('safasdf');
                
        //     });

        // }
        $( document ).ready(function() {
            $('.modal-button').on('click', function() {
                cnumber = $(this).closest('div').find('#cellnumber').val();
                alert(cnumber);
                // $(this).closest('div').find('.mcellnumber').val($(this).closest('div').find('#cellnumber').val());
                $('#cellnumberModal').bind('show',function()
                {
                    // $(".mcellnumber").html($("#cellnumber").val());
                    $(this).closest('div').find('.mcellnumber').val($(this).closest('div').find('#cellnumber').val());
                });
            
            });
        });
    </script>
    
</body>

</html>