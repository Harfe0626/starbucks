<?php
$con = mysqli_connect("localhost", "user1", "12345", "sample"); 

$id   = $_POST["id"];
$name = $_POST["name"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$phone = $_POST["phone"];
$email  = $_POST["email"];
$nick = $_POST["nick"];

$sql = "update members set name='$name', year='$year', month='$month', day='$day', phone='$phone', email='$email', nick='$nick'"; 
$sql .= " where id='$id'";
mysqli_query($con, $sql);
mysqli_close($con);
echo "
<script>
    location.href = '../index.php'; 
</script>
";
?>