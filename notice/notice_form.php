<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Starbucks Coffee Korea</title>

  <!--파비콘-->
  <link rel="icon" href="../favicon.png" />
  <!--브라우저 스타일 초기화-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css" />
  <!--Style Sheets-->
  <link rel="stylesheet" href="../css/common.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/signin.css" />
  <link rel="stylesheet" href="../css/notice.css" />
  <script defer src="../js/common.js"></script>
    <?php
        $con = mysqli_connect("localhost", "user1", "12345", "sample");
        $query = "select * from board_notice order by num desc";   
        $result = mysqli_query($con, $query);
        $total = mysqli_num_rows($result);
    ?>
</head>
<body>
  <!--HEADER-->
<header>
  <?php include '../header.php' ?>
</header>
  
<section class="notice"> 
    <div class="subtitle">
        <div class="subtitle_top">
            <h2><a href="./notice_form.php"><img src="../images/notice_tit.jpg"></a></h2>
            <ul class="map">
                <li><a href="../index.php"><img src="../images/icon_home.png"></a></li>
                <li><img class="next" src="../images/icon_arrow.png"></li>
                <li><a>WHAT'S NEW</a></li>
                <li><img class="next" src="../images/icon_arrow.png"></li>
                <li><a href="./notice_form.php">공지사항</a></li>
            </ul>
        </div>
    </div>

    <div id="container">
        <div class="notice_wrap">
            <div class="notice_search_wrap">
	            <p>
                    <input type="text" placeholder="검색어를 입력해 주세요."> 
                    <a>검색</a>
                </p>
	        </div>  
            <table summary="공지사항" class="notice_tb">
                <colgroup>
                    <col width="5.5%">
                    <col width="75.5%">
                    <col width="10%">
                    <col width="*">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">NO</th>
                        <th scope="col">제목</th>
                        <th scope="col" style="text-align: center;">날짜</th>
                        <th scope="col" style="text-align: center;">조회수</th>
                    </tr>
                    <?php 
                        $con = mysqli_connect("localhost", "user1", "12345", "sample");
                        $query = "select * from board_notice order by num desc";   
                        $result = mysqli_query($con, $query);
                        $total_record = mysqli_num_rows($result);

                        if (isset($_GET["page"]))
		                    $page = $_GET["page"]; //1,2,3,4,5
	                    else
		                    $page = 1;

			    	    	$scale = 10;

                        // 전체 페이지 수($total_page) 계산 
                        if ($total_record % $scale == 0)     
                            $total_page = floor($total_record/$scale);      
                        else
                            $total_page = floor($total_record/$scale) + 1; 
                    
                        // 표시할 페이지($page)에 따라 $start 계산  
                        $start = ($page - 1) * $scale;      

                        $number = $total_record - $start;
                    ?>
                </thead>
                <tbody id="notice">
                <?php
                   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
                   {
                      mysqli_data_seek($result, $i);
                      // 가져올 레코드로 위치(포인터) 이동
                      $row = mysqli_fetch_array($result);
                      // 하나의 레코드 가져오기
                      $num         = $row["num"];
                      $subject     = $row["subject"];
                      $regist_day  = $row["regist_day"];
                      $hit         = $row["hit"];
                ?>
                <tr>
                    <td width="5.45454%" style="text-align: center;"><?=$number?></td>
                    <td width="74.5454%">
                        <a href="notice_view.php?num=<?=$num?>&page=<?=$page?>">
                            <?=$subject?>
                        </a>
                    </td>
                    <td width="10.90909%" style="text-align: center;"><?=$regist_day?></td>
                    <td width="*" style="text-align: center;"><?=$hit?></td>
                </tr>
                <?php
                          $number--;
                   }
                   mysqli_close($con);
                ?>
                </tbody>
            </table>
            <!-- 글쓰기 버튼 -->
            <div class="button_notice">
            <p class="button_notice_list">
            <?php if(!$userid) 
            { ?>
                <a href="../signin/signin.php">글쓰기</a>
                <?php 
            } 
            else 
            { ?>
                <a href="notice_write.php">글쓰기</a>
                <?php 
            } ?>
            </p>
		    </div>
        <!-- 글쓰기 버튼 end-->
        </div>
        <!-- 공지사항 end -->
        <!-- 페이지 관리 -->
        <div id="page_num" style="text-align: center; margin: 30px 0">
        <?php
            if ($total_page>=2 && $page >= 2)	
            {
                $new_page = $page-1;
                echo "<a href='notice_form.php?page=$new_page'>◀ 이전</a>";
            }		
            else 
                echo "&nbsp;";

            // 게시판 목록 하단에 페이지 링크 번호 출력
            for ($i=1; $i<=$total_page; $i++)
            {
                if ($page == $i)     // 현재 페이지 번호 링크 안함
                {
                    echo "<b> $i </b>";
                }
                else
                {
                    echo "<a href='notice_form.php?page=$i'> $i </a>";
                }
            }
            if ($total_page>=2 && $page != $total_page)		
            {
                $new_page = $page+1;	
                echo "<a href='notice_form.php?page=$new_page'>다음 ▶</a>";
            }
            else 
                echo "&nbsp;";
        ?>
		</div>	
        <!-- 페이지 관리 end-->
    </div>
    <!-- container end -->
</section>
  <!--FOOTER-->
  <footer>
  <?php include '../footer.html' ?>
  </footer>
</body>
</html>