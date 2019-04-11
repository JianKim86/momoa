<?php
    header('Content-Type:text/html; charset=utf-8');
    $conn = mysqli_connect("localhost", "toasthistory", "q1w2e3r4", "toasthistory");

    mysqli_query($conn, "set names utf8");
    
    $sql = "select * from momoa_notice";   
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $myArray[] = $row;
    }
    $jsonData = json_encode($myArray,JSON_UNESCAPED_UNICODE);
   
    // echo("<Script>\n <!--\n history.go(-2)\n -->\n </Script>\n");
?>
<?php include("header.php"); ?>
<!--개인연결-->
		<link rel="stylesheet" type="text/css" media="screen" href="./css/notice.css"> 
<?php include("nav.php"); ?>
		
    <script>
        $(document).ready(function () {            

            $(".notice_table_tr_hidden").click(function () {
                status = $(".table_accrodion_content1").css("display");
                if (status == "none") {
                    $(".table_accrodion_content1").css("display", "");
                    $(".table_accrodion_content_d").html(test);
                } else {
                    $(".table_accrodion_content1").css("display", "none");
                }
            });
        });
    </script>
    
    <div id="section">
        <div class="container">
            <!-- 개인작업영역 -->
        <div class="border_container">
            <div class="morebox">
				<div id="centerline"></div>	
					<div id="textbox">
						<span>
							<span class="itemtype">Momoa</span> <span class="moretext">공지사항</span>
						</span>
					</div>
				</div>
            <div class="notice_table_accordionMenu">
            <table class="notice_table">
                <colgroup class="">
				    <col style="width:75px;">
				    <col style="width:auto;">
				    <col style="width:120px;">
				    <col style="width:120px;">
				    <col style="width:120px;">		
			    </colgroup>
                <thead>
                <tr>
                    <th>NO</th>
                    <th>SUBJECT</th>
                    <th>NAME</th>
                    <th>DATE</th>
                    <th>조회수</th>
                </tr>
                </thead>
                <tbody>
                <tr onclick="click_table()" class="notice_table_tr_hidden">
                    <td>1</td>
                    <td class="notice_table_title">공지사항입니다.</td>
                    <td>관리자</td>
                    <td>2019.04.10</td>
                    <td>100</td>                    
                </tr>
                <tr class="table_accrodion_content1" style="display:none;">
                    <td colspan="5" class="table_accrodion_content_d">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quaerat necessitatibus ex doloribus facere neque ut optio repudiandae aut praesentium eum recusandae fugiat dolorem non minima, sed fuga beatae. Commodi.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quaerat necessitatibus ex doloribus facere neque ut optio repudiandae aut praesentium eum recusandae fugiat dolorem non minima, sed fuga beatae. Commodi.
                    
                    </td>
                </tr>
                <tr onclick="click_table()">
                    <td>2</td>
                    <td class="notice_table_title">이벤트 안내.</td>
                    <td>관리자</td>
                    <td>2019.04.10</td>
                    <td>100</td>
                </tr>                
                <tr onclick="click_table()">
                    <td>3</td>
                    <td class="notice_table_title">안녕하세요.</td>
                    <td>관리자</td>
                    <td>2019.04.10</td>
                    <td>100</td>
                </tr>
                <tr onclick="click_table()">
                    <td>4</td>
                    <td class="notice_table_title">공지사항입니다.</td>
                    <td>관리자</td>
                    <td>2019.04.10</td>
                    <td>100</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
  <?php include("footer.php"); ?>