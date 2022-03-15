<?php 
 require './../../config/config.inc.php';
 'use strict';

$status = $_REQUEST['status'];

// REGISTER AREA 

if ($status == 'register') {
    $username = $_REQUEST['username'];
    $surname = $_REQUEST['surname'];
    $nickname = $_REQUEST['nickname'];
    $cellnumber = $_REQUEST['cell_number'];
    $email = $_REQUEST['email'];
    $province = $_REQUEST['province'];
    $hometown = $_REQUEST['hometown'];
    $hocrate = $_REQUEST['hoc_rate'];
    $freerate = $_REQUEST['free_rate'];
    $dailyrate = $_REQUEST['daily_rate'];
    $password = $_REQUEST['password'];
    $re_pass = $_REQUEST['re_pass'];
    $license_photo = '';
    $user_photo = '';
    $bakkie_photo = '';
    if ($password != $re_pass) {
        echo "<script>alert('Password is incorrect!'); document.location.href='../register.php'</script>";
    } else {
        $sql = "SELECT id FROM users WHERE email=?;";
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
                if (is_uploaded_file($_FILES['license_photo']['tmp_name'])) 
                { 
                    //First, Validate the file name
                    if(empty($_FILES['license_photo']['name']))
                    {
                        echo " File name is empty! ";
                        exit;
                    }

                    $upload_file_license = $_FILES['license_photo']['name'];
                    $extension = substr($upload_file_license, strlen($upload_file_license) - 4, 4);
                    
                    //replace any non-alpha-numeric cracters in th file name
                    $upload_file_license = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_license);

                    //set a limit to the file upload size
                    if ($_FILES['license_photo']['size'] > 1000000) 
                    {
                        echo " too big file ";
                        exit;        
                    }

                    //Save the file
                    $file_name = md5($upload_file_license.rand()).$extension;
                    $dest=__DIR__.'/uploads/'.$file_name;
                    if (move_uploaded_file($_FILES['license_photo']['tmp_name'], $dest)) 
                    {
                        $license_photo = '/uploads/'.$file_name;
                    }
                }
                if (is_uploaded_file($_FILES['user_photo']['tmp_name'])) 
                { 
                    //First, Validate the file name
                    if(empty($_FILES['user_photo']['name']))
                    {
                        echo " File name is empty! ";
                        exit;
                    }

                    $upload_file_user = $_FILES['user_photo']['name'];
                    $extension = substr($upload_file_user, strlen($upload_file_user) - 4, 4);

                    //replace any non-alpha-numeric cracters in th file name
                    $upload_file_user = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_user);

                    //set a limit to the file upload size
                    if ($_FILES['user_photo']['size'] > 1000000) 
                    {
                        echo " too big file ";
                        exit;        
                    }

                    //Save the file
                    $file_name = md5($upload_file_user.rand()).$extension;
                    $dest=__DIR__.'/uploads/'.$file_name;
                    if (move_uploaded_file($_FILES['user_photo']['tmp_name'], $dest)) 
                    {
                        $user_photo = '/uploads/'.$file_name;
                    }
                }

                //uploading user photo
                if (is_uploaded_file($_FILES['bakkie_photo']['tmp_name'])) 
                { 
                    //First, Validate the file name
                    if(empty($_FILES['bakkie_photo']['name']))
                    {
                        echo " File name is empty! ";
                        exit;
                    }

                    $upload_file_bakkie = $_FILES['bakkie_photo']['name'];
                    $extension = substr($upload_file_bakkie, strlen($upload_file_bakkie) - 4, 4);

                    //replace any non-alpha-numeric cracters in th file name
                    $upload_file_bakkie = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_bakkie);

                    //set a limit to the file upload size
                    if ($_FILES['bakkie_photo']['size'] > 1000000) 
                    {
                        echo " too big file ";
                        exit;        
                    }

                    //Save the file
                    $file_name = md5($upload_file_bakkie.rand()).$extension;
                    $dest=__DIR__.'/uploads/'.$file_name;
                    if (move_uploaded_file($_FILES['bakkie_photo']['tmp_name'], $dest)) 
                    {
                        $bakkie_photo = '/uploads/'.$file_name;
                    }
                }

                $date = date('Y-m-d H:i:s');
                $passHashed = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, surname, nickname, cellnumber, email, province, hometown, hoc_rate, free_km, daily_rate, license_photo, user_photo, bakkie_photo, password, timeStamp) VALUES('$username', '$surname', '$nickname', '$cellnumber', '$email', '$province', '$hometown', '$hocrate', '$freerate', '$dailyrate', '$license_photo', '$user_photo', '$bakkie_photo', '$passHashed','$date')";
                
                if ($db->query($sql)) {
                    session_start();
                    $user = array(
                        'username' => $username,
                        'surname' => $surname,
                        'email' => $email,
                        'user_photo' => $user_photo
                    );
                    $_SESSION['user'] = $user;
                    echo "<script>alert('Success!'); document.location.href='../welcome.php'</script>";
                } else {
                    echo "<script>alert('Error occured!'); document.location.href='../register.php'</script>";
                }
            }
        }
    }
    
}

// LOGIN AREA 
if ($status == 'login') {
    $email = mysqli_real_escape_string($db, $_REQUEST['email']);
    $password = $_REQUEST['password'];
    $remember = $_REQUEST['remember'];

    $sql = "SELECT * FROM users WHERE email=?;";
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