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

    <form method="POST" action="notice_modify_action.php?num=<?=$num?>&page=<?=$page?>">
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
            <div class="button_notice">
                <p class="button_notice_list"> 
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