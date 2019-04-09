<?php 
	session_start(); 
	header('Content-Type:text/html; charset=utf-8');
	if(isset($_SESSION['session_id']) || isset($_SESSION['session_pw'])) {
		session_destroy();
		echo true;
	}else {echo fales;}
?>