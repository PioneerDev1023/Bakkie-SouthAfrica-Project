

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../asset/plugin/fontawesome-5.13.1/css/all.css">
    <link rel="stylesheet" href="./../asset/plugin/fontawesome-5.13.1/css/all.min.css">
    <link rel="stylesheet" href="./../asset/plugin/fontawesome-5.13.1/css/fontawesome.css">
    <link rel="stylesheet" href="./../asset/plugin/fontawesome-5.13.1/css/fontawesome.min.css">

    <script src="js/jQuery-v3.5.1.js"></script>

    <title>Login Form</title>

</head>

<body id="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-10 col-sm-10 col-10 justify-content-center text-center form-card">
                <!-- LOGIN AREA  -->
                <form action="" method="post" class="form" id="login-form">
                    <h3 style="margin-bottom: 25px;">Welcome</h3>
                    <div class="d-flex form-group">
                        <div class="col-5 brandName mb-2">
                            <img src="images/fav-icon.png" alt="favicon image">
                        </div>
                        <div class="col-7 form-group" style="text-align: left;">
                            <p style="text-decoration: underline;">I want to:</p>
                            <input type="radio" id="RU" name="bakkie" value="RU">
                            <label for="RU">register my bakkie</label><br>
                            <input type="radio" id="EU" name="bakkie" value="EU">
                            <label for="EU">find a bakkie</label><br>
                            <P class="radio-error" style="color: red; display: none;">Select that you want</P>
                        </div>
                    </div>
                    
                    <div class="loginErrorLogs"></div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email" data-rule="required" data-msg="Please enter your email">
                        <div class="validation text-left text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="uPassword" id="uPassword" class="form-control" placeholder="Enter password" data-rule="minlen:6" data-msg="Please enter your password">
                        <div class="validation text-left text-danger pwd"></div>
                    </div>

                    <div class="form-group text-left">
                        <input type="checkbox" name="remember" id="remember"> Keep me checked in
                    </div>

                    <button type="submit" class="register btn btn-block" id="login" style="font-family: cursive;">Login</button>

                    <div class="link mt-4">
                        <p>New Member ? <a href="#" id="registerLink">Register</a></p>
                    </div>
                </form>
            </div>
            </row>
        </div>
    </div>



    <script>
        $( document ).ready(function() {
            var radioValue = $("input[name='bakkie']:checked").val();
            
            $("#registerLink").on('click', function() {
                var radioValue = $("input[name='bakkie']:checked").val();
                if(radioValue == 'RU'){
                    window.location = "register.php";
                } else if (radioValue == 'EU'){
                    window.location = "./../EU/login/register.php";
                } else {
                    $(".radio-error").show();
                }
            });
        });
    </script>
    <script src="js/main.js"></script>
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