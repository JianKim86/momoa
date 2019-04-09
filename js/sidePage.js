
// 좋아요 버튼
$(function(){
    var isclicked=false;
    $(document).on('click', '.like-review', function(e) {
        if(!isclicked){
            isclicked=true;
            $(this).html('<i class="fa fa-heart" aria-hidden="true"></i>');
            $(this).children('.fa-heart').addClass('animate-like');

            // 위시리스트
            addWish();

        }else{
            isclicked=false;
            $(this).html('<i class="fa fa-heart-o" aria-hidden="true"></i>');

            // 위시리스트
            removeWish();
        }
    });
});


// .itemlink인 요소를 누르면 해당 아이템의 상세 페이지로 이동
$(function(){
    $(document).on('click', '.itemlink', function(e) {
        alert("상세페이지 이동");
    });
});


// 좋아요 버튼 누른 해당 아이템을 Wish List에 저장
function addWish(){
    
}

// 좋아요 버튼 누른 해당 아이템을 Wish List에 삭제
function removeWish(){

}