

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="shortcut icon" href="./../../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <title>Hire-My-Bakkie</title>

</head>

<body id="body">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-9 justify-content-center text-center form-card">
                <!-- REGISTER AREA  -->
                <form action="inc/handler.inc.php" method="post" class="form" id="register-form" enctype="multipart/form-data">
                    <input type="hidden" name="status" id="status" value="register">
                    <h2 style="font-weight: 800; text-decoration: underline;">Registration</h2>
                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">

                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter your name" data-rule="required" data-msg="Please enter your name">
                        <div class="validation text-left text-danger"></div>

                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Enter your surname" data-rule="required" data-msg="Please enter your surname">
                        <div class="validation text-left text-danger"></div>

                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email (ex:user@email.com)" data-rule="email" data-msg="Please enter your email">                        
                        <div class="validation text-left text-danger"></div>

                        <input type="number" name="cell_number" id="cell_number" class="form-control" placeholder="Enter 10-digit WhatsApp Cell Number" data-rule="exact:10" data-msg="Please enter your 10-digit cell number" required>
                        <div class="validation text-left text-danger"></div>

                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger"></div>

                        <input type="password" name="re_pass" id="re_pass" class="form-control" placeholder="Re-enter password" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger pwd-retype"></div>
                        
                        <button type="submit" class="register btn btn-block" style="width: 250px; margin: 15px auto;" id="register">Register</button>
                        <div class="link mt-4">
                            <p>Already a member ? <a href="./../../RU/index.php" id="loginLink">Login </a></p>
                        </div>
                        
                    </div>                                     
                </form>
            </div>
            </row>
        </div>
    </div>
    <script src="./../../asset/js/jQuery-v3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
</body>

</html>