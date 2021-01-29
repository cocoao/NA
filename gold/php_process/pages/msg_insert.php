<meta charset='utf-8'>
<?php
  // $msg_num=$_GET['num'];
  $msg_name=$_POST['msgName'];
  $msg_email=$_POST['msgEmail'];
  $msg_title=nl2br($_POST['msgTit']);
  $msg_title=addslashes($msg_title);
  $msg_txt=nl2br($_POST['msgTxt']);
  $msg_txt=addslashes($msg_txt);
  $msg_reg=date("Y-m-d H:i:s");

  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "insert into gold_msg(GOLD_MSG_name,GOLD_MSG_email,GOLD_MSG_tit,GOLD_MSG_con,GOLD_MSG_reg)values('$msg_name', '$msg_email', '$msg_title', '$msg_txt', '$msg_reg')";

  mysqli_query($dbConn, $sql);

  echo "
  <script>
    alert('메세지가 전송되었습니다')
    location.href = '/gold/index.php'
  </script>
  "
?>