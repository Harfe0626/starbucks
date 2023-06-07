<<<<<<< HEAD
<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
echo("
<script>
    window.alert('로그아웃 되었습니다')
    location.href = '../index.php';
</script>
");
=======
<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
echo("
<script>
    window.alert('로그아웃 되었습니다')
    location.href = '../index.php';
</script>
");
>>>>>>> 560fe9564a85c30769c0f7075f7f42a0747970d1
?>