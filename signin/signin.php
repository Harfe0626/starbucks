<?php
$id = $_POST["id"]; 
$pass = $_POST["pw"];

$con = mysqli_connect("localhost", "user1", "12345", "sample"); 
$sql = "select * from members where id='$id'";
$result = mysqli_query($con, $sql); 
$num_match = mysqli_num_rows($result); 
if (!$num_match) 
{
   echo(" 
   <script>
   window.alert('등록되지 않은 아이디입니다!')
   history.go(-1)
   </script>
   "); 
}
else 
{
   $row = mysqli_fetch_array($result); 
   $db_pass = $row["pw"];
   mysqli_close($con);
   if ($pass != $db_pass) 
   {
      echo(" 
      <script>
      window.alert('비밀번호가 틀립니다!')
      history.go(-1)
      </script>
      ");
      exit; 
   }
   else
   {
      session_start(); 
      $_SESSION["userid"] = $row["id"];
      $_SESSION["username"] = $row["name"];
      $_SESSION["useryear"] = $row["year"];
      $_SESSION["usermonth"] = $row["month"];
      $_SESSION["userday"] = $row["day"];
      $_SESSION["userphone"] = $row["phone"];
      $_SESSION["useremail"] = $row["email"];
      $_SESSION["usernick"] = $row["nick"];
      $_SESSION["userlevel"] = $row["level"];
      $_SESSION["userpoint"] = $row["point"];
      echo("
      <script> 
        window.alert('$id 님 환영합니다')
        location.href = '../index.php'; 
      </script>
      ");
   }
}
?>