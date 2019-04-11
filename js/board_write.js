/***********************************************************************/
//
// board 등록. 취소
//
/************************************************************************/

function confirm_board(e){
	var str="";
	switch(e){
		case 1: str = '등록하시겠습니까?'; break;
		case 2: str = '등록을 취소하시겠습니까?'; break;
	}
	
	
	var result = confirm(str);
		if(result) { //yes 
			if(e==2) {history.go(-2);}
			else {
				$('.bform').submit();				
			}		
		} else { //no 
			
		}
};

/***********************************************************************/
//
// item 선택
//
/************************************************************************/


function select_item(){
	$('.c_type').removeClass('hideselet');
}
/***********************************************************************/
//
// item type 선택
//
/************************************************************************/

function s_type(e){
	//e.value
	$('.c_name').removeClass('hideselet');
}
function s_name(e){
	//e.vale
	$('.c_name').removeClass('hideselet');
	
	var data="db에서 읽어오는 상품이름";
	
	$('.item_script').removeClass('hideselet');
	$('.item_script').text(data);
	$('#item_code').attr('value', data);
}