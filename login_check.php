
<?php
/***********************************************************************/
// ID PW DB CHECK
// key ='m_id','m_pw'
// 로그인 페이지에서 넘어온 ID / PW 맞는지 확인
/***********************************************************************/
   //  $prevPage = $_SERVER["HTTP_REFERER"];
   // prevPage 변수에 이전 페이지 변수를 저장함
   // 아래는 로그인시 필요한 코드
   header('Content-Type:text/html; charset=utf-8');
   $conn = mysqli_connect("localhost", "toasthistory", "q1w2e3r4", "toasthistory");

   $id = $_POST['m_id'];
   $pw = $_POST['m_pw'];
   mysqli_query($conn, "set names utf8");

   $sql = "select * from momoa_member where m_id='$id' and m_pw='$pw' ";   
   $result = mysqli_query($conn, $sql);
   $row_num = mysqli_num_rows($result);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

   if(strcmp($id, $row[m_id]) == 0 && strcmp($pw, $row[m_pw]) == 0) {
   } else {
      echo("<Script>\n <!--\n window.alert('패스워드가 틀립니다.')\n history.go(-1)\n -->\n </Script>\n");
	   exit;
   }

	session_start();
	$_SESSION['session_id'] =$id;
	$_SESSION['session_pw'] =$pw;
	  
	echo("<Script>\n <!--\n history.go(-2)\n -->\n </Script>\n");
		// header("location:".$prevPage);		
		// 로그인 처리를 마치고 원래 페이지로 이동시킴
?>