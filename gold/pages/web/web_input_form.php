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
          <h2>Design Collection</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <!-- <a href="#" class="subLink">View More Details</a> -->
          </div>
        </div><!--contact end of common title -->

        <!-- design input contents form -->
        <div class="webInputForm webDesigninput">
          <form action="/gold/php_process/pages/web_insert.php" method="post" name="web_form" enctype="multipart/form-data">
            <div class="titleSer clear">
              <p class="title_input">
                <label for="title">Title</label>
                <input type="text" placeholder="Title Here" id="title" name="web_title">
              </p>
              <p class="serial_input">
                <label for="title">SerialNo.</label>
                <input type="text" placeholder="serialNo. Here" id="serial" name="web_serial">
              </p>
              <p class="client_input">
                <label for="title">Client</label>
                <input type="text" placeholder="Client Here" id="client" name="web_client"></p>
              <p class="domain_input">
                <label for="title">Domain</label>
                <input type="text" placeholder="Domain Here" id="domain" name="web_domain"></p>
            </div><!-- end of title, serial, client -->
            <div class="web_desc uploadDesc">
              <textarea placeholder="Website Description Here.." name="web_desc"></textarea>
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
                  <input class="uploadName" placeholder="Mobile Image">
                  <label for="subImage">SELECT IMAGE</label>
                  <input type="file" id="subImage" class="uploadHidden" name="mobile">
                </div>
                <div class="img2_box imgWrap">
                  <img id="img2">
                </div>
              </div>
              <div class="uploadBox img3">
                <div class="inputControll">
                  <input class="uploadName" placeholder="Thumbnail Image(800 * 400)">
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
    if(!document.web_form.web_title.value){
      alert('제목을 입력해 주세요');
      document.web_form.web_title.focus();
      return;
    }
    if(!document.web_form.web_serial.value){
      alert('시리얼넘버를 입력해 주세요');
      document.web_form.web_serial.focus();
      return;
    }
    if(!document.web_form.web_client.value){
      alert('업체명을 입력해 주세요');
      document.web_form.web_client.focus();
      return;
    }
    if(!document.web_form.web_domain.value){
      alert('도메인을 입력해 주세요');
      document.web_form.web_domain.focus();
      return;
    }
    if(!document.web_form.web_desc.value){
      alert('내용을 입력해 주세요');
      document.web_form.web_desc.focus();
      return;
    }
    if(!document.web_form.main.value){
      alert('메인 이미지를 올려주세요');
      return;
    }
    if(!document.web_form.mobile.value){
      alert('모바일 이미지를 올려주세요');
      return;
    }
    if(!document.web_form.thumbnail.value){
      alert('썸네일 이미지를 올려주세요');
      return;
    } else {
      document.web_form.submit();
    }
  });
</script>
</html>