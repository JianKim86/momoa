

/***********************************************************************/
// 네비 클릭시 page 이동 
// sidePage :
// 주소에 디비에서 불러올 정보의 키값을 파라미터로 보냄 
// key ='top','bottom','outer','onepiece','shoes'
// 나머지 : mainPage, login, wishList 
// 추가 : notice,board

/***********************************************************************/

	var keyTypes =  new Array( 'home', 'top', 'bottom', 'outer' , 'onepiece' ,'shoes' );
	function changePage(e){
		var code = keyTypes[e];
		//console.log(e);
		if(e>0 && e<6){
			location.href ="sidePage.php?key="+code;
		}else {
			switch (e){
			case 0: location.href ="mainPage.php"; break;
			case 6: location.href ="login.php"; break;
			case 7: location.href ="wishList.php"; break;
			case 8: location.href ="notice.php"; break;
			case 9: location.href ="board.php"; break;
			}
		}

	}
	
/***********************************************************************/
// load시 페이지 파싱
// key ='top','bottom','outer','onepiece','shoes', undifined
// setDB() 호출 
// 나머지 : login, wishList 

/***********************************************************************/	

	function getUrl(){
			
		var url = document.location.href;	
		var para = url.split("?");		
		if(para[1] != undefined){
			var v = para[1].split('=')[1];
			return v;
		}else{ 
			var pieces = url.split("/");
			pieces = pieces[pieces.length-1];
			pieces = pieces.split(".");
			pieces = pieces[0];
			//console.log(pieces);
			if(pieces == "mainPage") {return "empty";} 
		} 
		
	}


/***********************************************************************/
//login N logout
/***********************************************************************/ 
	function logout(){
			
				$.ajax({
					type: 'post' , 
					url: 'logout.php' , 
					dataType : 'html' , 
					success: function(hdata){
						if(hdata) {alert("성공적으로 로그아웃되었습니다.");}
						else {alert("로그아웃이 실패하였습니다.");}
						location.reload(); 
					}
						
				});	
	
			} 



/***********************************************************************/
//page back
/***********************************************************************/
	function pageBack(){
		history.go(-1);
	}
	
	
/***********************************************************************/
//move board inner 
/***********************************************************************/
	function goPage(e){
		location.href ="board_view.php";
	}	

/***********************************************************************/
//move board inner 
/***********************************************************************/
	function pageBack2(){
		location.href ="mainPage.php";
	}		