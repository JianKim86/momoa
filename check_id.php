<?php
    header('Content-Type:text/html; charset=utf-8');
    $conn = mysqli_connect("localhost", "toasthistory", "q1w2e3r4", "toasthistory");

    $id = $_POST['id'];	
    mysqli_query($conn, "set names utf8");
    $myArray = array(); 

    $sql = "select * from momoa_member where m_id='$id' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    echo $count;
    mysqli_close($conn);
?>
