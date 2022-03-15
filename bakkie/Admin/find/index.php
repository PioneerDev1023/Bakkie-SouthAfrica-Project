<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./../../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <title>Hire-My-Bakkie</title>
    <?php
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["adminname"])){
        header("location: ./../../index.php");
        exit;
    }

    /* ------------------------------------------------------- Logout module */
    if(isset($_GET['logout']) && $_SESSION['adminname'] != ''){
        unset($_SESSION['adminname']);
        session_destroy();
        header("Location: ./../../index.php");
    }
    ?>

</head>

<body id="body">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 justify-content-center text-center form-card-new">
                <!-- REGISTER AREA  -->
                <div class="d-flex justify-content-end">
                        <a href="./../admin.php"><button class="btn btn-success" style="font-weight: 700; width: 150px; margin-right: 10px;">To EU page</button></a>
                        <a href="?logout" class="btn btn-danger btn-block" style="font-weight: 700; width: 100px; ">Logout</a>  
                </div>
                
                <h1 style="font-weight: 800; text-decoration: underline; color: red;">New User</h1>
                <h2 id="no_newbakkie" style="text-align: center; font-weight: 600;font-family: cursive; margin-top: 25px; color: blue; display: none;">There is no new Bakkie</h2>

                <form class="form-new" id="register_form_new" enctype="multipart/form-data" style="border-bottom: 2px solid lightgrey; margin-bottom: 25px; display:none;">
                    <input type="hidden" name="status" id="status" value="register">

                    <div class="errorLogs"></div>
                    
                    <div class="form-group d-flex flex-wrap">
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; margin: auto; color: red;">
                            <img class="user-img-new" id="user_photo_new" src="./../../images/driver.jpg" width="100%" alt="No driver photo">
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="nickname_new" id="nickname_new" class="form-control" placeholder="Your nickname(what people call you)" style="margin-bottom: 5px; text-align: center; color: red; text-decoration: underline; font-weight: 700;" readonly>

                            <div class="form-group d-flex justify-content-between" style="box-sizing: border-box; margin-bottom: 5px;">
                                <input name="country" id="country" class="form-control" style="margin-right: 10px;display:none;" required data-rule="minlen:5" data-msg="Please select on your province"  readonly>
                                </input>
                                <input name="province_new" id="province_new" class="form-control" style="margin-right: 10px; font-weight: 700; text-align: center;"  placeholder="Province" readonly>
                                </input>
                                <input name="hometown_new" id="hometown_new" class="form-control" style="font-weight: 700; text-align: center;" placeholder="City/Town"  readonly>
                                </input>
                            </div>

                            <div class="form-group d-flex justify-content-between flex-wrap" style=" margin-bottom: 5px;">
                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h4 style="margin-bottom: 0px;">R</h4>
                                    <input type="number" name="daily_rate_new" id="daily_rate_new" class="form-control col-4" placeholder="Amount" style="    margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 class="col-7" style="margin-bottom: 10px;">Daily Rate <span>(Unlimited km's-8hrs)</span></h6>
                                </div>

                                <div class="col-12 align-items-center" style="color: grey;"><p style="margin-bottom: 0px;">(Excludes FUEL; LABOUR)</p></div>

                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h6 style="margin-bottom: 0px;">Free</h6>
                                    <input type="number" name="free_rate_new" id="free_rate_new" class="form-control col-3" placeholder="Enter Km's" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 style="margin-bottom: 0px;">km's</h6>
                                    
                                    <h4 style="margin-bottom: 0px; padding-left: 20px">R</h4>
                                    <input type="number" name="hoc_rate_new" id="hoc_rate_new" class="form-control col-3" placeholder="Amount" style="text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 style="margin-bottom: 0px;">Ad Hoc Rate</h6>
                                </div>                        
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6 style="margin: 8px 10px;">Cell Number: </h6>
                                <input type="number" name="cellnumber_new" id="cellnumber_new" class="form-control col-7" placeholder="Cell Number" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                            </div>
                            <div  id='form_content_new'></div>
                            
                        </div>
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red; margin: auto;">
                            <i class="fa fa-image"></i><img class="bakkie-img-new" src="./../../images/bakkie.jpg" width="100%" alt="No bakkie photo">
                        </label>                          
                                             
                    </div>
                                        
                </form>
            </div>
        </div>
        
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 justify-content-center text-center form-card-edit">
                <!-- REGISTER AREA  -->
                
                <h1 style="font-weight: 800; text-decoration: underline; color: red; margin-bottom: 20px;">Edited User</h1>
                <h2 id="no_editbakkie" style="text-align: center; font-weight: 600;font-family: cursive; margin-top: 25px; color: blue; display: none;">There is no edit Bakkie</h2>

                <form class="form-edit" id="register_form_edit" enctype="multipart/form-data" style="border-bottom: 2px solid lightgrey; margin-bottom: 25px; display: none;">
                    <input type="hidden" name="status" id="status" value="register">

                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; margin: auto; color: red;">
                            <h1 style="font-family: cursive;"><img class="user-img-edit" id="user_photo_edit" src="./../../images/driver.jpg" width="100%" alt="No change!"></h1>
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="nickname_edit" id="nickname_edit" class="form-control" placeholder="Your nickname(what people call you)" style="margin-bottom: 5px; text-align: center; color: red; text-decoration: underline; font-weight: 700;" readonly>

                            <div class="form-group d-flex justify-content-between" style="box-sizing: border-box; margin-bottom: 5px;">
                                <input name="country" id="country" class="form-control" style="margin-right: 10px;display:none;" required data-rule="minlen:5" data-msg="Please select on your province"  readonly>
                                </input>
                                <input name="province_edit" id="province_edit" class="form-control" style="margin-right: 10px; font-weight: 700; text-align: center;"  placeholder="Province" readonly>
                                </input>
                                <input name="hometown_edit" id="hometown_edit" class="form-control" style="font-weight: 700; text-align: center;" placeholder="City/Town"  readonly>
                                </input>
                            </div>

                            <div class="form-group d-flex justify-content-between flex-wrap" style=" margin-bottom: 5px;">
                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h4 style="margin-bottom: 0px;">R</h4>
                                    <input type="number" name="daily_rate_edit" id="daily_rate_edit" class="form-control col-4" placeholder="Amount" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 class="col-7" style="margin-bottom: 10px;">Daily Rate <span>(Unlimited km's-8hrs)</span></h6>
                                </div>

                                <div class="col-12 align-items-center" style="color: grey;"><p style="margin-bottom: 0px;">(Excludes FUEL; LABOUR)</p></div>

                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h6 style="margin-bottom: 0px;">Free</h6>
                                    <input type="number" name="free_rate_edit" id="free_rate_edit" class="form-control col-3" placeholder="Enter Km's" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 style="margin-bottom: 0px;">km's</h6>
                                    
                                    <h4 style="margin-bottom: 0px; padding-left: 20px">R</h4>
                                    <input type="number" name="hoc_rate_edit" id="hoc_rate_edit" class="form-control col-3" placeholder="Amount" style="text-align: center; color: red; font-weight: 700;"  readonly>
                                    <h6 style="margin-bottom: 0px;">Ad Hoc Rate</h6>
                                </div>                        
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6 style="margin: 8px 10px;">Cell Number: </h6>
                                <input type="number" name="cellnumber_edit" id="cellnumber_edit" class="form-control col-7" placeholder="Cell Number" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;"  readonly>
                            </div>
                            <div id='form_content_edit'></div>
                            
                        </div>
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red; margin: auto;">
                            <h1 style="font-family: cursive;"><i class="fa fa-image"></i><img class="bakkie-img-edit" src="./../../images/bakkie.jpg" width="100%" alt="No change!"></h1>
                        </label>                          
                                             
                    </div>
                                        
                </form>
            </div>
        </div>

        <h1 style="font-weight: 800; text-decoration: underline; color: red; text-align: center;">Hire-My-Bakkie</h1>
        <iframe src="./all-view/all.php" style="height:800px; width: 100%; border: none; margin-bottom: 25px;" title="Iframe Example"></iframe>
    </div>
    
    <script src="./../../asset/js/jQuery-v3.5.1.js"></script>
    <script src="main.js"></script>
    <script src="re-edit.js"></script>
    <script>
        function displayData_edit(email){
            $.get("edit_approve.php?email=" + email + "&app=ok", function(data, status){
                if(data == 'success'){
                    alert('success');
                }
            });
        }
        function displayData_edit1(email){
            $.get("edit_approve.php?email=" + email + "&app=unok", function(data, status){
                if(data == 'success'){
                    alert('success');
                }
            });
        }
    </script>
    <script>
        function displayData_new(email){
            $.get("approve.php?email=" + email + "&app=ok", function(data, status){
                if(data == 'success'){
                    alert('success');
                }
            });
        }
        function displayData_new1(email){
            $.get("approve.php?email=" + email + "&app=unok", function(data, status){
                if(data == 'success'){
                    alert('success');
                }
            });
        }
    </script>
</body>

</html>