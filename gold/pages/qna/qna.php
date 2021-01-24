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
        <div class="qnaBoxes deweBoxes">
          <div class="qnaTable">
            <ul class="qnaList">
              <li class="qnaTitle clear">
                <span class="qnaNum">번호</span>
                <span class="qnaId">아이디</span>
                <span class="qnaTit">제목</span>
                <span class="qnaReg">등록일</span>
                <span class="qnaHit">조회수</span>
              </li>
              <li class="qnaContents clear">
                <span class="qnaNum">1</span>
                <span class="qnaId">cocoao</span>
                <span class="qnaTit"><a href="#">첫 게시글</a></span>
                <span class="qnaReg">2021-01-22</span>
                <span class="qnaHit">12</span>
              </li>
              <li class="qnaContents clear">
                <span class="qnaNum">2</span>
                <span class="qnaId">minyang</span>
                <span class="qnaTit"><a href="#">두번째 게시글</a></span>
                <span class="qnaReg">2021-01-22</span>
                <span class="qnaHit">95</span>
              </li>
              <li class="qnaContents clear">
                <span class="qnaNum">3</span>
                <span class="qnaId">hyun</span>
                <span class="qnaTit"><a href="#">세번째 게시글</a></span>
                <span class="qnaReg">2021-01-22</span>
                <span class="qnaHit">89</span>
              </li> 
            </ul>
          </div><!--end of qna table-->
          <div class="searchPaging clear">
            <div class="search">
              <form action="abc.php" name="qnaSearch" class="clear">
                <select name="searchSlect" id="" class="searchSlect">
                  <option value="qnaSearchID">아이디</option>
                  <option value="qnaSearchID">제목</option>
                </select>
                <input type="text" name="qnaSearchInput" placeholder="검색어를 입력해 주세요" class="qnaSearchInput">
                <button type="button" class="qnaSearchBtn"><i class="fa fa-search"></i></button>
              </form>
            </div>
            <div class="paging">
              <span class="firstPg"><i class="fa fa-angle-double-left"></i></span>
              <span class="prevPg"><i class="fa fa-angle-left"></i></span>
              <span class="prevNum active">1</span>
              <span class="prevNum">2</span>
              <span class="nextPg"><i class="fa fa-angle-right"></i></span>
              <span class="lastPg"><i class="fa fa-angle-double-right"></i></span>
            </div>
          </div><!--end of search paging-->
          <div class="writeBox">
              <form action="abc.php" method=post>
              <input type="text" placeholder="제목을 작성해주세요">
              <input type="text" placeholder="질문을 작성해주세요">
              <button class="write">글쓰기</button>
              <button class="write">취소</button>
              </form>
            </div>
        </div>
      </div><!--end of center-->
    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php" ?>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
  </div>
</body>
</html>