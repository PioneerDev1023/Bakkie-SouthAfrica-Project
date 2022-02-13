
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap-grid.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/all.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/all.min.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/fontawesome.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/fontawesome.min.css">
    <title>Welcome <?php echo $_SESSION['username']; ?></title>
    <script>
        var email = "<?php echo $_SESSION['user']['email']; ?>";
    </script>
</head>

<body class="text-center">
    <img src="<?='inc/'.$_SESSION['user']['user_photo'] ?>" style="width: 450px; margin: 20px;" alt=""/>
    <h1 class="mt-2">Welcome <?php echo $_SESSION['user']['username']; ?></h1>
    <h3>Your details will appear on the website after approval</h3>
    <div style="margin-bottom: 25px;">
        <a href="inc/logout.inc.php"><button class="btn btn-sm btn-primary mt-4">Log Out</button></a>
        <a href="./../index.php"><button class="btn btn-sm btn-success mt-4 ml-5">HOME</button></a>
    </div>

    <form class="form" id="register-form" enctype="multipart/form-data" style="border-top: 2px solid lightgrey; margin-bottom: 15px; display: none;">
        <h2 style="margin-top: 30px; font-weight: 800; color: green;">Your Infos</h2>
        <input type="hidden" name="status" id="status" value="register">

        <div class="errorLogs"></div>
        <div class="form-group d-flex flex-wrap">
            <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none;">
                <!-- <i class="fa fa-image"></i>Picture of your face(head & shoulders) -->
                <!-- <input type="file" name="user_photo" id="user_photo" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule-required="true" onchange="previewFile1()"> -->
                <img class="user-img" id="user_photo" src="./../../RU/inc/uploads/3c1348b7c0698faca8657eef345a2314.jpg" height="100%" width="100%" alt="No driver photo">
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
                    <img style="width: 50px;"src="./../images/whatsapp.png"></img>
                </button>
            </div>
            <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red;">
                <!-- <i class="fa fa-image"></i>Picture of your bakkie(front & side-numberplate blanked)
                <input type="file" name="bakkie_photo" id="bakkie_photo" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule-required="true" onchange="previewFile2()"> -->
                <img class="bakkie-img" src="./../../RU/inc/uploads/f45cd07736ebaad37c5d06b381a75d89.jpg" height="100%" width="100%" alt="No bakkie photo">
            </label>                          
                                    
        </div>
                            
    </form>

    <script src="js/jQuery-v3.5.1.js"></script>
    <script src="js/welcome.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.bundle.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/all.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/all.min.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/fontawesome.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/fontawesome.min.js"></script>
</body>

</html>