<<<<<<< HEAD
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

  <!--Twitter Card-->
  <!--https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started-->
  <meta property="twitter:card" content="summary" />
  <meta property="twitter:site" content="Starbucks" />
  <meta property="twitter:title" content="Starbucks Coffee Korea" />
  <meta property="twitter:description" content="스타벅스는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다." />
  <meta property="twitter:image" content="../images/starbucks_seo.jpg" />
  <meta property="twitter:url" content="https://starbucks.co.kr" />

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
  <link rel="stylesheet" href="../css/common.css" />
  <link rel="stylesheet" href="../css/signin.css" />
  <link rel="stylesheet" href="../css/notice.css" />
  <script defer src="../js/common.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
      $("header").load("../header.php");
      $("footer").load("../footer.php");
    });
    </script>
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

    <div id="container">
        <div class="notice_wrap">
            <div class="news_sch_wrap">
	            <p>
                    <label for="sch_bar" class="a11y">검색어</label>
                    <input type="text" name="sch_bar" id="sch_bar" placeholder="검색어를 입력해 주세요."> 
                    <a href="javascript:void(0)" class="newBoardSearchBtn">검색</a>
                </p>
	        </div>  
            <table summary="공지사항" class="notice_tb">
                <caption class="hid">공지사항 번호, 제목, 날짜, 조회수 테이블</caption>
                <colgroup>
                    <col width="5.45454%">
                    <col width="74.5454%">
                    <col width="10.90909%">
                    <col width="*">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">제목</th>
                        <th scope="col">날짜</th>
                        <th scope="col">조회수</th>
                    </tr>
                </thead>
                <tbody id="notice">

                </tbody>
            </table>
                    <ul class="m_notice_list" id="m_notice_list">
					</ul>
                    <div class="news_pagination">
                        <ul class="pager" >
                        </ul>
                    </div>
                </div>
                <!-- 공지사항 end -->
            </div>
            <!-- container end -->

            </section>
  <!--FOOTER-->
  <footer>
  <?php include '../footer.html' ?>
  </footer>
</body>
=======
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

  <!--Twitter Card-->
  <!--https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started-->
  <meta property="twitter:card" content="summary" />
  <meta property="twitter:site" content="Starbucks" />
  <meta property="twitter:title" content="Starbucks Coffee Korea" />
  <meta property="twitter:description" content="스타벅스는 세계에서 가장 큰 다국적 커피 전문점으로, 64개국에서 총 23,187개의 매점을 운영하고 있습니다." />
  <meta property="twitter:image" content="../images/starbucks_seo.jpg" />
  <meta property="twitter:url" content="https://starbucks.co.kr" />

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
  <link rel="stylesheet" href="../css/common.css" />
  <link rel="stylesheet" href="../css/signin.css" />
  <link rel="stylesheet" href="../css/notice.css" />
  <script defer src="../js/common.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
      $("header").load("../header.php");
      $("footer").load("../footer.php");
    });
    </script>
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

    <div id="container">
        <div class="notice_wrap">
            <div class="news_sch_wrap">
	            <p>
                    <label for="sch_bar" class="a11y">검색어</label>
                    <input type="text" name="sch_bar" id="sch_bar" placeholder="검색어를 입력해 주세요."> 
                    <a href="javascript:void(0)" class="newBoardSearchBtn">검색</a>
                </p>
	        </div>  
            <table summary="공지사항" class="notice_tb">
                <caption class="hid">공지사항 번호, 제목, 날짜, 조회수 테이블</caption>
                <colgroup>
                    <col width="5.45454%">
                    <col width="74.5454%">
                    <col width="10.90909%">
                    <col width="*">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">제목</th>
                        <th scope="col">날짜</th>
                        <th scope="col">조회수</th>
                    </tr>
                </thead>
                <tbody id="notice">

                </tbody>
            </table>
                    <ul class="m_notice_list" id="m_notice_list">
					</ul>
                    <div class="news_pagination">
                        <ul class="pager" >
                        </ul>
                    </div>
                </div>
                <!-- 공지사항 end -->
            </div>
            <!-- container end -->

            </section>
  <!--FOOTER-->
  <footer>
  <?php include '../footer.html' ?>
  </footer>
</body>
>>>>>>> 560fe9564a85c30769c0f7075f7f42a0747970d1
</html>