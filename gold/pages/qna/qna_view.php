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
          <h2>Your Inquiry</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <a href="#" class="subLink">View More Details</a>
          </div>
        </div><!--contact end of common title -->
        <div class="qnaBoxes deweBoxes qnaView">
          <div class="writerInfo">
            <p>Posted By cocoao NO. 11 / 2021-02-02 / 95 Hits</p>
          </div>
          <div class="writeBox clear">
          <form action="/gold/php_process/pages/qna_insert.php?id=<?=$userid?>" method="post" class="writeForm" name="writeForm">
                <p class="qnaTitInput">
                  <label for="qnaTitle">제목</label>
                  <input type="text" name="qnaTitle" id="qnaTitle" placeholder="제목을 입력해 주세요">
                </p>
                <p class="qnaTxtInput">
                  <textarea name="qnaTxt" placeholder="내용을 입력해 주세요"></textarea>
                </p>
              </form>
              <?php
              if($userid==''){
              ?>
                <button type="submit" class="alertLogin" onclick="plzLogin()">등록</button>  
              <?php
              } else {
              ?>
              <button type="submit" class="">돌아가기</button>
              <button type="submit" class="">수정</button>
              <?php
              }
              ?>
          </div>
        </div>
      </div><!--end of center-->
    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php" ?>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
  </div>
</body>
</html>