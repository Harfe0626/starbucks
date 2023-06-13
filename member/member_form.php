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
	<div class="member">
		<div class="member_inner">
			<form action="member_insert.php" method="post">
				<fieldset>	
			        <h2 class="member_title">회원가입</h2>
						<section class="member_block">
					        <div class="sally">
					            <img src="../images/icon_find_sally.png" alt="">
					        </div>
							<p class="member_text">회원정보를 입력해 주세요.</p>
							<div class="input_text id">
                                <input type="text" name="id" id="id" required placeholder="아이디">
							</div>
							<div class="input_text pw">
                                <input type="password" id="pw" name="pw" required placeholder="비밀번호">
							</div>
							<div class="input_text check_pw">
                                <input type="password" id="check_pw" name="check_pw" required placeholder="비밀번호 확인">
							</div>
						</section>
						<section class="member_block">
							<div class="input_text name">
								<h2>이름<span class="type_green">(필수)</span></h2>
								<input type="text" id="name" name="name" required placeholder="홍길동">
							</div>
							<div class="input_text birth">
								<h2>생년월일<span class="type_green">(필수)</span></h2>
								<div class="birth_text">
									<div class="birth_input year">
										<input type="text" name="year" id="year" required placeholder="XXXX">
									</div>
									<div class="birth_input month">
										<input type="text" name="month" id="month" required placeholder="XX">
									</div>
									<div class="birth_input day">
										<input type="text" name="day" id="day" required placeholder="XX">
									</div>
								</div>
							</div>
							<div class="input_text phone">
								<h2>휴대폰번호<span class="type_green">(필수)</span></h2>
								<input type="text" name="phone" id="phone" placeholder="010-0000-0000">
							</div>
							<div class="input_text email">
                                <h2>메일<span class="type_green">(필수)</span></h2>
								<input type="text" name="email" id="email" required placeholder="E-mail을 입력하세요.">
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
                                    <input type="text" name="nick" id="nick" placeholder="닉네임 입력">
								</div>	
						</section>
							<p class="let_know_text">
							<b>＊ 선택항목은 입력하지 않거나 동의하지 않아도 회원 가입이 가능합니다.</b>
							</p>
							<button class="signin_button" 
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