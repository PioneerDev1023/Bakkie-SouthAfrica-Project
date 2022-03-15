<?php
    // include_once 'Database.php';
    // // $seltown = $_POST['seltown'];
    // $database = new Database();
    // $db = $database->getConnection();
    // $sql = "SELECT * FROM users WHERE approve IS NOT NULL";
    // $result = $db->query($sql);
    // $sendData = array();
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //       $sendData[] = array(
    //         'user_photo' => $row['user_photo'],
    //         'nickname' => $row['nickname'],
    //         'province' => $row['province'],
    //         'hometown' => $row['hometown'],
    //         'daily_rate' => $row['daily_rate'],
    //         'free_km' => $row['free_km'],
    //         'hoc_rate' => $row['hoc_rate'],
    //         'bakkie_photo'  => $row['bakkie_photo']
    //       );
    //     }
    //     echo json_encode($sendData);
    //   }
    
    include_once 'Database.php';
    $email = $_GET['email'];
    $app = $_GET['app'];
    $database = new Database();
    $db = $database->getConnection();

    $sql = "SELECT * FROM users_temp WHERE email = '". $email ."' ORDER BY id DESC";
    $result = $db->query($sql);
    $sendData = array();
    if ($result->num_rows > 0) {
        // output data of each row
        // while($row = $result->fetch_assoc()) {
        //   $sendData[] = array(
        //     'user_photo' => $row['user_photo'],
        //     'email'=>$row['email'],
        //     'nickname' => $row['nickname'],
        //     'province' => $row['province'],
        //     'hometown' => $row['hometown'],
        //     'daily_rate' => $row['daily_rate'],
        //     'free_km' => $row['free_km'],
        //     'hoc_rate' => $row['hoc_rate'],
        //     'cellnumber' => $row['cellnumber'],
        //     'bakkie_photo'  => $row['bakkie_photo']
        //   );
        // }
        if($app == 'ok'){
            while($row = $result->fetch_assoc()) {
                if(empty($row['bakkie_photo']) && empty($row['user_photo'])) {
                    $query = "UPDATE users 
                        SET nickname='". $row['nickname'] . "', province='". $row['province'] ."', hometown='". $row['hometown'] ."', daily_rate='". $row['daily_rate'] ."', free_km='". $row['free_km'] ."', hoc_rate='". $row['hoc_rate'] ."', cellnumber='". $row['cellnumber'] ."'
                        WHERE email = '" . $row['email'] ."' ";
                        $db->query($query);

                        $query = "DELETE FROM users_temp
                            WHERE email = '" . $row['email'] ."'";
                        $db->query($query);
                }
                else if(empty($row['bakkie_photo'])){
                    $query = "UPDATE users 
                        SET nickname='". $row['nickname'] . "', province='". $row['province'] ."', hometown='". $row['hometown'] ."', daily_rate='". $row['daily_rate'] ."', free_km='". $row['free_km'] ."', hoc_rate='". $row['hoc_rate'] ."', cellnumber='". $row['cellnumber'] ."', user_photo='". $row['user_photo'] ."'
                        WHERE email = '" . $row['email'] ."' ";
                        $db->query($query);

                        $query = "DELETE FROM users_temp
                            WHERE email = '" . $row['email'] ."'";
                        $db->query($query);
                } else if(empty($row['user_photo'])) {
                    $query = "UPDATE users 
                        SET nickname='". $row['nickname'] . "', province='". $row['province'] ."', hometown='". $row['hometown'] ."', daily_rate='". $row['daily_rate'] ."', free_km='". $row['free_km'] ."', hoc_rate='". $row['hoc_rate'] ."', cellnumber='". $row['cellnumber'] ."', bakkie_photo='". $row['bakkie_photo'] ."'
                        WHERE email = '" . $row['email'] ."' ";
                        $db->query($query);

                        $query = "DELETE FROM users_temp
                            WHERE email = '" . $row['email'] ."'";
                        $db->query($query);
                }
                else {
                    $query = "UPDATE users 
                        SET nickname='". $row['nickname'] . "', province='". $row['province'] ."', hometown='". $row['hometown'] ."', daily_rate='". $row['daily_rate'] ."', free_km='". $row['free_km'] ."', hoc_rate='". $row['hoc_rate'] ."', cellnumber='". $row['cellnumber'] ."', user_photo='". $row['user_photo'] ."', bakkie_photo='". $row['bakkie_photo'] ."'
                        WHERE email = '" . $row['email'] ."' ";
                        $db->query($query);

                        $query = "DELETE FROM users_temp
                            WHERE email = '" . $row['email'] ."'";
                        $db->query($query);
                }
                // else {
                //     $query = "UPDATE users 
                //         SET nickname='". $row['nickname'] . "', province='". $row['province'] ."', hometown='". $row['hometown'] ."', daily_rate='". $row['daily_rate'] ."', free_km='". $row['free_km'] ."', hoc_rate='". $row['hoc_rate'] ."', cellnumber='". $row['cellnumber'] ."', user_photo='". $row['user_photo'] ."', bakkie_photo='". $row['bakkie_photo'] ."'
                //         WHERE email = '" . $row['email'] ."' AND '" . $email ."' = '" . $row['email'] ."' ";
                // }
                

                // $db->query($query);
                }

                // $query = "DELETE FROM users_temp
                //     WHERE email = '" . $email ."'";
                // $db->query($query);
            
        } else {
            while($row = $result->fetch_assoc()) {
                $query = "DELETE FROM users_temp
                        WHERE email = '" . $email ."'";
                $db->query($query);
            }
        }
        // echo json_encode($sendData);
      }
    
    // if($app == 'ok'){
    //     $query = "UPDATE users
    //             SET edit = 'OK' 
    //             WHERE email = '" . $email ."'";
    //     $db->query($query);
    // } else {
    //     $query = "DELETE FROM users 
    //             WHERE email = '" . $email ."'";
    //     $db->query($query);
    // }
    
    echo 'success';
    // while($row = mysqli_fetch_array($result)){
    //     $id = $row['id'];
    //     $username = $row['username'];
    //     $name = $row['name'];
    //     $email = $row['email'];

    //     $return_arr[] = array("id" => $id,
    //                     "username" => $username,
    //                     "name" => $name,
    //                     "email" => $email);
    // }

    // Encoding array in JSON format
    // echo json_encode($return_arr);
    
?>