
// 좋아요 버튼
$(function(){
    var isclicked=-1;

    $(document).on('click', '.like-review', function() {
      isclicked=-isclicked;
      $('.itemlink').unbind("click");


      if(isclicked<0){
        $(this).html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $(this).children('.fa-heart').addClass('animate-like');
        

        // 위시리스트 추가
        addWish();

      }else if(isclicked>0){
        $(this).html('<i class="fa fa-heart-o" aria-hidden="true"></i>');

        //위시리스트 제거
        removeWish();

      }
    });
});

// 좋아요 버튼 누른 해당 아이템을 Wish List에 저장
function addWish(){
    
}

// 좋아요 버튼 누른 해당 아이템을 Wish List에 삭제
function removeWish(){

}