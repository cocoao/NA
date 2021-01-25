$(function(){
  let url = "/gold/data/ajax/qna_ajax.php"
  $.get(
    url,
    function(qna_data){
      $(".qnaList").append(qna_data);
    }
  )
});



