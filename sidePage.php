<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" media="screen" href="./css/sidePage.css">
<script src="./js/sidePage.js"></script>
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
      $(".itemtype").text(e.toUpperCase()); ///// 아이템타입 변경

      console.log("e:"+e.toUpperCase());
      if(e !="empty") { <?php $keyType = $_GET["key"]; ?> }
      <?php include("momoadb.php"); ?>
      arrclass_info = '<?php echo $jsonData ?>' ; 

      setupitemInfo(arrclass_info);
   });
         
   function setupitemInfo(e){
      arrclass_info = JSON.parse(e);

       console.log(arrclass_info);
   }   
   
</script>
<div id="section">
<div class="container">
   <!-- 작업영역 -->
   <div class="sdiepage-content">
      <div class="pagetitle">
         <div id="centerline"></div>
         <a> 
            <div id="textbox">
               <span>
                  <span class="itemtype">OUTER</span>
               </span>
            </div>
         </a>
      </div>
            

      <div class="grid-container"> 

         <!-- /////// 그리드 아이템 /////// -->
         <?php 

            $json_array  = json_decode($jsonData, true);
            $elementCount  = count($json_array);

         foreach($json_array as $key=>$value){
               if ($value['visible'] != "Y" ) continue;
            ?>


            <div class="grid-item">
            <div id="hover-div">
                  
               <a id="item-img" onclick="javascript:location.href='<?php echo $value['url']; ?>';">
                  <img src="<?php echo $value['filepath']; ?>">
               </a>
               <div class="caption">
                  <div class="btn-secondary like-review">
                     <i class="fa fa-heart-o" aria-hidden="true"></i>
                  </div>
               </div>
            </div>
               
            <div class="item-info">
               <a><p><strong id="item-name" onclick="javascript:location.href='<?php echo $value['url']; ?>';"><?php echo $value['name']; ?></strong></p></a>
               <p id="item-price"><span><strong><?php echo $value['price']; ?></strong></span></p>
               <a><p><strong id="shop-name" onclick="javascript:location.href='<?php echo $value['url']; ?>';"><?php echo $value['shopname']; ?></strong></p></a>
            </div>
            
            </div>

            <?php

         }

         ?>
               
      </div>
   </div>


</div> <!-- container -->
<?php include("footer.php"); ?>