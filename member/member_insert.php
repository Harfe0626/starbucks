<?php
    $id   = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $phone = $_POST["phone"];
    $email  = $_POST["email"];
    $nick = $_POST["nick"];
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    if(!$con)
    echo "not connect";

	$sql = "insert into members(id, pw, name, year, month, day, phone, email, nick, regist_day, level, point) ";
	$sql .= "values('$id', '$pw', '$name', '$year', '$month', '$day', '$phone','$email', '$nick', '$regist_day', 9, 0)";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = '../index.php';
	      </script>
	  ";
?>