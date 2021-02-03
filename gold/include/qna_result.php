<div class="qnaTab adminPanel deweBoxes">
  <div class="adminTable">
    <ul class="adminList">
      <li class="adminTitle clear">
        <span class="qnaCheck">선택</span>
        <span class="qnaNum">번호</span>
        <span class="qnaId">아이디</span>
        <span class="qnaTit">제목</span>
        <span class="qnaReg">등록일</span>
        <span class="qnaHit">조회수</span>
      </li>

      <form action="/gold/php_process/pages/qna_check_delete.php" method="post" name="adminQnaDelete">
      <?php
        $qna_search_select=$_POST['searchSlect'];
        $qna_search_input=$_POST['qnaSearchInput'];
        
        // echo $search_select, $search_input;

        include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
        if($qna_search_select=='qnaSearchID'){
          $sql = "select * from gold_qna where GOLD_QNA_id like '%$qna_search_input%' order by GOLD_QNA_num desc";
        } else {
          $sql = "select * from gold_qna where GOLD_QNA_tit like '%$qna_search_input%' order by GOLD_QNA_num desc";
        }
        $qna_search_result=mysqli_query($dbConn, $sql);
        $qna_search_result_num=mysqli_num_rows($qna_search_result);

        if(!$qna_search_result_num){
          echo '<li style="padding:10px 0; width:100%; text-align:center;">데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해주세요.</li>';
        } else {
          while($qna_search_select_row=mysqli_fetch_array($qna_search_result)){
            $qna_result_num=$qna_search_select_row['GOLD_QNA_num'];
            $qna_result_id=$qna_search_select_row['GOLD_QNA_id'];
            $qna_result_tit=$qna_search_select_row['GOLD_QNA_tit'];
            $qna_result_reg=$qna_search_select_row['GOLD_QNA_reg'];
            $qna_result_email=$qna_search_select_row['GOLD_QNA_email'];
       ?>
        <li class="adminContents clear">
          <span class="qnaCheck"><input type="checkbox" name="item[]" value="<?=$qna_result_num?>"></span>
          <span class="qnaNum"><?=$qna_result_num?></span>
          <span class="qnaId"><?=$qna_result_id?></span>

          <?php
          $sql = "select * from gold_ans where GOLD_ANS_QNA_num=$qna_result_num order by GOLD_ANS_num desc";

          $ans_res = mysqli_query($dbConn, $sql);
          $is_ans_res = mysqli_num_rows($ans_res);

          if(!$is_ans_res){
          ?>
          <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_result_num?>"><?=$qna_result_tit?></a></span>
          <?php 
          } else {
          ?>
          <span class="qnaTit"><a href="/gold/pages/qna/qna_view.php?num=<?=$qna_result_num?>"><?=$qna_result_tit?> [답변완료]</a></span>
          <?php
          }
          ?>
          <span class="qnaReg"><?=$qna_result_reg?></span>
          <span class="qnaHit"><?=$qna_result_email?></span>
        </li>

      <?php              
          }
        }
      ?>
      </form>
    </ul>
  </div><!--end of msg table-->

    <div class="adminViewBtns">
      <button type="button" onclick="qnaCheckDelete()" class="checkDeleteBtn">선택 삭제</button>
      <a href="/gold/pages/admin/admin.php">뒤로가기</a>
    </div>
  </div>
</div>
<script>
      function qnaCheckDelete(){
        document.adminQnaDelete.submit();
      }
    </script>