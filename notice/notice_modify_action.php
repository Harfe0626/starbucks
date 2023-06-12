<?php
$num = $_GET['num'];
$page = $_GET['page'];

$subject = $_POST['subject'];
$content = $_POST['content'];
      
$con = mysqli_connect("localhost", "user1", "12345", "sample");

$URL = "notice_form.php?page=$page"; 

$query = "update board_notice set subject='$subject', content='$content'";
$query .= " where num=$num";
$result = mysqli_query($con, $query);
// $result = $con->query($query);

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