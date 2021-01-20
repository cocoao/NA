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
    <section class="contents design hasTitle">
      <div class="center">
        <!-- contact title style -->
        <div class="title">
          <h2>Design Collection</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <a href="#" class="subLink">View More Details</a>
          </div>
        </div><!--contact end of common title -->
        <div class="designBoxes deweBoxes">

        <?php
            include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
            $sql="select*from gold_de order by GOLD_DE_num desc";

            $result=mysqli_query($dbConn, $sql);
            while($row=mysqli_fetch_array($result)){
                $design_num=$row['GOLD_DE_num'];
                $thumb_path=$row['GOLD_DE_thumb'];
                $design_title=$row['GOLD_DE_tit'];
                $design_desc=$row['GOLD_DE_des'];
        ?>
          <div class="designBox deweBox">
            <div>
              <p class="designImg deweImg"><img src="/gold/data/design_page/thumb/<?=$thumb_path?>" alt=""></p>
              <div class="designTxt deweTxt">
                <h2><?=$design_title?></h2>
                <em class=cutTxt><?=$design_desc?></em>
              </div>
              <div class="boxOverlay">
                <a href="/gold/pages/design/design_detail.php?num=<?=$design_num?>"><i class="fa fa-search"></i></a>
              </div>
            </div>
          </div><!--end of designBox-->
          <?php
          }
          ?>

        </div><!--end of designBoxes-->


        <div class="btns">
            <?php
            if($userlevel == 1){
            ?>
            <a href="#" class="commonBtn designLoadMore">Load more</a>
            <a href="#" class="commonBtn toTop">Go To Top</a>
            <a href="/gold/pages/design/design_input_form.php" class="commonBtn">Upload Contents</a>
            <?php
            } else {
            ?>
            <a href="#" class="commonBtn designLoadMore">Load more</a>
            <a href="#" class="commonBtn toTop">Go To Top</a>
            <?php
            }
            ?>
        </div>
        
      </div><!--end of center-->
    </section>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/about.php" ?>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/gold/include/footer.php" ?>
  </div>
</body>
</html>