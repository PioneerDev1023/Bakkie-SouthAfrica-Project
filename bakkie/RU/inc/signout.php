<?php
    include_once './../../config/config.inc.php';
    $email = $_POST['email'];
    $sql = "DELETE FROM users WHERE email='".$email."' AND approve = 'OK'";
    $result = $db->query($sql);
?>