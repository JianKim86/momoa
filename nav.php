	
<?php 
	session_start(); 
	$id_momoa = $_SESSION['session_id'];
	$pw_momoa = $_SESSION['session_pw'];
	

?>
	<style type="text/css">
			.mh-head {
				background: #4bb5ef;
				color: #fff;
			}
			.mh-text
			{
				font-size: 16px;
				font-weight: bold;
			}

			.mh-head .hamburger-inner,
			.mh-head .hamburger-inner:after, 
			.mh-head .hamburger-inner:before
			{
				background: #fff;
			}
					
		</style>

		<script type="text/javascript">

/***********************************************************************/
// scroll menu 
/***********************************************************************/ 
			var didScroll; 
			var lastScrollTop = 0; 
			var delta = 5; 
			var navbarHeight = $('.logimg').outerHeight();
			
			$(window).scroll(function(event){ didScroll = true; }); 
			setInterval(function() { 
				if (didScroll) { hasScrolled(); didScroll = false; } 
			}, 150);

			function hasScrolled() { 
				var st = $(this).scrollTop();
				var navbarWidth = $('#page').outerWidth(true); 
				if(Math.abs(lastScrollTop - st) <= delta) return;
				
					if(st > 20) {
						if(navbarWidth>577){
							$('.logimg').removeClass('nav-up').addClass('nav-down'); 
					 		$('.nav-web').addClass('fixed-nav');
						}
						$('.first').addClass('fixed-nav');
					}
					 else { 
					 	if(navbarWidth>577){
					 		$('.nav-web').removeClass('fixed-nav'); 
							$('.logimg').removeClass('nav-down').addClass('nav-up'); $('.nav-web').removeClass('fixed-nav');
					 	}
					 	$('.first').removeClass('fixed-nav');
					 }
		
				if(st == 0) {  
					$('.logimg').removeClass('nav-down').addClass('nav-up'); $('.nav-web').removeClass('fixed-nav');
					$('.nav-web').removeClass('fixed-nav');
				}
				lastScrollTop = st; 
			}

/***********************************************************************/
//네비게이션 메뉴
/***********************************************************************/ 
			$(function() {
				$('html').removeClass('no-js'); //for css
				//	create a menu
				$('#menu').mmenu();
				//	fire the plugin
				$('.mh-head.second').mhead({
					scroll: true
				});
				$('.mh-head.first').mhead({
					scroll: true
				 });


			});	
	
		</script>

	</head>
	<body>

	<div id="page"  tabindex="0">
		<div id="header">
			<div class="mypage" role="region"  aria-label="Entertainment">
					<?php if(!isset($_SESSION['session_id']) || !isset($_SESSION['session_pw'])) { ?>
				       <span class = "cursor_p login_momoa" tabindex="0" onclick="changePage(6);">LOGIN&nbsp;&nbsp;</span>
				        <?php } else { ?>
				        <span class = 'cursor_p margin_r10'  tabindex="0" style="font-weight: bold;"><?php echo $id_momoa."님"; ?></span>
				        <span class = "cursor_p logout_momoa" tabindex="0" onclick="logout();">|&nbsp;&nbsp;&nbsp;LOGOUT&nbsp;&nbsp;</span>  
				        <?php } ?>
					<?php if(!isset($_SESSION['session_id']) || !isset($_SESSION['session_pw'])) { ?>
						<span class = "cursor_p margin_r10" tabindex="0" onclick="changePage(6);">|&nbsp;&nbsp;&nbsp;WISH LIST</span>
					<?php } else { ?>
						<span class = "cursor_p margin_r10" tabindex="0"  onclick="changePage(7);">|&nbsp;&nbsp;&nbsp;WISH LIST</span>
					<?php } ?>
			</div>
			<div class="mh-head first" >
				<span class="mh-btns-left nav-mobile">
					<a class="mh-hamburger"  href="#menu"></a>
				</span>
				<div class="logimg mh-text nav-up"  role="region"><a href="mainPage.php" tabindex="0"><img src="./images/logo.png"></a></div>
			</div>
			<div class="mh-head second Sticky nav-web" role="region">	
				<ul class="mh-list">
					<li class = "cursor_p" tabindex="0" onclick="changePage(0);"><span>HOME</span></li>
					<li class = "cursor_p" tabindex="0" onclick="changePage(1);"><span>TOP</span></li>
					<li class = "cursor_p" tabindex="0" onclick="changePage(2);"><span>BOTTOM</span></li>
					<li class = "cursor_p" tabindex="0" onclick="changePage(3);"><span>OUTER</span></li>
					<li class = "cursor_p" tabindex="0" onclick="changePage(4);"><span>ONEPIECE</span></li>
					<li class = "cursor_p" tabindex="0" onclick="changePage(5);"><span>SHOES</span></li>
					<li class = "cursor_p" tabindex="0" onclick="changePage(8);"><span>공지사항</span></li>
					<li class = "cursor_p" tabindex="0" onclick="changePage(9);"><span>문의하기</span></li>
				</ul>
			</div>
		</div>
		<nav id="menu" role=”navigation”>	
			<ul role="region">
				<?php if(!isset($_SESSION['session_id']) || !isset($_SESSION['session_pw'])) { ?> 
						<li class = "cursor_p" tabindex="0" onclick="changePage(6);"><span>LOGIN</span></li>	
				<?php }else{ ?>
						<li class = "cursor_p" tabindex="0" onclick="changePage(7);"><span>WISH LIST</span></li>	
				<?php } ?> 	
				<li class = "cursor_p" tabindex="0" onclick="changePage(0);"><span>HOME</span></li>
				<li class = "cursor_p" tabindex="0" onclick="changePage(1);"><span>TOP</span></li>
				<li class = "cursor_p" tabindex="0" onclick="changePage(2);"><span>BOTTOM</span></li>
				<li class = "cursor_p" tabindex="0" onclick="changePage(3);"><span>OUTER</span></li>
				<li class = "cursor_p" tabindex="0" onclick="changePage(4);"><span>ONEPIECE</span></li>
				<li class = "cursor_p" tabindex="0" onclick="changePage(5);"><span>SHOES</span></li>
				<li class = "cursor_p" tabindex="0" onclick="changePage(8);"><span>공지사항</span></li>
				<li class = "cursor_p" tabindex="0" onclick="changePage(9);"><span>문의하기</span></li>
			</ul>
		</nav>

			