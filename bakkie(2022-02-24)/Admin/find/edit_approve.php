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
    
    if($app == 'ok'){
        $query = "UPDATE users 
                SET edit = 'OK' 
                WHERE email = '" . $email ."'";
        $db->query($query);
    } else {
        $query = "DELETE FROM users 
                WHERE email = '" . $email ."'";
        $db->query($query);
    }
    
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