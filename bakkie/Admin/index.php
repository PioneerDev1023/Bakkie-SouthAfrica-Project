<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="icon/icon.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/admin-style.css">

<?php

/* ------------------------------------------------------- Login module */
$error = '';
if(isset($_POST['login_bpost']) && $_POST['password'] != ''){
    if($_POST['password'] == 'bakkie123.'){
        //echo 'correct password'; 
        $_SESSION['username'] = 'jacques';
        header("Location: find/index.php");
    }
    else{
        //echo 'incorrect password'; 
        $error = 'Incorrect Password';
    }
}

/* ------------------------------------------------------- Logout module */
if(isset($_GET['logout']) && $_SESSION['username'] != ''){
    unset($_SESSION['username']);
    session_destroy();
    header("Location: index.php");
}

?>

</head>
<body style="background-image: url('./icon/delivery.jpg');
    background-repeat: no-repeat;
    background-size: cover;">
    <?php ?>
        <div class="login-form">
            <form action="#" method="post" style="font-family: cursive, monospace, sans-serif, serif;">
                <h2 class="text-center">Admin Log in</h2>       
                <div class="form-group">
                    <label>Enter Password: </label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" name="login_bpost" class="btn btn-primary btn-block">Log in</button>
                </div>    
                <?php
                if($error != ''){
                    echo '<p class="alert alert-danger">'.$error.'</p>';
                }
                ?>
            </form>
        </div>
    <?php ?>
</body>
</html>