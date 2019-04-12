<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="./css/board_view.css">
<?php include("nav.php"); ?>
<script type="text/javascript">

</script>
<div id="section">    
<div class="container">
    <!-- 작업영역 -->
    <div class="border_view_container">
		 <div class="morebox forTitle">
			<div id="centerline"></div>	
			<div id="textbox">
				<span class="fTitle">
					<span class="itemtype">Momoa</span> <span class="moretext">문의하기</span>
				</span>
			</div>	
		</div>
		<div class="board_list">
			<table class="table board_table">
			<colgroup class="">
				<col style="width:75px;">
				<col style="width:auto;">
				<col style="width:150px;">
				<col style="width:115px;" class="">		
			</colgroup>

			<thead>
				<tr>
					<th scope="col" class="en"> NO</th>
					<th scope="col" class="en">SUBJECT</th>
					<th scope="col" class="en">NAME</th>
					<th scope="col" class=" en">DATE</th>
				</tr>
			</thead>
			<tbody >
				<tr >
					<td class="en">5</td>
					<td class="subject text-left">
						 <span>문의합니다</span> <span><img src="./images/board_secret.png"  alt="비밀글" width='12px' height='12px' /></span>
					</td>
					<td class="writer">김청현</td>
					<td class="wdate">2019-04-10</td>
				</tr>
			</tbody>
			</table>
			<div class="content_cont">
				<textarea readonly>문의하기 view test 입니다.</textarea>
			</div>
			<div class="btnArea">
					<a class="ml"><span class="reple_btn" onclick="">답변하기</span></a>
					<a onclick="pageBack()"><span class="list_btn">목록</span></a>
			</div>

			
		</div>




	</div>
    
</div>
<?php include("footer.php"); ?>



