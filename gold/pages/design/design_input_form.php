<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gold</title>

  <!-- favicon link -->
  <link rel="apple-touch-icon" href="/gold/img/favicon.ico">
  <link rel="icon" href="/gold/img/favicon.ico">

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

        <!-- design input contents form -->
        <div class="designInputForm webDesigninput">
          <form action="/gold/php_process/pages/design_insert.php" method="post" name="design_form" enctype="multipart/form-data">
            <div class="titleSer clear">
              <p class="title_input">
                <label for="title">Title</label>
                <input type="text" placeholder="Title Here" id="title" name="design_title">
              </p>
              <p class="serial_input">
                <label for="title">SerialNo.</label>
                <input type="text" placeholder="serialNo. Here" id="serial" name="design_serial">
              </p>
              <p class="client_input">
                <label for="title">Client</label>
                <input type="text" placeholder="Client Here" id="client" name="design_client"></p>
            </div><!-- end of title, serial, client -->
            <div class="design_desc uploadDesc">
              <textarea placeholder="Design Description Here.." name="design_desc"></textarea>
            </div>
            <!-- image upload box -->
            <div class="uploadImgs clear">
              <div class="uploadBox img1">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Main Image">
                  <label for="mainImage">SELECT IMAGE</label>
                  <input type="file" id="mainImage" class="uploadHidden" name="main">
                </div>
                <div class="img1_box imgWrap">
                  <img id="img1">
                </div>
              </div>
              <div class="uploadBox img2">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Sub Image">
                  <label for="subImage">SELECT IMAGE</label>
                  <input type="file" id="subImage" class="uploadHidden" name="sub">
                </div>
                <div class="img2_box imgWrap">
                  <img id="img2">
                </div>
              </div>
              <div class="uploadBox img3">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Thumbnail Image(400 * 400)">
                  <label for="thumbImage">SELECT IMAGE</label>
                  <input type="file" id="thumbImage" class="uploadHidden" name="thumbnail">
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
    if(!document.design_form.design_title.value){
      alert('제목을 입력해 주세요');
      document.design_form.design_title.focus();
      return;
    }
    if(!document.design_form.design_serial.value){
      alert('시리얼넘버를 입력해 주세요');
      document.design_form.design_serial.focus();
      return;
    }
    if(!document.design_form.design_client.value){
      alert('업체명을 입력해 주세요');
      document.design_form.design_client.focus();
      return;
    }
    if(!document.design_form.design_desc.value){
      alert('내용을 입력해 주세요');
      document.design_form.design_desc.focus();
      return;
    }
    if(!document.design_form.main.value){
      alert('메인 이미지를 올려주세요');
      return;
    }
    if(!document.design_form.sub.value){
      alert('서브 이미지를 올려주세요');
      return;
    }
    if(!document.design_form.thumbnail.value){
      alert('썸네일 이미지를 올려주세요');
      return;
    } else {
      document.design_form.submit();
    }
  });
</script>
</html>