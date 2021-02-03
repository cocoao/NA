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
  <link rel="stylesheet" href="/gold/css/web_design_input.css">

  <!-- animation css link -->
  <link rel="stylesheet" href="/gold/css/animation.css">
  
  <!-- media query style css link -->
  <link rel="stylesheet" href="/gold/css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/gold/js/custom.js" defer></script>
  <script src="/gold/js/design_upload.js"></script>
</head>

<body>
  <div class="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>
    <section class="contents upload hasTitle">
      <div class="center">
        <!-- contact title style -->
        <div class="title">
          <h2>Uproad projects</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <!-- <a href="#" class="subLink">View More Details</a> -->
          </div>
        </div><!--contact end of common title -->

        <!-- app input contents form -->
        <div class="designInputForm webDesigninput">
          <form action="/gold/php_process/pages/app_insert.php" method="post" name="app_form" enctype="multipart/form-data">
            <div class="titleSer clear">
              <p class="title_input">
                <label for="title">Title</label>
                <input type="text" placeholder="Title Here" id="title" name="app_title">
              </p>
              <p class="serial_input">
                <label for="title">SerialNo.</label>
                <input type="text" placeholder="serialNo. Here" id="serial" name="app_serial">
              </p>
              <p class="client_input">
                <label for="title">Client</label>
                <input type="text" placeholder="Client Here" id="client" name="app_client"></p>
            </div><!-- end of title, serial, client -->
            <div class="app_desc uploadDesc">
              <textarea placeholder="Design Description Here.." name="app_desc"></textarea>
            </div>
            <!-- image upload box -->
            <div class="uploadImgs clear">
              <div class="uploadBox appImg img1">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Main Image">
                  <label for="mainImage">SELECT IMAGE</label>
                  <input type="file" id="mainImage" class="uploadHidden" name="app_main">
                </div>
                <div class="img1_box imgWrap">
                  <img id="img1">
                </div>
              </div>
              <div class="uploadBox appImg img2">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Thumbnail Image">
                  <label for="thumbImage">SELECT IMAGE</label>
                  <input type="file" id="thumbImage" class="uploadHidden" name="app_thumbnail">
                </div>
                <div class="thumb_box imgWrap">
                  <img id="thumb">
                </div>
              </div>
            </div><!-- end of image upload box -->
          </form>
        </div><!-- end of design input form -->
        <div class="btns">
          <a href="#" class="commonBtn" id="submitBtn">UPLOAD</a>
        </div>
      </div><!--end of center-->
    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php" ?>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
  </div>
</body>
<script>
  const submitBtn = document.querySelector("#submitBtn");
  submitBtn.addEventListener('click',function(){
    if(!document.app_form.app_title.value){
      alert('제목을 입력해 주세요');
      document.app_form.app_title.focus();
      return;
    }
    if(!document.app_form.app_serial.value){
      alert('시리얼넘버를 입력해 주세요');
      document.app_form.app_serial.focus();
      return;
    }
    if(!document.app_form.app_client.value){
      alert('업체명을 입력해 주세요');
      document.app_form.app_client.focus();
      return;
    }
    if(!document.app_form.app_desc.value){
      alert('내용을 입력해 주세요');
      document.app_form.app_desc.focus();
      return;
    }
    if(!document.app_form.app_main.value){
      alert('메인 이미지를 올려주세요');
      return;
    }
    if(!document.app_form.app_thumbnail.value){
      alert('썸네일 이미지를 올려주세요');
      return;
    } else {
      document.app_form.submit();
    }
  });
</script>
</html>