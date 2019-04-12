<?php include("header.php"); ?>
<!--개인연결-->
		<link rel="stylesheet" type="text/css" media="screen" href="./css/register.css"> 
<?php include("nav.php"); ?>
		
    <script>
		
		// 유효성 검사
		function checkReg(){

			var id=document.getElementById('id');
			var p1=document.getElementById('p1');

			if(id.value.match( re) ) p1.innerHTML="가입 가능합니다.";
			else p1.innerHTML="요구하는 형식이 아닙니다."


			var re=/^[a-zA-Z0-9]{4,12}$/;   //id 검사
   
		}
		//이메일 셀렉트
		function changeAddr(){
			var state = $('.selectE option:selected').val();
			if(state=='c_write') {			
				$('.check_email_add').removeAttr("readonly");
				$('.check_email_add').attr('value',"");
				$('.check_email_add').focus();					
			}else {
				$('.check_email_add').attr('value',state);					
			}	
		}//changeAddr

		//////////////////////////중복 검사////////////////////////////////////////////////
		var idck = 0;
		function id_dbcheck() {
				var idVal = $('input[name="m_id"]').val();
				$.ajax({
					url: 'check_id.php',
					type: 'POST',
					data: "id=" + idVal,
					dataType: 'html',
					success: function (data) {
						if(data > 0) {
							alert("중복된 ID가 있습니다.");							
						} else {
							alert("중복된 ID가 없습니다.");
							idck = 1;
						}						
					}
				});				
			}
		
		function signIn(){
			if(idck == 0) {
				alert("ID 중복 검사를 해주세요.");
				return;
			}
			var isgo =false;
			//form에서 보낼 값 체크 해서 디비에 보내기
			//총 보내야할값 :input value 
			//name = m_type (라디오 버튼)
			var radioVal = $('input[name="m_type"]:checked').val();

			//name = m_id (아이디) class check_id의 value 값으로 아이디 중복 확인 되었는지 확인 
			var tmp_idVal = $('input[name="m_id"]').val();
			if(isValidText(tmp_idVal)) {
				var idVal = tmp_idVal;
			} else {
				alert("ID를 4~12자의 영문 대소문자와 숫자로만 입력해주세요.");
				return;
			}

			//class i_pw 와 check_pw 의 값 확인 후 일치하면 name = m_pw	
			var i_pwVal = $('.i_pw').val();
			var check_pwVal = $('.check_pw').val();
			if (i_pwVal == check_pwVal) {
				var tmp_m_pwVal = $('input[name="m_pw"]').val();				
				if(isValidPass(tmp_m_pwVal)) {
					var m_pwVal = tmp_m_pwVal;
				} else {
					alert("비밀번호를 4~12자를 입력해주세요.");
					return;
				}
			} else {
				alert("비밀번호가 서로 다릅니다.");
				return;
			}

			//name = m_name (이름)
			// var m_nameVal = $('input[name="m_name"]').val();
			var tmp_m_nameVal = $('input[name="m_name"]').val();
			if(tmp_m_nameVal == "") {
				alert("이름을 입력해주세요.");
				return;
			} else {
				if (isValidName(tmp_m_nameVal)) {
					m_nameVal = tmp_m_nameVal;
				} else {
					alert("이름 입력이 잘못됐습니다.");
					return;
				};
			}

			//name = m_birth (생일)
			var m_birthVal = $('input[name="m_birth"]').val();

			//name = m_hp (전화번호) class phone_num의 인풋값을 확인하고 합쳐서 name = m_hp 에 벨류값으로 넣어놓기
			var phone_num1 = $('.phone_num1').val();
			var phone_num2 = $('.phone_num2').val();
			var phone_num3 = $('.phone_num3').val();
			$('.m_hp_class').attr('value',phone_num1+phone_num2+phone_num3);
			
			//name = m_email (이메일) class phone_num의 인풋값 확인하고 합쳐서 name = m_email 에 벨류값으로 넣어놓기  
			var check_emailVal = $('.check_email').val();
			var check_email_addVal = $('.check_email_add').val();
			var check_email_select = $('.selectE').val();
			if(check_emailVal == "" || check_email_addVal == "") {
				alert('이메일을 입력해주세요.');
				return;
			} else {				
				if(isValidEmail(check_emailVal)) {
					$('.m_email_class').attr('value',check_emailVal + "@" + check_email_addVal);
				} else {
					alert('양식 틀림');
					return;
				}
			}

			// var m_snsVal = $('input[name="m_sns"]:checked').val();
			$('input:checkbox[name="m_sns"]').is(":checked") == true			
			isgo = true; //여기까지 오면 완료
			if(isgo) {
				alert("회원 가입이 완료됐습니다.");
				$("form").submit();
			}
		};

		function isValidName(name){
    		if(name.length > 10) return false;
		    let regx = /[^a-zA-Z가-힣]/;
    		return !regx.test(name);
		}
		function isValidText(value){
    		if(value.length > 12 | value.length < 4) return false;    		
		    let regx = /[^a-zA-Z0-9]/;
    		return !regx.test(value);
		}
		function isValidPass(value){
    		if(value.length > 12 | value.length < 4) return false;    		
		    let regx = /[^a-zA-Z0-9~!@#$%^&*()_+|<>?:{}]/;
    		return !regx.test(value);
		}		
		function isValidEmail(value){
		    let regx = /[^a-zA-Z0-9]/;
    		return !regx.test(value);
		}
	</script>

    <div id="section">
        <div class="container">
			<div class = "register_container">
				<div class="morebox">
					<div id="centerline"></div>	
					<div id="textbox">
						<span>
							<span class="itemtype">Momoa</span> <span class="moretext">회원가입</span>
						</span>
					</div>	
				</div>
				<p><span class="s_red"> *</span>필수 정보입력</p>
				<fieldset>
					<form action="register_send.php" method="POST" class = "input_form">
						<table>
							<tr>
								<th>회원구분 <span class="s_red"> *</span></th>
								<td>
									<span><input type="radio" name="m_type" checked value="1"> 일반회원</span>
									<span><input type="radio" name="m_type" value="2"> 관리자</span>
									<p>개인 정보 허위 기재시 무통보 삭제됨을 유의하여 주세요.</p>
								</td>
							</tr>
							<tr>
								<th>아이디<span class="s_red"> *</span></th>
								<td>
									<span><input type="text" name="m_id"></span>
									<span class="marginL_8"><input type="button" class="check_id" onclick="id_dbcheck()" value="중복확인"></span>
									<p>(4~12자의 영문 대소문자와 숫자로만 입력)</p>
									<p id= "p1"></p>
								</td>
							</tr>
							<tr>
								<th>비밀번호<span class="s_red"> *</span></th>
								<td>
									<span><input type="password" name="m_pw" class="i_pw"></span>
									<p>(4~12자의 영문 대소문자와 숫자로만 입력)</p>
								</td>
							</tr>
							<tr>
								<th>비밀번호 확인<span class="s_red"> *</span></th>
								<td><span><input type="password" class="check_pw"></span></td>
							</tr>
							<tr>
								<th>이름<span class="s_red"> *</span></th>
								<td><span><input type="text" name="m_name"></span></td>
							</tr>
							<tr>
								<th>생일<span class="s_red"> *</span></th>
								<td><span><input type="date" id="birth" name="m_birth" placeholder ="1990-11-02" value="1990-11-02"></span></td>
							</tr>
							<tr>
								<th>핸드폰번호<span class="s_red"> *</span></th>
								<td class="phone_num">
									<span><input type="number" class="phone_num1" value="010" maxlength="3" max ="999" min="0"></span> - 
									<span><input type="number" class="phone_num2" value="1234" maxlength="4" max ="9999" min="0"></span> -
									<span><input type="number" class="phone_num3" value="5678" maxlength="4" max ="9999" min="0"></span>
								</td>
							</tr>
							<tr>
								<th>email<span class="s_red"> *</span></th>
								<td class ="check_emailAddr">
									<span><input type="text" class="check_email"/> @</span>
									<span><input type="text" class="check_email_add" readonly/></span>
									<select  class="selectE" onchange="changeAddr()">
										<option value="">이메일선택</option>
										<option value="naver.com">naver.com</option>
										<option value="hanmail.net">hanmail.net</option>
										<option value="gmail.com">gmail.com</option>
										<option value="c_write">직접입력</option>
									</select>	
								</td>
							</tr>
							<tr>
								<th>SNS 수신여부</th>
								<td>
									<input type="checkbox" name="m_sns" value="Y" id="sms">동의함
									<p>쇼핑몰에서 제공하는 할인/이벤트 정보를 SMS으로 받으실 수 있습니다.</p>
								</td>
							</tr>
						</table>	
						<input type="hidden" name = "m_email" class="m_email_class">
						<input type="hidden" name = "m_hp" class="m_hp_class">
					</form>
			
				</fieldset>
				<div class="sand_register">
					<a onclick="signIn()"><span>회원가입</span></a>
					<a onclick="pageBack2()"><span>취소하기</span></a>
				</div>
			</div>
			
		
        </div>
  <?php include("footer.php"); ?>
