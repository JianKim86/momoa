<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="./css/board_write.css">
<script src="./js/board_write.js"></script>
<?php include("nav.php"); ?>
<script type="text/javascript">

</script>
<div id="section">    
<div class="container">
    <!-- 작업영역 -->
    <div class="bwrite_container">
		<div class="morebox">
			<div id="centerline"></div>	
			<div id="textbox">
				<span>
					<span class="itemtype">Momoa</span> <span class="moretext">문의하기</span>
				</span>
			</div>	
		</div>
		<div class= "board_form">
			<form action="register_inquire_db.php" method="post" class ="bform" enctype="multipart/form-data">
				<div class="board_write">
					<div class="prdSelect">
						<p class="button"><a onclick="select_item()"><span>상품선택 > </span></a>
						<select id="select_type" class="c_type hideselet" name="select_type" onchange="s_type(this);" >
							<option value="">- 상품타입선택 -</option>
							<option value="top">top</option>
							<option value="outer">outer</option>
							<option value="bottom">bottom</option>
							<option value="onepiece">onepiece</option>
							<option value="shoes">shoes</option>
						</select>
						<select id="select_name" class="c_name hideselet" name="select_name" onchange="s_name(this);" >
							<option value="">- 상품이름선택 -</option>
							<option value="해당상품코드">kingston mtm</option>
							<option value="해당상품코드">u-neck tee</option>
							<option value="해당상품코드">ess cotton tee</option>
							<option value="해당상품코드">cream pintuck wide slacks</option>
							<option value="해당상품코드">span cotton pants</option>
						</select>
						</p>
						<p class="item_script hideselet"></p>
						<input type="hidden" id="item_code" name="item_code" />				
					</div>
					<table class="board_table">
						<tbody>
							<tr class="first">	
								<th scope="row">제목</th>
									<td>
										<select id="subject" name="subject" >
											<option value="문의합니다">문의합니다</option>
											<option value="사이즈 문의합니다">사이즈 문의합니다</option>
										</select>  
									</td>
							</tr>
							<tr class="write-wrap">
								<td colspan="2" class="write">
									<div class="content_cont">
									<input type="hidden"  name="write_content" class="write_content"/>
									<textarea> </textarea>
									</div>
								</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<th scope="row">첨부파일1</th>
								<td><input name="attach_file[]" type="file"  /></td>
							</tr>
							<tr>
								<th scope="row">첨부파일2</th>
								<td><input name="attach_file[]" type="file"  /></td>
							</tr>
							<tr>
							<th scope="row">첨부파일3</th>
								<td><input name="attach_file[]" type="file"  /></td>
							</tr>
							<tr>
								<th scope="row">첨부파일4</th>
								<td><input name="attach_file[]" type="file"  /></td>
							</tr>
							<tr>
								<th scope="row">첨부파일5</th>
								<td><input name="attach_file[]" type="file"  /></td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<th scope="row">비밀번호</th>
									<td><input id="password" name="password" value="" type="password"  /></td>
							</tr>
							<tr class="">
								<th scope="row">비밀글설정</th>
								<td>
									<input id="secure0" name="secure" value="F" type="radio" checked="checked"  /><label for="secure0" >공개글</label>
									<input id="secure1" name="secure" value="T" type="radio"  /><label for="secure1" >비밀글</label>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
					
				<div class="btnArea ">
					<span class="left"><a href="/board.php"><span class="list_btn">목록</span></a></span>
					<a><span class="register_btn" onclick="confirm_board(1)">등록</span></a>
					<a><span class="cancel_btn" onclick="confirm_board(2);">취소</span></a>
				</div>
				<input type="hidden" id="user_id"  name="user_id"/>
			</form>
		</div>
		</div>
</div>
<?php include("footer.php"); ?>



