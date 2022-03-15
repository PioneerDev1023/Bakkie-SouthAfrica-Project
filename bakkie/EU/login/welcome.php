
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="./../../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="./../../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <title>Welcome <?php echo $_SESSION['eu_info']['username']; ?></title>
    <?php
        // Check if the user is logged in, if not then redirect him to login page
        if(!isset($_SESSION['eu_info'])){
            header("location: ./../../RU/index.php");
            exit;
        }

        /* ------------------------------------------------------- Logout module */
        if(isset($_GET['logout']) && $_SESSION['eu_info'] != ''){
            unset($_SESSION['eu_info']);
            session_destroy();
            header("Location: ./../../RU/index.php");
        }
    ?>
</head>

<body class="text-center">
    <h1 class="mt-5" style="color: red;">Welcome <?php echo $_SESSION['eu_info']['username']; ?></h1>
    <h2>Your registration was successful.</h2>
    <a href="?logout"><button class="btn btn-sm btn-primary mt-4">Log Out</button></a>
    <a href="../homepage.html"><button class="btn btn-sm btn-success mt-4 ml-5">HOME</button></a>

    <script src="./../../asset/js/jQuery-v3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="./../../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
</body>

</html>