<meta charset='utf-8'>
<?php

$mem_num = $_GET['num'];
$mem_level = $_POST['level'];
$mem_point = $_POST['point'];

echo $mem_num, $mem_level, $mem_point;


include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';

$sql = "UPDATE gold_mem SET GOLD_mem_level=$mem_level, GOLD_mem_point=$mem_point WHERE GOLD_mem_num = $mem_num";

mysqli_query($dbConn, $sql);

echo"
<script>
  alert('수정이 완료되었습니다')
  location.href='/gold/pages/admin/admin.php';
</script>
";
?>