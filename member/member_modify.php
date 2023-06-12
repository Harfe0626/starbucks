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

$URL = "../index.php"; 

$sql = "update members set name='$name', year='$year', month='$month', day='$day', phone='$phone', email='$email', nick='$nick'"; 
$sql .= " where id='$id'";
mysqli_query($con, $sql);
$result = mysqli_query($con, $sql);
mysqli_close($con);

if ($result) {
    ?>
        <script>
            alert("수정되었습니다.");
            location.replace("<?php echo $URL ?>");
        </script>
    <?php } else {
        echo "다시 시도해주세요.";
    }
    ?>