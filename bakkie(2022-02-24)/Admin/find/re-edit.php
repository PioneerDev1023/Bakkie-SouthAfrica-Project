<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="shortcut icon" href="./../../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../RU/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <title>Login Form</title>
    
    <?php
    /* ------------------------------------------------------- Logout module */
    if(isset($_GET['logout']) && $_SESSION['username'] != ''){
        unset($_SESSION['username']);
        session_destroy();
    }
    ?>

</head>

<body id="body">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 justify-content-center text-center form-card">
                <!-- REGISTER AREA  -->
                <div class="d-flex justify-content-between ">
                    <!-- <button class="btn btn-primary" style="margin-right: 10px;" onClick="window.location.reload();">Reload</button> -->
                    <div class="btn-group btn-group-md d-flex">
                        <a href="index.php"><button type="button" class="btn btn-info" style="font-weight: 700; width: 100px;">New</button>
                        <a href="re-edit.php"><button type="button" class="btn btn-success" style="font-weight: 700; width: 100px;">Re-Edit</button>
                        <a href="all.php"><button type="button" class="btn btn-primary" style="font-weight: 700; width: 100px;">All</button></a>
                    </div>
                    <div class="d-flex">
                        <a href="./../admin.php"><button class="btn btn-success" style="font-weight: 700; width: 150px; margin-right: 10px;">To EU page</button></a>
                        <a href="?logout" class="btn btn-danger btn-block" style="font-weight: 700; width: 100px; ">Logout</a>  
                    </div>
                      
                </div>
                
                <h2 style="font-weight: 800; text-decoration: underline;">Hire-my-Bakkie</h2>

                <!-- <form class="form form-content" id="register-form" enctype="multipart/form-data" style="border-bottom: 2px solid lightgrey; margin-bottom: 15px;"> -->
                <form class="form" id="register-form" enctype="multipart/form-data" style="border-bottom: 2px solid lightgrey; margin-bottom: 25px;">
                    <input type="hidden" name="status" id="status" value="register">

                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; margin: auto;">
                            <!-- <i class="fa fa-image"></i>Picture of your face(head & shoulders) -->
                            <!-- <input type="file" name="user_photo" id="user_photo" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule-required="true" onchange="previewFile1()"> -->
                            <img class="user-img" id="user_photo" src="./../../RU/inc/uploads/3c1348b7c0698faca8657eef345a2314.jpg" width="100%" alt="No driver photo">
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Your nickname(what people call you)" style="margin-bottom: 5px; text-align: center; color: red; text-decoration: underline; font-weight: 700;" readonly>

                            <div class="form-group d-flex justify-content-between" style="box-sizing: border-box; margin-bottom: 5px;">
                                <input name="country" id="country" class="form-control" style="margin-right: 10px;display:none;" required data-rule="minlen:5" data-msg="Please select on your province"  readonly>
                                </input>
                                <input name="province" id="province" class="form-control" style="margin-right: 10px; font-weight: 700; text-align: center;"  placeholder="Province" readonly>
                                </input>
                                <input name="hometown" id="hometown" class="form-control" style="font-weight: 700; text-align: center;" placeholder="City/Town"  readonly>
                                </input>
                            </div>

                            <div class="form-group d-flex justify-content-between flex-wrap" style=" margin-bottom: 5px;">
                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h4 style="margin-bottom: 0px;">R</h4>
                                    <input type="number" name="daily_rate" id="daily_rate" class="form-control col-4" placeholder="Amount" style="    margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 class="col-7" style="margin-bottom: 10px;">Daily Rate <span>(Unlimited km's-8hrs)</span></h6>
                                </div>

                                <div class="col-12 align-items-center" style="color: grey;"><p style="margin-bottom: 0px;">(Excludes FUEL; LABOUR)</p></div>

                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h6 style="margin-bottom: 0px;">Free</h6>
                                    <input type="number" name="free_rate" id="free_rate" class="form-control col-3" placeholder="Enter Km's" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 style="margin-bottom: 0px;">km's</h6>
                                    
                                    <h4 style="margin-bottom: 0px; padding-left: 20px">R</h4>
                                    <input type="number" name="hoc_rate" id="hoc_rate" class="form-control col-3" placeholder="Amount" style="text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 style="margin-bottom: 0px;">Ad Hoc Rate</h6>
                                </div>                        
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6 style="margin: 8px 10px;">Cell Number: </h6>
                                <input type="number" name="cellnumber" id="cellnumber" class="form-control col-7" placeholder="Cell Number" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                            </div>
                            <div  id='form-content'></div>
                            
                        </div>
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red; margin: auto;">
                            <!-- <i class="fa fa-image"></i>Picture of your bakkie(front & side-numberplate blanked)
                            <input type="file" name="bakkie_photo" id="bakkie_photo" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule-required="true" onchange="previewFile2()"> -->
                            <i class="fa fa-image"></i><img class="bakkie-img" src="./../../RU/inc/uploads/f45cd07736ebaad37c5d06b381a75d89.jpg" width="100%" alt="No bakkie photo">
                        </label>                          
                                             
                    </div>
                                        
                </form>
            </div>
            </row>
        </div>
    </div>
    
    <script src="./../../asset/js/jQuery-v3.5.1.js"></script>
    <script src="re-edit.js"></script>
    <script>
        function displayDate(email){
            $.get("edit_approve.php?email=" + email + "&app=ok", function(data, status){
                if(data == 'success'){
                    alert('success');
                }
            });
        }
        function displayDate1(email){
            $.get("edit_approve.php?email=" + email + "&app=unok", function(data, status){
                if(data == 'success'){
                    alert('success');
                }
            });
        }
    </script>
</body>

</html>