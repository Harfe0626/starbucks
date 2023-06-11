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
  <script>
        function check_input()
        {
            var pw = document.getElementById("pw").value;
            var check_pw = document.getElementById("check_pw").value;
            if(pw != check_pw)
            {
                alert('비밀번호가 일치하지 않습니다.');
                history.back();
            }
            else
            {
                document.member_form.submit();
            }
        }
    </script>  
    <script>
        function check_id() 
        {
            var id = document.getElementById("id").value;
            if(id)
            {
                window.open("member_check_id.php?id="+id);
            } 
            else 
            {
                alert("아이디를 입력하세요.");
            }
        } 
        </script>
</head>
<body>
  <!--HEADER-->
  <header>
  <?php include '../header.php' ?>
 </header>

 <div id="container">
	<div class="find_mem_wrap mem_wrap2">
		<div class="find_mem_inner">
			<form id="frmJoin" action="member_insert.php" method="post">
				<fieldset>	
			        <strong class="find_mem_ttl">회원가입</strong>
						<section class="renew_joinform_v2">
					        <div class="find_mem_sally">
					            <img src="../images/icon_find_sally.png" alt="">
					        </div>
							<p class="find_form_txt">회원정보를 입력해 주세요.</p>
							<div class="renew_input_box id_chk">
                                <input type="text" name="id" id="id" required placeholder="아이디">
							</div>
							<div class="renew_input_box pw_chk">
                                <input type="password" id="pw" name="pw" required placeholder="비밀번호">
							</div>
							<div class="renew_input_box pw_chk bd_none">
                                <input type="password" id="check_pw" name="check_pw" required placeholder="비밀번호 확인">
							</div>
						</section>
						<section class="renew_joinform_v2">
							<div class="renew_input_box gender_chk">
								<strong>이름<span class="type_green">(필수)</span></strong>
								<input type="text" id="name" name="name" required placeholder="홍길동">
							</div>
							<div class="renew_input_box birth_chk">
								<strong>생년월일<span class="type_green">(필수)</span></strong>
								<div class="select_birth_box">
									<div class="birth_select year">
										<input type="text" name="year" id="year" required placeholder="XXXX">
									</div>
									<div class="birth_select month">
										<input type="text" name="month" id="month" required placeholder="XX">
									</div>
									<div class="birth_select day">
										<input type="text" name="day" id="day" required placeholder="XX">
									</div>
								</div>
							</div>
							<div class="renew_input_box phone_chk">
								<strong>휴대폰번호<span class="type_green">(필수)</span></strong>
								<input type="text" name="phone" id="phone" placeholder="010-0000-0000">
							</div>
							<div class="renew_input_box mail_chk">
                                <strong>메일<span class="type_green">(필수)</span></strong>
								<input type="text" name="email" id="email" required placeholder="E-mail을 입력하세요.">
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
                                    <input type="text" name="nick" id="nick" placeholder="닉네임 입력">
								</div>	
							</section>
							<p class="modify_txt2">
							<b>＊ 선택항목은 입력하지 않거나 동의하지 않아도 회원 가입이 가능합니다.</b>
							</p>
							<button class="btn_mem_login" 
									type="submit"
									onclick="check_input()"><p>가입하기</p>
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