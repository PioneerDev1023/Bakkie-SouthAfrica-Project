<?php 
 require './../../config/config.inc.php';

    $m_user_photo = '';
    $nickname = $_REQUEST['nickname'];
    $cellnumber = $_REQUEST['cell_number'];
    $province = $_REQUEST['province'];
    $hometown = $_REQUEST['hometown'];
    $hocrate = $_REQUEST['hoc_rate'];
    $freerate = $_REQUEST['free_rate'];
    $dailyrate = $_REQUEST['daily_rate'];
    $m_bakkie_photo = '';
    $email = $_REQUEST['m_email'];

    $result = $db -> query("SELECT * FROM users_temp WHERE email='$email'");
    $row = $result->fetch_assoc();
    if($row['email'] != '') {
        echo "<script>alert('Your last request is in waiting yet.'); window.location.href='./../welcome.php';</script>";
    } else {

        if (strlen($cellnumber) != 10)
            {
                echo '<script type="text/javascript">alert("Please enter your 10-digit cell number.")</script>';
                exit;
            }


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
            if (is_uploaded_file($_FILES['m_bakkie_photo']['tmp_name'])) 
            { 
                //First, Validate the file name
                if(empty($_FILES['m_bakkie_photo']['name']))
                {
                    echo " File name is empty! ";
                    exit;
                }

                $upload_file_bakkie = $_FILES['m_bakkie_photo']['name'];
                $extension = substr($upload_file_bakkie, strlen($upload_file_bakkie) - 4, 4);
                
                //replace any non-alpha-numeric cracters in th file name
                $upload_file_bakkie = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_bakkie);

                //set a limit to the file upload size
                if ($_FILES['m_bakkie_photo']['size'] > 1000000) 
                {
                    echo " too big file ";
                    exit;        
                }

                //Save the file
                $file_name = md5($upload_file_bakkie.rand()).$extension;
                $dest=__DIR__.'/uploads/'.$file_name;
                if (move_uploaded_file($_FILES['m_bakkie_photo']['tmp_name'], $dest)) 
                {
                    $bakkie_photo = '/uploads/'.$file_name;
                }
            }
            
            $sql = "INSERT INTO users_temp (nickname, cellnumber, email, province, hometown, hoc_rate, free_km, daily_rate, user_photo, bakkie_photo) VALUES('$nickname', '$cellnumber', '$email', '$province', '$hometown', '$hocrate', '$freerate', '$dailyrate', '$user_photo', '$bakkie_photo')";
            
            if ($db->query($sql)) {
                echo "<script>alert('Success!'); document.location.href='../welcome.php'</script>";
            } else {
                echo "<script>alert('Error occured!'); document.location.href='../welcome.php'</script>";
            }
    }



