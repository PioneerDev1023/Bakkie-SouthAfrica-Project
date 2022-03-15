<?php
    
    include_once 'Database.php';
    $email = $_GET['email'];
    $app = $_GET['app'];
    $database = new Database();
    $db = $database->getConnection();
    
    if($app == 'ok'){
        $query = "UPDATE users 
                SET approve = 'OK' 
                WHERE email = '" . $email ."'";
        $db->query($query);
    } else {
        $query = "DELETE FROM users 
                WHERE email = '" . $email ."'";
        $db->query($query);
    }
    
    echo 'success';
    
?>