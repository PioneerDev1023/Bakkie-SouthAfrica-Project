<?php 
 require 'config.inc.php';
 'use strict';

$status = $_REQUEST['status'];

// REGISTER AREA 

if ($status == 'register') {
    $username = $_REQUEST['username'];
    $surname = $_REQUEST['surname'];
    $cellnumber = $_REQUEST['cell_number'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $re_pass = $_REQUEST['re_pass'];
    
    if ($password != $re_pass) {
        echo "<script>alert('Password is incorrect!'); document.location.href='../register.php'</script>";
    } else {
        $sql = "SELECT id FROM employers WHERE email=?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "<script>alert('Database Error!'); document.location.href='../register.php'</script>";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                echo "<script>alert('Email already exist!'); document.location.href='../register.php'</script>";
            } else {
                $date = date('Y-m-d H:i:s');
                $passHashed = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO employers (name, surname, cellnumber, email,  password, timeStamp) VALUES('$username', '$surname', '$cellnumber', '$email',  '$passHashed','$date')";
                
                if ($db->query($sql)) {
                    session_start();
                    $user = array(
                        'username' => $username,
                        'surname' => $surname,
                    );
                    $_SESSION['user'] = $user;
                    echo "<script>alert('Success!'); document.location.href='./../../../view.php'</script>";
                } else {
                    echo "<script>alert('Error occured!'); document.location.href='../register.php'</script>";
                }
            }
        }
    }
    

    // if (isset($_FILES['license_photo']['name']) && $_FILES['license_photo']['name'] != "") {
    //     var_dump($_FILES['license_photo']['tmp_name'], "uploads/" . $_FILES['license_photo']['name']);
    //     $tmp = $_FILES['license_photo']['tmp_name'];
    //     $img_name = "uploads/" . $_FILES['license_photo']['name'];
    //     if (move_uploaded_file($tmp, $img_name)) {
    //         $license_photo = $img_name;
    //     } else {
    //         var_dump('upload error');
    //     }
    // }

    
}

// LOGIN AREA 
if ($status == 'login') {
    $email = mysqli_real_escape_string($db, $_REQUEST['email']);
    $password = $_REQUEST['password'];
    $remember = $_REQUEST['remember'];

    $sql = "SELECT * FROM employers WHERE email=?;";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'sqlError';
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['password']);
            if ($pwdCheck == false) {
                echo 'wrongPwd';
            } elseif ($pwdCheck == true) {
                session_start();
                $_SESSION['user'] = $row;
                echo 'OK';
            } else {
                echo 'wrongPwd';
            }
        } else {
            echo 'noUser';
        }
    }
}