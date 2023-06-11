<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Starbucks Coffee Korea</title>

  <!--Open Graph-->
  <!--http://ogp.me/-->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Starbucks" />
  <meta property="og:title" content="Starbucks Coffee Korea" />
  <meta property="og:description" content="스타벅스는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다." />
  <meta property="og:image" content="../images/starbucks_seo.jpg" />
  <meta property="og:url" content="https://starbucks.co.kr" />

  <!--파비콘-->
  <!--<link rel="shortcut icon" href="favicon.ico" />-->
  <link rel="icon" href="../favicon.png" />
  <!--브라우저 스타일 초기화-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css" />
  <!--Google Fonts - 나눔고딕-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap" rel="stylesheet" />
  <!--Google Material Icons-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <!--Style Sheets-->
  <link rel="stylesheet" href="../css/common.css" />
  <link rel="stylesheet" href="../css/signin.css" />
  <link rel="stylesheet" href="../css/notice.css" />
  <script defer src="../js/common.js"></script>
  <?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from board_notice where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);

	$subject    = $row["subject"];
	$content    = $row["content"];		

?>
</head>
<body>
  <!--HEADER-->
<header>
  <?php include '../header.php' ?>
</header>
  
<section class="notice">
    <div class="sub_tit_wrap">
        <div class="sub_tit_inner">
            <h2><a href="./notice_form.php"><img src="../images/notice_tit.jpg"></a></h2>
            <ul class="smap">
                 <li><a href="../index.php"><img src="../images/icon_home.png"></a></li>
                <li><img class="arrow" src="../images/icon_arrow.png"></li>
                <li class="en"><a href="javascript:void(0)">WHAT'S NEW</a></li>
                <li><img class="arrow" src="../images/icon_arrow.png"></li>
                <li><a href="./notice_form.php" class="this">공지사항</a></li>
            </ul>
        </div>
    </div>

    <form method="POST" action="notice_modify_action.php">
    <div id="container">
        <div class="notice_wrap">
            <table summary="공지사항" class="notice_tb">
                <colgroup>
                    <col width="*">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">
                            <input type=text name="subject" size=73 value="<?=$subject?>">
                        </th>
                    </tr>
                </thead>
                <tbody id="notice">
                    <td>
                        <textarea name=content cols=75 rows=15><?=$content?></textarea>
                    </td>
                </tbody>
            </table>
            <div class="btn_notice_wrap">
                <p class="btn_notice_list"> 
                    <input type="submit" />
                </p>
            </div>
        </div>
        <!-- 공지사항 end -->
    </div>
    </section>
    <!-- container end -->
</section>
  <!--FOOTER-->
  <footer>
  <?php include '../footer.html' ?>
  </footer>
</body>
</html>