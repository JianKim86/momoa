<?php
	header('Content-Type:text/html; charset=utf-8');

	//Request 로 요청된 값들을 가져오기
	$type= $_POST['m_type'];
    $id= $_POST['m_id'];
    $pw= $_POST['m_pw'];    
    $name= $_POST['m_name'];
    $birth= $_POST['m_birth'];
    $hp= $_POST['m_hp'];
    $email= $_POST['m_email'];
    $sns= $_POST['m_sns'];

    if(strcmp($sns, "Y") == 0) {
    } else {$sns = "N";}
        
	echo "Type : $type<br/>";
    echo "Id : $id<br/>";
    echo "비번 : $pw<br/>";
    echo "이름 : $name<br/>";
    echo "생일 : $birth<br/>";
    echo "HP : $hp<br/>";
    echo "Email : $email<br/>";
    echo "SNS : $sns<br/>";    
	
	$conn = mysqli_connect("localhost", "toasthistory", "q1w2e3r4", "toasthistory");
	mysqli_query($conn, "set names utf8");
    $sql = "insert into momoa_member(m_type, m_id, m_pw, m_name, m_birth, m_hp, m_email, m_sns)values ('$type','$id','$pw','$name','$birth','$hp','$email','$sns')";
	$result = mysqli_query($conn, $sql);
	
	if($result) {
		echo "insert success";
	} else {
		echo "insert fail";
	}
	mysqli_close($conn);
 ?>