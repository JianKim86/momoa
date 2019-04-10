<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" media="screen" href="./css/login.css">
<?php include("nav.php"); ?>
  
		<!--개인연결-->	 		
  		<script type="text/javascript">
  			function signIn(){
				$("form").submit();				
  			}
		  </script>
		
	</head>
	<body>
	<div id="page">
    <div id="header"></div>
    <div id="section">
        <div class="container">
			<div class = "login_container">
				<div class="morebox">
					<div id="centerline"></div>	
					<div id="textbox">
						<span>
							<span class="itemtype">Momoa</span> <span class="moretext">LOGIN</span>
						</span>
					</div>	
				</div>
				<fieldset>
					<form action="login_check.php" method="POST" class = "input_form">
						<ul class ="input_list">
							<li>
								<p>ID</p>
								<label><input type="text" class= "m_id" name="m_id"></label>
							</li>
							<li>
								<p>PASSWPRD</p>
								<label><input type="password" autocomplete="off" class= "m_pw" name="m_pw"></label>
							</li>
						</ul>
						<div class= "login_btn">
							<a onclick="signIn()">LOGIN</a>
						</div>
						<div class="clear"></div>
						<div class="security">
							<input type="checkbox" name ="save_id" id="check_id">
							<label for = "check_id">아이디저장</label>
							<input type="checkbox" name ="save_id" id="check_security">
							<label for = "check_security">보안접속</label>
						</div>
					</form>
				</fieldset>
				<div class="register_btn">
					<a href="register.php">회원가입</a>
				</div>
			</div>
        </div>
	<?php include("footer.php"); ?>