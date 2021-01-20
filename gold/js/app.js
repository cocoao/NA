$(function(){
  $('.appBoxes').masonry({
  // options
  itemSelector: '.appBox',
  columnWidth: '.appBox-sizer',
  percentPosition: true
  });

  $.getJSON("/gold/data/json/app.json",function(data){
    let items = [];
    $.each(data, function(i,item){
      //each 각각 분리
      let itemHTML = `<div class="appBox">
                       <div>
                         <img src="/gold/data/app_page/app_thumb/${item.appthumb}" alt="">
                         <h2>${item.apptitle}</h2>
                         <a href="#">View Details</a>
                       </div>
                     </div>`;
      items.push($(itemHTML).get(0));
    });
    $(".appBoxes").append(items);

    $(".appBoxes").imagesLoaded(function(){
      // $(items).removeClass("is-loading");
      $(".appBoxes").masonry('appended',items);
    });
    // console.log(data[0].appclient);
  });
});
