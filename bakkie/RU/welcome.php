
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
</head>

<body class="text-center">
    <img src="<?='inc/'.$_SESSION['user']['user_photo'] ?>" style="width: 450px; margin: 20px;" alt=""/>
    <h1 class="mt-2">Welcome <?php echo $_SESSION['user']['username']; ?></h1>
    <h3>Your details will appear on the website after approval</h3>
    <a href="inc/logout.inc.php"><button class="btn btn-sm btn-primary mt-4">Log Out</button></a>
    <a href="./../index.php"><button class="btn btn-sm btn-success mt-4 ml-5">HOME</button></a>

    <script src="js/jQuery-v3.5.1.js"></script>
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