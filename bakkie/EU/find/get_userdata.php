<?php
    include_once './../view/config/Database.php';
    $seltown = $_POST['seltown'];
    $database = new Database();
    $db = $database->getConnection();
    $sql = "SELECT * FROM users WHERE hometown='".$seltown."'";
    $result = $db->query($sql);
    $sendData = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $sendData[] = array(
            'user_photo' => $row['user_photo'],
            'nickname' => $row['nickname'],
            'province' => $row['province'],
            'hometown' => $row['hometown'],
            'daily_rate' => $row['daily_rate'],
            'free_km' => $row['free_km'],
            'hoc_rate' => $row['hoc_rate'],
            'bakkie_photo'  => $row['bakkie_photo']
          );
        }
        echo json_encode($sendData);
      }
?>