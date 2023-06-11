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
  <link rel="stylesheet" href="../css/member_form.css" />
  <script defer src="../js/common.js"></script>
  <?php
        $con = mysqli_connect("localhost", "user1", "12345", "sample");
        $query = "select * from members order by num desc";   
        $result = mysqli_query($con, $query);
        $total = mysqli_num_rows($result);
		$rows = mysqli_fetch_assoc($result);
    ?>
</head>
<body>
  <!--HEADER-->
  <header>
  <?php include '../header.php' ?>
 </header>

 <div id="container">
	<div class="find_mem_wrap mem_wrap2">
		<div class="find_mem_inner">
			<form id="frmJoin" method="post" action="member_modify.php">
				<fieldset>	
			        <strong class="find_mem_ttl" style="margin-top:100px;">개인정보 확인 및 수정</strong>
						<section class="renew_joinform_v2">
							<div class="renew_input_box id_chk">
                                <strong>아이디<span class="type_green">(필수)</span></strong>
                                <input type="text" name="id" id="id" required value="<?php echo $rows['id'] ?>">
							</div>
						</section>
						<section class="renew_joinform_v2">
							<div class="renew_input_box gender_chk">
								<strong>이름<span class="type_green">(필수)</span></strong>
								<input type="text" id="name" name="name" required value="<?php echo $rows['name'] ?>">
							</div>
							<div class="renew_input_box birth_chk">
								<strong>생년월일<span class="type_green">(필수)</span></strong>
								<div class="select_birth_box">
									<div class="birth_select year">
										<input type="text" name="year" id="year" required value="<?php echo $rows['year'] ?>">
									</div>
									<div class="birth_select month">
										<input type="text" name="month" id="month" required value="<?php echo $rows['month'] ?>">
									</div>
									<div class="birth_select day">
										<input type="text" name="day" id="day" required value="<?php echo $rows['day'] ?>">
									</div>
								</div>
							</div>
							<div class="renew_input_box phone_chk">
								<strong>휴대폰번호<span class="type_green">(필수)</span></strong>
								<input type="text" name="phone" id="phone" value="<?php echo $rows['phone'] ?>">
							</div>
							<div class="renew_input_box mail_chk">
                                <strong>메일<span class="type_green">(필수)</span></strong>
								<input type="text" name="email" id="email" required value="<?php echo $rows['email'] ?>">
							</div>	
						</section>
								
						<section class="renew_joinform_v2 bdt_no">
							<figure class="icon_mem_sally">
								<img src="../images/icon_nick_sally.jpg" >
	                        </figure>
                            <p class="mem_nick_txt">
								주문하신 제품을 찾으실 때, <br>
								파트너가 등록하신 닉네임을 불러드립니다.
							</p>
								<div class="renew_input_box user_nick_nm_chk bd_none">
                                <strong>닉네임(선택)</strong>
                                    <input type="text" name="nick" id="nick" value="<?php echo $rows['nick'] ?>">
								</div>	
							</section>
							<p class="modify_txt2">
							<b>＊ 선택항목은 입력하지 않거나 동의하지 않아도 회원 가입이 가능합니다.</b>
							</p>
							<button class="btn_mem_login" 
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