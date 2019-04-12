<?php
	header('Content-Type:text/html; charset=utf-8');

	//Request 로 요청된 값들을 가져오기
	$id= $_POST['admin_id'];
	$pw= $_POST['admin_pw'];

	echo "이름 : $id<br/>";
	echo "메세지 : $pw<br/>";
	
	$conn = mysqli_connect("localhost", "toasthistory", "q1w2e3r4", "toasthistory");
	mysqli_query($conn, "set names utf8");
	$sql = "insert into momoalogin(id, pw) values ('$id','$pw')";
	$result = mysqli_query($conn, $sql);
	
	if($result) {
		echo "insert success";
	} else {
		echo "insert fail";
	}
	mysqli_close($conn);
 ?>