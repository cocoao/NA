<?php
  $qna_id=$_GET['id'];
  $qna_tilte=nl2br($_POST['qnaTitle']);
  $qna_tilte=addslashes($qna_tilte);
  $qna_txt=nl2br($_POST['qnaTxt']);
  $qna_txt=addslashes($qna_txt);
  $qna_reg=date('Y-m-d');
  $qna_hit=0;

  include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
  $sql = "insert into gold_qna(GOLD_QNA_id,GOLD_QNA_tit,GOLD_QNA_con,GOLD_QNA_reg,GOLD_QNA_hit)values('$qna_id', '$qna_tilte', '$qna_txt', '$qna_reg', '$qna_hit')";

  mysqli_query($dbConn, $sql);

  echo "
  <script>
    location.href = '/gold/pages/qna/qna.php';
  </script>
  "
?>