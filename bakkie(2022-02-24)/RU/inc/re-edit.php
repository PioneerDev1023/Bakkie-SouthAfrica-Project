<?php 
 require 'config.inc.php';
//  'use strict';

    $userphoto = $_REQUEST['m_user_photo'];
    $nickname = $_REQUEST['nickname'];
    $cellnumber = $_REQUEST['cell_number'];
    $province = $_REQUEST['province'];
    $hometown = $_REQUEST['hometown'];
    $hocrate = $_REQUEST['hoc_rate'];
    $freerate = $_REQUEST['free_rate'];
    $dailyrate = $_REQUEST['daily_rate'];
    $bakkiephoto = $_REQUEST['m_bakkie_photo'];

    if (is_uploaded_file($_FILES['m_user_photo']['tmp_name'])) 
        { 
            //First, Validate the file name
            if(empty($_FILES['m_user_photo']['name']))
            {
                echo " File name is empty! ";
                exit;
            }

            $upload_file_user = $_FILES['m_user_photo']['name'];
            $extension = substr($upload_file_user, strlen($upload_file_user) - 4, 4);
            //Too long file name?
            // if(strlen ($upload_file_license)>100)
            // {
            //     echo " too long file name ";
            //     exit;
            // }

            //replace any non-alpha-numeric cracters in th file name
            $upload_file_user = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_user);

            //set a limit to the file upload size
            if ($_FILES['m_user_photo']['size'] > 1000000) 
            {
                echo " too big file ";
                exit;        
            }

            //Save the file
            $file_name = md5($upload_file_user.rand()).$extension;
            $dest=__DIR__.'/uploads/'.$file_name;
            if (move_uploaded_file($_FILES['m_user_photo']['tmp_name'], $dest)) 
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
            //Too long file name?
            // if(strlen ($upload_file_bakkie)>100)
            // {
            //     echo " too long file name ";
            //     exit;
            // }

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

        // $date = date('Y-m-d H:i:s');
        // $passHashed = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE INTO users (nickname, cellnumber, province, hometown, hoc_rate, free_km, daily_rate, user_photo, bakkie_photo, edit) VALUES('$nickname', '$cellnumber', '$province', '$hometown', '$hocrate', '$freerate', '$dailyrate', '$userphoto', '$bakkiephoto', 'wait')";
        
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
            echo "<script>alert('Error occured!'); document.location.href='../welcome.php'</script>";
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



