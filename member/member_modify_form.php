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
</head>
<body>
  <!--HEADER-->
  <header>
  <?php include '../header.php' ?>
 </header>

 <div id="container">
	<div class="find_mem_wrap mem_wrap2">
		<div class="find_mem_inner">
			<form id="frmJoin" method="post">
				<fieldset>	
			        <strong class="find_mem_ttl" style="margin-top:100px;">개인정보 확인 및 수정</strong>
						<section class="renew_joinform_v2">
							<div class="renew_input_box id_chk">
                                <strong>아이디</strong>
								    <label for="user_id" class="hid">아이디</label>
                                    <input type="text" name="user_id" id="user_id" placeholder="아이디" maxlength="13">
							</div>
						</section>
						<section class="renew_joinform_v2">
							<div class="renew_input_box gender_chk">
								<strong>이름<span class="type_green">(필수)</span></strong>
									<input type="text" id="user_nm" name="user_nm" value="홍길동" required="required">
							</div>
							<div class="renew_input_box birth_chk">
								<strong>생년월일<span class="type_green">(필수)</span></strong>
								<div class="select_birth_box">
									<div class="birth_select year">
						                <select id="birth_year" name="birth_year" required="required">
                                            <option value="">선택</option>
                                        </select>
									</div>
									<div class="birth_select month">
							            <select id="birth_month" name="birth_month" required="required">
                                            <option value="">선택</option>
                                        </select>
									</div>
									<div class="birth_select day">
						                <select id="birth_day" name="birth_day" required="required">
                                            <option value="">선택</option>
                                        </select>
									</div>
								</div>
							</div>
							<div class="renew_input_box phone_chk">
								<strong>휴대폰번호<span class="type_green">(필수)</span></strong>
								<input type="text" name="phone" id="phone" value="010-0000-0000">
							</div>
							<div class="renew_input_box mail_chk">
                                <strong>메일<span class="type_green">(필수)</span></strong>
								<input type="text" name="email" id="email" placeholder="E-mail을 입력하세요." required="required">
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
                                    <input type="text" name="user_nick_nm" id="user_nick_nm" placeholder="닉네임 입력">
								</div>	
							</section>
							<p class="modify_txt2">
							<b>＊ 선택항목은 입력하지 않거나 동의하지 않아도 회원 가입이 가능합니다.</b>
							</p>
							<p class="btn_mem_login"><a href="javascript:void(0);">정보수정</a></p>
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