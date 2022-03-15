<?php
    $s_number = $_REQUEST['s_cellnumber'];
    $r_number = $_REQUEST['r_cellnumber'];
    $s_name = $_REQUEST['s_name'];
    $message = $_REQUEST['message'];
    if($s_number==''){
        $mail = ''.$message.'  My name is '.$s_name.' . ';
    } else if ($s_name=='') {
        $mail = ''.$message.'  My cell number is '.$s_number.' . ';
    } else {
        $mail = ''.$message.'  My name is '.$s_name.' . My cell number is '.$s_number.'. ';
    }
    
    $url = 'https://wa.me/27'.$r_number.'?text='.$mail.'';
    
    echo ("<script>location.href='$url'</script>");
?>