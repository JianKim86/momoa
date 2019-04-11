<?php include("header.php"); ?>
<link rel="stylesheet" href="./css/wishList.css">
<link rel="stylesheet" href="./js/wishList.js">
<?php include("nav.php"); ?>
<script type="text/javascript">
	
	
</script>  

<div id="section">

<div class="container">
	<!-- 작업영역 -->
	<!-- 더보기 -->
    <div class="morebox">
            <div id="centerline"></div>
            <a> 
                <div id="textbox">
                    <span>
                        <span class="itemtype">WishList</span> <span class="moretext">(2)</span>
                        
                    </span>
                </div>
            </a>
        </div>
        <!-- 더보기 끝 -->
        <p class="wishText"><span class="s_red"> *</span> 위시리스트에 담긴 상품은 7일 동안 보관됩니다.</p> 
    
                
        <!-- 개인 연결 -->
        <div id="wishTitle">
            <!-- <div class="wishListTitle"><h3>Wish List <span id="">(2)</span></h3> -->
               
            </div>

        <table class="table table-hover mt-3">
            <thead>
            <tr>
                <th class="T1">no</th>
                <th class="T2">이미지</th>
                <th class="T3">상품정보</th>
                <th class="T4">삭제</th>
            
            </tr>
            </thead>

            <tbody>
            <tr id="wl">
                <td class="wishNum">1</td>
                <td class="wishThum"><img src="./images/aaa.jpg" alt="상품명" class="thum"></td>
                <td class="wishInfo">
                    <p class="itemName">spring 봄옷 니트 </p> 
                    <p class="itemPrice">20,000원</p> 
                    <button class="btn btn-outline-warning"><a href="http://pak-namae.com/product/detail.html?product_no=18217&cate_no=315&display_group=1">사러가기</a></button>
                    
                </td>
                <td class="tdD"><img onclick="deleteWish()" src="./images/delete.png" alt="삭제" class="delete" ></td>
            </tr>
           

             <tr id="wl">
                <td class="wishNum">2</td>
                <td class="wishThum"><img src="./images/aaa.jpg" alt="상품명" class="thum"></td>
                <td class="wishInfo">
                    <p class="itemName">spring 봄옷 니트 </p> 
                    <p class="itemPrice">20,000원</p> 
                    <button class="btn btn-outline-warning"><a href="http://pak-namae.com/product/detail.html?product_no=18217&cate_no=315&display_group=1">사러가기</a></button>
                </td>
                <td class="tdD"><img onclick="deleteWish()" src="./images/delete.png" alt="삭제" class="delete" ></td>
            </tr>
        </tbody>

            

        </table>

        <hr>

        <ul class="pagination justify-content-center">
            <li class="page-item"><a href="" class="page-link">1</a></li>
            <li class="page-item"><a href="" class="page-link">2</a></li>
            <li class="page-item"><a href="" class="page-link">3</a></li>
            <li class="page-item"><a href="" class="page-link">4</a></li>
            <li class="page-item"><a href="" class="page-link">5</a></li>
            
        </ul>
	
</div>
</div>
<?php include("footer.php"); ?>
