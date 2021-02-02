
        <div class="memberTab deweBoxes adminPanel">
          <div class="adminTable">
            <ul class="adminList">
              <li class="adminTitle clear">
              <span class="memNum">번호</span>
                <span class="memId">아이디</span>
                <span class="memName">이름</span>
                <span class="memLevel">레벨</span>
                <span class="memPoint">포인트</span>
                <span class="memUpdate">수정</span>
                <span class="memDelete">삭제</span>
              </li>

              <?php
                $mem_search_select=$_POST['searchSlect'];
                $mem_search_input=$_POST['memberSearchInput'];
                
                // echo $mem_search_select, $mem_search_input;

                include $_SERVER['DOCUMENT_ROOT'].'/gold/php_process/connect/db_connect.php';
                if($mem_search_select=='memberSearchID'){
                  $sql = "select * from gold_mem where GOLD_mem_id like '%$mem_search_input%' order by GOLD_mem_num desc";
                } else {
                  $sql = "select * from gold_mem where GOLD_mem_name like '%$mem_search_input%' order by GOLD_mem_num desc";
                }
                $mem_search_result=mysqli_query($dbConn, $sql);
                $mem_search_result_num=mysqli_num_rows($mem_search_result);

                if(!$mem_search_result_num){
                  echo '<li style="padding:10px 0; width:100%; text-align:center;">데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해주세요.</li>';
                } else {
                  while($mem_search_select_row=mysqli_fetch_array($mem_search_result)){
                    $mem_result_num=$mem_search_select_row['GOLD_mem_num'];
                    $mem_result_id=$mem_search_select_row['GOLD_mem_id'];
                    $mem_result_name=$mem_search_select_row['GOLD_mem_name'];
                    $mem_result_level=$mem_search_select_row['GOLD_mem_level'];
                    $mem_result_point=$mem_search_select_row['GOLD_mem_point'];
               ?>

              <li class="adminContents clear">
                <form action="/gold/php_process/pages/mem_update.php?num=<?=$mem_result_num?>" method="post">
                  <span class="memNum"><?=$mem_result_num?></span>
                  <span class="memId"><?=$mem_result_id?></span>
                  <span class="memName"><?=$mem_result_name?></span>
                  <span class="memLevel"><input type="text" value="<?=$mem_result_level?>" name="level"></span>
                  <span class="memPoint"><input type="text" value="<?=$mem_result_point?>" name="point"></span>
                  <span class="memUpdate"><button type="submit">수정</button></span>
                  <span class="memDelete"><button type="button" onclick="location.href='/gold/php_process/pages/mem_delete.php?num=<?=$mem_result_num?>'">삭제</button></span>
                </form>
              </li>

              <?php              
                  }
                }
              ?>

            </ul>
          </div><!--end of qna table-->

          <div class="adminViewBtns">
            <a href="/gold/pages/admin/admin.php">뒤로가기</a>
          </div>

          </div>