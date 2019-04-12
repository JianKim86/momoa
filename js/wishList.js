

function deleteWish(){
    
    var msg=confirm("위시템을 삭제합니다.");
    
    if (msg == true){    //확인

        //부모노드 찾아서 삭제
        alert("삭제성공");
   
    }else{   //취소
   
        return false;
   
    }


   
}


// num 위시리스트에 추가 할 때마다 자동 카운트 
// 서버랑 연동

var n=document.getElementsByClassName('wishNum')[0]+1;

function add(){
    n++;
    //document.getElementsByClassName('wishNum')[0].innerHTML;
}
