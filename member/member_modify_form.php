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
  <!--Style Sheets-->
  <link rel="stylesheet" href="../css/common.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/signin.css" />
  <link rel="stylesheet" href="../css/member_form.css" />
  <script defer src="../js/common.js"></script>
  <?php
  		$id = $_GET["id"];

        $con = mysqli_connect("localhost", "user1", "12345", "sample");
		$query = "select * from members where id='$id'";  
        $result = mysqli_query($con, $query);

		$rows = mysqli_fetch_array($result);
		$name = $rows["name"];
		$year = $rows["year"];
		$month = $rows["month"];
		$day = $rows["day"];
		$phone = $rows["phone"];
		$email = $rows["email"];
		$nick = $rows["nick"];
    ?>
</head>
<body>
  <!--HEADER-->
  <header>
  <?php include '../header.php' ?>
 </header>

 <div id="container">
	<div class="member">
		<div class="member_inner">
			<form method="post" action="member_modify.php">
				<fieldset>	
			        <h2 class="member_title" style="margin-top:100px;">개인정보 확인 및 수정</h2>
						<section class="member_block">
							<div class="input_text id">
                                <h2>아이디<span class="type_green">(필수)</span></h2>
                                <input type="text" name="id" id="id" readonly value="<?=$id?>">
							</div>
						</section>
						<section class="member_block">
							<div class="input_text name">
								<h2>이름<span class="type_green">(필수)</span></h2>
								<input type="text" id="name" name="name" readonly value="<?=$name?>">
							</div>
							<div class="input_text birth">
								<h2>생년월일<span class="type_green">(필수)</span></h2>
								<div class="birth_text">
									<div class="birth_input year">
										<input type="text" name="year" id="year" required value="<?=$year?>">
									</div>
									<div class="birth_input month">
										<input type="text" name="month" id="month" required value="<?=$month?>">
									</div>
									<div class="birth_input day">
										<input type="text" name="day" id="day" required value="<?=$day?>">
									</div>
								</div>
							</div>
							<div class="input_text phone">
								<h2>휴대폰번호<span class="type_green">(필수)</span></h2>
								<input type="text" name="phone" id="phone" value="<?=$phone?>">
							</div>
							<div class="input_text email">
                                <h2>메일<span class="type_green">(필수)</span></h2>
								<input type="text" name="email" id="email" required value="<?=$email?>">
							</div>	
						</section>
								
						<section class="member_block">
							<figure class="calling_sally">
								<img src="../images/icon_nick_sally.jpg" >
	                        </figure>
                            <p class="nick_text">
								주문하신 제품을 찾으실 때, <br>
								파트너가 등록하신 닉네임을 불러드립니다.
							</p>
								<div class="input_text nick">
                                <h2>닉네임(선택)</h2>
                                    <input type="text" name="nick" id="nick" value="<?=$nick?>">
								</div>	
							</section>
							<p class="let_know_text">
							<b>＊ 선택항목은 입력하지 않거나 동의하지 않아도 회원 가입이 가능합니다.</b>
							</p>
							<button class="signin_button" 
									type="submit"
									onclick="check_input()"><p>정보수정</p>
							</button>
				</fieldset>	
			</form>
		</div>
	</div>
</div>
  <!--FOOTER-->
  <footer>
  <?php include '../footer.html' ?>
  </footer>
</body>
</html>