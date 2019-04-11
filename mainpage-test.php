<!DOCTYPE html>
<html lang='ko' class="no-js">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>test</title>

		<link rel="stylesheet" type="text/css" href="./css/nav/nav.css">
		<link rel="stylesheet" type="text/css" href="./css/nav/hamburgers.min.css">
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="./css/default.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.3.3/jquery.mmenu.all.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.3.3/jquery.mmenu.all.js"></script>
		<link rel="stylesheet" type="text/css" href="./lib/jquery.mhead.css">
		<script type="text/javascript" src="./lib/jquery.mhead.js"></script>
		<script src="./js/default.js"></script>
		
    <link rel="stylesheet" type="text/css" media="screen" href="./css/mainPage.css">

    <script src="./lib/js/swiper.min.js"></script>
		<link rel="stylesheet" href="./lib/css/swiper.min.css">
    <script src="https://use.fontawesome.com/7ad89d9866.js"></script>
    <script type="text/javascript" src="./lib/js/jquery.cookie.js"></script>


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
      // console.log("arrclass_info:"+arrclass_info);

      setupitemInfo(arrclass_info);
      
   });
         
   function setupitemInfo(e){
      arrclass_info = e;
      console.log(arrclass_info);
      //데이터 세팅 영역
      // var data = JSON.parse(e);

      

         

   }   
		
			
	
	
</script>   

  <!-- slide styles -->
  <style>
    
    html, body {
      position: relative;
      /* background-color: black; */
    }
    body {
      margin: 0;
      padding: 0;
    }
    .container{
      position: relative;
    }
    /* The Modal (background) */
    .modalback{
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 99; /* Sit on top */

        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
      }
        /* Modal Content/Box */
        .modal-content{
            position: fixed;
            margin: 0 auto; /* 15% from the top and centered */
            width: 70%; /* Could be more or less, depending on screen size */
            max-width: 500px;
            background-color: rgba(255, 255, 255, 1);

						position: absolute; /* */
						left: 50%;
						top: 50%;
						transform: translate(-50%, -50%);
						width: 48%;
        }
        .modal-content>.md_desc{
            width: 100%;
            text-align: center
        }
        .modal-content>.md_desc img{
          width: 100%;
        }
        .modal-content>.md_bottom{
            display: flex;
            justify-content: space-between;
            line-height: 20px;
        }
        .modal-content>.md_bottom>.expireForHour{
            display: inline-block;
        }
        .modal-content>.md_bottom>.close_md{
            display: inline-block;
            cursor:pointer;
            text-align: center;
        }    
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      width: 100%;
      height: 100%;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .sildeimg{
      width: 100%;
    }
   
  </style>






<!-- The Modal -->
<div id="mainModal" class="modalback">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="md_desc"><img src="./images/modalex.png" alt=""></div>
    
    <div class="md_bottom">
      <div class="expireForHour">
        <label>
          <input type="checkbox" name="expireForHour" value="24" id="expireForHour"> 1시간 동안 보지 않기
        </label>
      </div>
      
      <div class="close_md">
        <span class="pop_bt">[닫기]</span>
      </div>
    </div>
    <!-- end of modal bottom -->
        
  </div>
  <!-- end of modal content -->
</div>

<div id="section">

  <div class="container">

    <div class="article_slide">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide sildeimg01"><img class="sildeimg" src="./images/big_01.jpg"></div>
          <div class="swiper-slide sildeimg02"><img class="sildeimg" src="./images/big_02.jpg"></div>
          <div class="swiper-slide sildeimg03"><img class="sildeimg" src="./images/big_03.jpg"></div>
          <div class="swiper-slide sildeimg04"><img class="sildeimg" src="./images/big_04.jpg"></div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <!-- End of article_slide -->

    <div class="article_ arrive">
      <h2 onclick="gotoType()">new arrivals</h2>
      <div class="itemrows">

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>

      
     </div>

    </div>
    <!-- End of article_arrive -->
    <div class="morebox">
      <div id="centerline"></div>
   </div>     
    
    
    <div class="article_ type1">
      <h2 onclick="changePage(1)">top</h2>
      <div class="itemrows">
          
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        
       </div>
    <!-- 더보기 -->
    <div class="morebox">
        <div id="centerline"></div>
        <div id="textbox">
            <span onclick="changePage(1)">
                <span class="itemtype">Top</span> <span class="moretext">더 보기</span>
            </span>
            </div>
        </a>
    </div>
    <!-- 더보기 끝 -->
    </div>
    <!-- End of article_type1 -->

    <div class="article_ type2">
      <h2 onclick="changePage(2)">bottom</h2>
      <div class="itemrows">

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        
       </div>
    <!-- 더보기 -->
    <div class="morebox">
        <div id="centerline"></div>
        <div id="textbox">
            <span onclick="changePage(2)">
                <span class="itemtype">Bottom</span> <span class="moretext">더 보기</span>
            </span>
        </div>
    </div>
    <!-- 더보기 끝 -->
    </div>
    <!-- End of article_type2 -->

    
    <div class="article_ type3">
      <h2 onclick="changePage(3)">outer</h2>
      <div class="itemrows">

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        
       </div>
    <!-- 더보기 -->
    <div class="morebox">
        <div id="centerline"></div>
        <div id="textbox">
            <span onclick="changePage(3)">
                <span class="itemtype">Outer</span> <span class="moretext">더 보기</span>
            </span>
        </div>
    </div>
    <!-- 더보기 끝 -->       
    </div>
    <!-- End of article_type3 -->
    
    
    <div class="article_ type4">
      <h2 onclick="changePage(4)">one piece</h2>
      <div class="itemrows">

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        
       </div>
    <!-- 더보기 -->
    <div class="morebox">
        <div id="centerline"></div>
        <div id="textbox">
            <span onclick="changePage(4)">
                <span class="itemtype">One Piece</span> <span class="moretext">더 보기</span>
            </span>
        </div>
    </div>
    <!-- 더보기 끝 -->
  </div>
    <!-- End of article_type4 -->

    <div class="article_ type5">
      <h2 onclick="changePage(5)">shoes</h2>
      <div class="itemrows">

        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
          </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        <div class="item">
          <div id="imagebox" onclick="goShopPage(this)">
            <input type="hidden" class="vals">
            <img class="itemimg" src="./images/loadimg.png" alt="">

						<div class="caption">
							<div class="btn-secondary like-review">
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</div>
            </div>            
            
          </div>
          <span class="text"><strong class="itemname">None</strong></span>
          <span class="text itemprice"> - </span>
          <span class="text"><strong class="itemshop">None</strong></span>
        </div>
  
        
       </div>
    <!-- 더보기 -->
    <div class="morebox">
        <div id="centerline"></div>
        <div id="textbox">
            <span onclick="changePage(5)">
                <span class="itemtype">Sheos</span> <span class="moretext">더 보기</span>
            </span>
        </div>
    </div>
    <!-- 더보기 끝 -->
    </div>
    <!-- End of article_type5 -->

</div>
<!-- end of container -->

</div>

<div id="footer">
  <p>&copy; 2019 MOMOA Project</p>
</div> 
			
</div>

<script>
// Modal Popup******************************************************************************************    
 
    if($.cookie('b') == 'hidden'){
      $('#mainModal').hide();
    }else{
      $('#mainModal').show();
    }
    
    if($.cookie('b') == 'hidden'){
      $('#mainModal').hide();
    }else{
      $('#mainModal').show();
    }
    
    //닫기버튼을 눌렀을 때
    $('.close_md').click(function() {
      
      //띄우지 않기 체크여부
      var chkd= $("#expireForHour").is(":checked");
      if(chkd){
        //테스트용 - 초 단위
        var date = new Date();
        date.setTime(date.getTime() + ( 60 * 60 * 1000));
        $.cookie('b', 'hidden', {  expires: date });
        
        // $.cookie('mainModal', 'hidden', {expires : 1});
      }
      $('#mainModal').hide();
    
    });     

// Swiper JS*******************************************************************************************
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,

      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

//item 설정********************************************************************************************

$(function(){


//array객체로
var item_array=JSON.parse(arrclass_info);

    //최신순 정렬
    item_array=item_array.sort(function(a,b){
      return parseFloat(b.date) - parseFloat(a.date);
    });

    var cnt0=0;
    var cnt1=0;
    var cnt2=0;
    var cnt3=0;
    var cnt4=0;
    var cnt5=0;

  for(var i=0 ; i<item_array.length; i++){
    var item=item_array[i];
   
    if(item.visible==="Y" && cnt0<4 ){
      $('.arrive').find('.vals')[cnt0].value=item.url;
      $('.arrive').find('.itemimg')[cnt0].src=item.filepath;
      $('.arrive').find('.itemname')[cnt0].innerHTML=item.name;
      $('.arrive').find('.itemprice')[cnt0].innerHTML=item.price;
      $('.arrive').find('.itemshop')[cnt0].innerHTML=item.shopname;
      cnt0++;
    }
    
    if(item.visible==="Y" && item.type ==="top" && cnt1<4){
      $('.type1').find('.vals')[cnt1].value=item.url;
      $('.type1').find('.itemimg')[cnt1].src=item.filepath;
      $('.type1').find('.itemname')[cnt1].innerHTML=item.name;
      $('.type1').find('.itemprice')[cnt1].innerHTML=item.price;
      $('.type1').find('.itemshop')[cnt1].innerHTML=item.shopname;

      cnt1++;
    }else if(item.visible==="Y" && item.type ==="bottom" && cnt2<4){
      $('.type2').find('.vals')[cnt2].value=item.url;
      $('.type2').find('.itemimg')[cnt2].src=item.filepath;
      $('.type2').find('.itemname')[cnt2].innerHTML=item.name;
      $('.type2').find('.itemprice')[cnt2].innerHTML=item.price;
      $('.type2').find('.itemshop')[cnt2].innerHTML=item.shopname;
      cnt2++;
    }else if(item.visible==="Y" && item.type ==="outer" && cnt3<4){
      $('.type3').find('.vals')[cnt3].value=item.url;
      $('.type3').find('.itemimg')[cnt3].src=item.filepath;
      $('.type3').find('.itemname')[cnt3].innerHTML=item.name;
      $('.type3').find('.itemprice')[cnt3].innerHTML=item.price;
      $('.type3').find('.itemshop')[cnt3].innerHTML=item.shopname;
      cnt3++;
    }else if(item.visible==="Y" && item.type ==="onepiece" && cnt4<4){
      $('.type4').find('.vals')[cnt4].value=item.url;
      $('.type4').find('.itemimg')[cnt4].src=item.filepath;
      $('.type4').find('.itemname')[cnt4].innerHTML=item.name;
      $('.type4').find('.itemprice')[cnt4].innerHTML=item.price;
      $('.type4').find('.itemshop')[cnt4].innerHTML=item.shopname;
      cnt4++;
    }else if(item.visible==="Y" && item.type ==="shoes" && cnt5<4){
      $('.type5').find('.vals')[cnt5].value=item.url;
      $('.type5').find('.itemimg')[cnt5].src=item.filepath;
      $('.type5').find('.itemname')[cnt5].innerHTML=item.name;
      $('.type5').find('.itemprice')[cnt5].innerHTML=item.price;
      $('.type5').find('.itemshop')[cnt5].innerHTML=item.shopname;
      cnt5++;
    }

}


});



//hover-wishlist***************************************************************************************

    var isclicked=-1;

    $('.like-review').on("click",  function(e){
      
      e.stopPropagation();


      if(isclicked<0){
        $(this).html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $(this).children('.fa-heart').addClass('animate-like');
        

        //alert("좋아요");
        // 위시리스트 추가
        addWish();      
        isclicked=-isclicked;

      }else if(isclicked>0){
        $(this).html('<i class="fa fa-heart-o" aria-hidden="true"></i>');

        //위시리스트 제거
        removeWish();
        isclicked=-isclicked;

      }
    });


 
  // 좋아요 버튼 누른 해당 아이템을 Wish List에 저장
  function addWish(){
      
  }

  // 좋아요 버튼 누른 해당 아이템을 Wish List에 삭제
  function removeWish(){

  }    
  
  //.itemlink인 요소를 누르면 해당 아이템의 상세 페이지로 이동
  function goShopPage(element){
   
    var e= $(element).children().first();
    var url=e.val();
    //alert(url)
    // var url=$(element).firstChild.
    window.open(url);
  }

  </script>

	</body>
</html>


