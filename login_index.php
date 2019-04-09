
<?php
    $prevPage = $_SERVER["HTTP_REFERER"];
   // prevPage 변수에 이전 페이지 변수를 저장함
   // 아래는 로그인시 필요한 코드
	
	session_start();
	 $_SESSION['session_id'] ='testID';
 	 $_SESSION['session_pw'] ='1234asdf';

		header("location:".$prevPage);
		// 로그인 처리를 마치고 원래 페이지로 이동시킴
?>




