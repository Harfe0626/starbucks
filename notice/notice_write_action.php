<?php
$con = mysqli_connect("localhost", "user1", "12345", "sample") or die("fail");

$subject = $_POST['subject'];           //제목
$content = $_POST['content'];           //내용
$hit = $_POST['hit'];                   //조회수
$date = date('Y-m-d');                  //날짜

$URL = 'notice_form.php';                   //return URL


$query = "INSERT INTO board_notice (num, subject, content, regist_day, hit) 
        values(null, '$subject', '$content', '$date', '$hit')";


$result = $con->query($query);
if ($result) {
?> 
<script>
    alert("<?php echo "게시글이 등록되었습니다." ?>");
    location.replace("<?php echo $URL ?>");
</script>
<?php
} else {
    echo "게시글 등록에 실패하였습니다.";
}

mysqli_close($connect);
?>