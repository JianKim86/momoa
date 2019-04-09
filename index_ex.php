<?php include("header.php"); ?>
<?php include("nav.php"); ?>
<script type="text/javascript">
/***********************************************************************/
// DB SET UP
//{keyType :매개변수로 받은 e}
// key ='top','bottom','outer','onepiece','shoes'
// empty main
//메인 전체 테이블 디비 정보 
//서브 키값을 필터링된 테이블 디비 정보 

// var arrclass_info 에 담음 

/***********************************************************************/
	var arrclass_info;
	$(function() {
		var e = getUrl();
		console.log("e:"+e);
		if(e !="empty") { <?php $keyType = $_GET["key"]; ?> }
		<?php include("momoadb.php"); ?>
		arrclass_info = '<?php echo $jsonData ?>' ; 
		console.log("arrclass_info:"+arrclass_info);
		
		function setupitemInfo(e){
			arrclass_info = e;
			console.log(arrclass_info);
			//데이터 세팅 영역 

		}	
	});
			
	
	
</script>    
<div class="container">
	<!-- 작업영역 -->
</div>
<?php include("footer.php"); ?>
