<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../RU/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <title>Login Form</title>
    <script>
        var seltown = "<?php echo $_GET['seltown']; ?>";
    </script>

</head>

<body id="body">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-12 justify-content-center text-center form-card">
                <!-- REGISTER AREA  -->
                <h2 style="font-weight: 800; text-decoration: underline;">Hire-my-Bakkie</h2>

                <form action="inc/handler.inc.php" method="post" class="form" id="register-form" enctype="multipart/form-data" style="border-bottom: 2px solid lightgrey; margin-bottom: 15px;">
                    <input type="hidden" name="status" id="status" value="register">

                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red;">
                            <img class="user-img" id="user_photo" src="./../../images/driver.jpg" height="100%" width="100%" alt="No driver photo">
                        </label>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Your nickname(what people call you)" style="margin-bottom: 5px; text-align: center; color: red; text-decoration: underline; font-weight: 700;">

                            <div class="form-group d-flex justify-content-between" style="box-sizing: border-box; margin-bottom: 5px;">
                                <input name="country" id="country" class="form-control" style="margin-right: 10px;display:none;" required data-rule="minlen:5" data-msg="Please select on your province">
                                </input>
                                <input name="province" id="province" class="form-control" style="margin-right: 10px; font-weight: 700; text-align: center;" placeholder="Province">
                                </input>
                                <input name="hometown" id="hometown" class="form-control" style="font-weight: 700; text-align: center;" placeholder="City/Town">
                                </input>
                            </div>

                            <div class="form-group d-flex justify-content-between flex-wrap" style=" margin-bottom: 5px;">
                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h4 style="margin-bottom: 0px;">R</h4>
                                    <input type="number" name="daily_rate" id="daily_rate" class="form-control col-4" placeholder="Amount" style="    margin-bottom: 10px; text-align: center; color: red; font-weight: 700;">
                                    <h6 class="col-7" style="margin-bottom: 10px;">Daily Rate <span>(Unlimited km's-8hrs)</span></h6>
                                </div>

                                <div class="col-12 align-items-center" style="color: grey;"><p style="margin-bottom: 0px;">(Excludes FUEL; LABOUR)</p></div>

                                <div class="col-12 d-flex align-items-center justify-content-between">
                                    <h6 style="margin-bottom: 0px;">Free</h6>
                                    <input type="number" name="free_rate" id="free_rate" class="form-control col-3" placeholder="Enter Km's" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;">
                                    <h6 style="margin-bottom: 0px;">km's</h6>
                                    
                                    <h4 style="margin-bottom: 0px; padding-left: 20px">R</h4>
                                    <input type="number" name="hoc_rate" id="hoc_rate" class="form-control col-3" placeholder="Amount" style="text-align: center; color: red; font-weight: 700;">
                                    <h6 style="margin-bottom: 0px;">Ad Hoc Rate</h6>
                                </div>                        
                            </div>
                            <button style="border: none; background-color: white;">
                                <img style="width: 50px;"src="../images/whatsapp.png"></img>
                            </button>
                        </div>
                        <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red;">
                            <i class="fa fa-image"></i><img class="bakkie-img" src="./../../images/bakkie.jpg" height="100%" width="100%" alt="No bakkie photo">
                        </label>                          
                                             
                    </div>
                                        
                </form>
            </div>
            </row>
        </div>
    </div>




    <script src="./../js/jQuery-v3.5.1.js"></script>
    <script src="main.js"></script>
    
</body>

</html>