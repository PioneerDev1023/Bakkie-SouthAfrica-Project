<?php
    include_once './../config/Database.php';
    // $seltown = $_POST['seltown'];

    
    $database = new Database();
    $db = $database->getConnection();
    if (isset($_POST['selprovince'])) {
      $selprovince = $_POST['selprovince'];
      $sql = "SELECT * FROM users WHERE province = '".$selprovince."' AND approve IS NOT NULL ORDER BY timeStamp DESC ";
    } else if (isset($_POST['seltown'])){
      $seltown = $_POST['seltown'];
      $sql = "SELECT * FROM users WHERE hometown = '".$seltown."' AND approve IS NOT NULL ORDER BY timeStamp DESC ";
    } 
    else {
      $sql = "SELECT * FROM users WHERE approve IS NOT NULL ORDER BY timeStamp DESC ";
    }

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