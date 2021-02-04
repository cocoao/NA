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
  <link rel="stylesheet" href="css/style.css">

  <!-- animation css link -->
  <link rel="stylesheet" href="css/animation.css">
  
  <!-- media query style css link -->
  <link rel="stylesheet" href="css/media.css">

  <!-- jQuery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="js/custom.js"></script>
</head>
<body>
  <div class="wrap">
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/header.php" ?>

    <section class="contents arrivals">
      <div class="center clear">
        <!-- title width common style -->
        <div class="title">
          <h2>New arrivals</h2>
          <div class="linkBox">
            <span class="line"></span>
            <a href="#">view all products</a>
          </div>
        </div><!-- end of common title -->

        <?php
        include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
        ?>

        <div class="arrivalBox">
          <div class="arrivalCon">
            <img src="img/new-arrival-1.jpg" alt="">
            <span class="overlay"></span>
            <div class="arrivalTxt">
              <h2>SUMMER</h2>
              <em>COLLECTION</em>
            </div>
          </div>
          <div class="arrivalCon">
            <img src="img/new-arrival-2.jpg" alt="">
            <span class="overlay"></span>
            <div class="best">
              <a href="#">BEST</a>
              <P>QUALITY</P>
            </div>
          </div>
          <div class="arrivalCon">
            <img src="img/new-arrival-3.jpg" alt="">
            <span class="overlay"></span>
            <div class="arrivalTxt">
              <h2>AUTUMN</h2>
              <em>COLLECTION</em>
            </div>
          </div>
        </div>
      </div>
    </section><!-- end of arrivals section -->
    <section class="contents product">
      <div class="center clear">
        <!-- title width common style -->
        <div class="title">
          <h2>Design product</h2>
          <div class="linkBox">
            <span class="line"></span>
            <a href="/gold/pages/design/design.php">view all products</a>
          </div>
        </div><!-- end of common title -->
        <div class="productBox clear">
          <div class="boxLeft">

          <?php
          $sql="select*from gold_de order by GOLD_DE_num desc limit 4";
          $result_design=mysqli_query($dbConn, $sql);
          while($row_result=mysqli_fetch_array($result_design)){
              $design_thumb=$row_result['GOLD_DE_thumb'];
          ?>
            <div class="productImg">
              <img src="/gold/data/design_page/thumb/<?=$design_thumb?>" alt="">
              <span class="outLine"><i class="fa fa-search"></i></span>
            </div>
          <?php
          }
          ?>
          </div>
          <div class="boxRight">
          <?php
          $sql="select*from gold_de order by GOLD_DE_num desc limit 4";
          $result_design=mysqli_query($dbConn, $sql);

          while($row_result=mysqli_fetch_array($result_design)){
          $design_num=$row_result['GOLD_DE_num'];
          $design_tit=$row_result['GOLD_DE_tit'];
          $design_desc=$row_result['GOLD_DE_des'];
          ?>
            <div class="productTxt">
              <div>
                <h2><?=$design_tit?></h2>
                <p><?=$design_desc?></p>
                <a href="/gold/pages/design/design_detail.php?num=<?=$design_num?>" class="commonBtn">view more</a>
              </div>
            </div><!-- end of productTxt -->
          <?php
          }
          ?>
          </div>
        </div>
      </div>
    </section>
    <section class="contents ours">
      <div class="center clear">
        <!-- title width common style -->
        <div class="title">
          <h2>Web & App preview</h2>
          <div class="linkBox">
            <span class="line"></span>
            <a href="#">view all products</a>
          </div>
        </div><!-- end of common title -->
        <div class="fashionBox men">
          <div class="fashionTxt">
            <h2><em>web</em> projects</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="/gold/pages/web/web.php">view more</a>
          </div>

          <?php
          include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
          $sql="select * from gold_web order by GOLD_WEB_num desc limit 3";
          $web_result = mysqli_query($dbConn,$sql);

          while($web_row=mysqli_fetch_array($web_result)){
            $web_num=$web_row['GOLD_WEB_num'];
            $web_thumb=$web_row['GOLD_WEB_thumb'];
            $web_tit=$web_row['GOLD_WEB_tit'];
            $web_desc=$web_row['GOLD_WEB_des'];
          ?>
          <div class="fashionImg">
            <div>
              <img src="/gold/data/web_page/thumb/<?=$web_thumb?>" alt="">
              <h2><?=$web_tit?></h2>
              <em class="cutTxt"><?=$web_desc?></em>
              <a href="/gold/pages/web/web_detail.php?num=<?=$web_num?>">view Details</a>
            </div>
          </div><!-- end of loop Box -->
          <?php
          }
          ?>
        </div><!-- end of web projects -->
        <div class="fashionBox women">
          <div class="fashionTxt">
            <h2><em>APP</em> projects</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a href="/gold/pages/app/app.php">view more</a>
          </div>

          <?php
          // include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php'; close해줘야 꺼짐(페이지 넘어가면 꺼짐)
          $sql="select * from gold_app order by GOLD_APP_num desc limit 3";
          $app_result = mysqli_query($dbConn,$sql);

          while($app_row=mysqli_fetch_array($app_result)){
            $app_num=$app_row['GOLD_APP_num'];
            $app_thumb=$app_row['GOLD_APP_thumb'];
            $app_tit=$app_row['GOLD_APP_tit'];
            $app_desc=$app_row['GOLD_APP_des'];
          ?>
          <!-- app box loop start -->
          <div class="fashionImg">
            <div>
              <img src="/gold/data/app_page/app_thumb/<?=$app_thumb?>" alt="">
              <h2><?=$app_tit?></h2>
              <em class="cutTxt"><?=$app_desc?></em>
              <a href="/gold/pages/app/app_detail.php?num=<?=$app_num?>">view Details</a>
            </div>
          </div><!-- end of loop Box -->
          <?php
          }
          ?>
        </div><!-- end of app projects -->
      </div>
    </section><!-- end of preview section -->

    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php" ?>

    <section class="contents contact hasTitle">
      <div class="center">
        <!-- contact title style -->
        <div class="title">
          <h2>contact us</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <a href="#" class="subLink">View More Details</a>
          </div>
        </div><!--contact end of common title -->
        <div class="contactBox">
          <div class="mapBox">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25325.347013428433!2d127.01186186897507!3d37.49215135879076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca14fff41b4fd%3A0x635925a3c8d81c15!2z7ISc7Jq47Yq567OE7IucIOyEnOy0iOq1rCDqsJXrgqjrjIDroZw!5e0!3m2!1sko!2skr!4v1608280786201!5m2!1sko!2skr"></iframe>
            </div>
          </div>
          <div class="formBox">
            <form action="/gold/php_process/pages/msg_insert.php" method="POST" class="form" name="msgForm">
              <p class="nameMail">
                <input type="text" name="msgName" placeholder="NAME">
                <input type="text" name="msgEmail" placeholder="EMAIL">
              </p>
              <p class="subject"><input type="text" name="msgTit"placeholder="SUBJECT"></p>
              <p class="message"><textarea placeholder="MESSAGE" name="msgTxt"></textarea></p>
              <a href="/gold/index.php" class="msgSend">SEND MESSAGE</a>
            </form>

            <script>
              let msgSendBtn = document.querySelector(".msgSend");
              msgSendBtn.addEventListener('click',msgSend);

              function msgSend(e){
                e.preventDefault();
              if(!document.msgForm.msgName.value){
                alert("이름을 입력해 주세요");
                document.msgForm.msgName.focus();
                return;
              }
              if(!document.msgForm.msgEmail.value){
                alert("이메일을 입력해 주세요");
                document.msgForm.msgEmail.focus();
                return;
              }
              if(!document.msgForm.msgTit.value){
                alert("제목을 입력해 주세요");
                document.msgForm.msgTit.focus();
                return;
              }
              if(!document.msgForm.msgTxt.value){
                alert("내용을 입력해 주세요");
                document.msgForm.msgTxt.focus();
                return;
              }

              document.msgForm.submit();
            }
            </script>
          </div>
        </div>
      </div>
    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
  </div>
  <script>

    $(function(){

      // click 'get in touch with' move scroll to contact in design
      const loca = $(location).attr('href').split('#')[1];

      if(loca == 'contact'){
      //   const contactOff = $(`#${loca}`).offset().top;
      const contactOff = $('.'+loca).offset().top;
      $("html, body").animate({scrollTop:contactOff},1000,'easeInQuint');
      }

      // cutting text on web text contents
      let mainWebBox = $(".fashionImg");

      for(let i = 0; i < mainWebBox.length; i ++){
        let allTxt = mainWebBox.eq(i).find(".cutTxt").text();

        function cutTxt(){
          let winWidth = $(window).width();
          if(winWidth < 800){
            mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 20) + ' ...');
          } else {
            mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 40) + ' ...');
          }
        }
        $(window).resize(function(){
          cutTxt()
        });
        cutTxt()
      }
    });

  </script>
</body>
</html>