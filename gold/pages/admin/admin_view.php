<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gold</title>
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- main style css link -->
  <link rel="stylesheet" href="/gold/css/style.css">

  <!-- design form style css -->
  <link rel="stylesheet" href="/gold/css/design_web_app.css">
  <link rel="stylesheet" href="/gold/css/qna.css">
  <link rel="stylesheet" href="/gold/css/admin.css">

  <!-- animation css link -->
  <link rel="stylesheet" href="/gold/css/animation.css">
  
  <!-- media query style css link -->
  <link rel="stylesheet" href="/gold/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/gold/js/custom.js" defer></script>
  <script src="/gold/js/web_design_page.js" defer></script>
</head>

<body>
  <div class="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
    <section class="contents qna hasTitle">
      <div class="center">
        <!-- contact title style -->
        <div class="title">
          <h2>Message Details</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <a href="#" class="subLink">View More Details</a>
          </div>
        </div><!--contact end of common title -->

        <?php
        $msg_num= $_GET['num'];
        include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
        $sql = "select * from gold_msg where GOLD_MSG_num=$msg_num";
        $msg_result=mysqli_query($dbConn,$sql);
        $msg_row=mysqli_fetch_array($msg_result);

        $msg_name = $msg_row['GOLD_MSG_name'];
        $msg_tit = $msg_row['GOLD_MSG_tit'];
        $msg_con = $msg_row['GOLD_MSG_con'];
        $msg_reg = $msg_row['GOLD_MSG_reg'];
        $msg_email = $msg_row['GOLD_MSG_email'];
        ?>

        <!-- qna_view.php 페이지와 동일한 클래스로 작성 -->
        <div class="qnaBoxes deweBoxes adminView qnaView">
          <div class="writerInfo">
            <p>From <?=$msg_name?> NO. <?=$msg_num?> / <?=$msg_reg?> / <?=$msg_email?></p>
          </div>
          <div class="writeBox clear">
            <div class="writeForm">
              <p class="adminTitInput">
                <label for="adminTitle">제목</label>
                <input type="text" name="ansTitle" id="ansTitle" placeholder="제목을 입력해 주세요" value="<?=$msg_tit?>">
              </p>
              <p class="adminTxtInput">
                <textarea name="ansTxt" placeholder="내용을 입력해 주세요"><?=$msg_con?></textarea>
              </p>
            </div>
          </div><!--end of write box-->
          <div class="adminViewBtns">
            <a href="mailto:<?=$msg_email?>">메일쓰기</a>
            <a href="/gold/php_process/pages/msg_delete.php?num=<?=$msg_num?>">삭제</a>
            <a href="javascript:history.back()">뒤로가기</a>
          </div>
        </div>
      </div><!--end of center-->
    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php" ?>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
  </div>
</body>
</html>