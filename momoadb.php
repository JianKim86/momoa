<?php 
    $conn = mysqli_connect("localhost", "toasthistory", "q1w2e3r4", "toasthistory");

    $type = $keyType;   
    mysqli_query($conn, "set names utf8");
    $myArray = array(); 

    if(!($type)){
        // 키값 없으면 전체 반환
       $sql = "select * from momoa where visible ='Y'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            $myArray[] = $row;
         }
         $jsonData = json_encode($myArray,JSON_UNESCAPED_UNICODE);
        
    } else {
        // 키값 있으면 타입 반환
        $sql = "SELECT * FROM momoa WHERE type ='$type' AND visible ='Y'";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            $myArray[] = $row;
         }
         $jsonData = json_encode($myArray,JSON_UNESCAPED_UNICODE);
        
    }

     //echo $jsonData;
    mysqli_close($conn);
?>