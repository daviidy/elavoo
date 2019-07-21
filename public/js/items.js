$(document).ready(function(){

  $('.item-add').click(function(){



      var item_name = $(this).parents().eq(1).find('.name').find('span').text();
      var summary = '<tr class="summary-item bundle" style="display: table-row;">';

      var summary2 = '<td class="name">'+ item_name +'</td>';
      var summary3 = '<td class="update-controls noselect"><span class="item-substract item-update">-</span> <span class="item-amount">5</span> <span class="item-add item-update">+</span></td>';
      var summary4 = '<td class="price">30,00€ </td>';
      var summary5 = '</tr>';               // Create element with HTML

      $("#summary-items tbody").append(summary, summary2, summary3, summary4, summary5);
      /*
      for (i = 0; i < item_name.length; i++) {
          if(){

          }
      item_name[i].style.display = "none";
     }


      var elems = document.querySelectorAll("*"),
      res = Array.from(elems).find(v => v.textContent == 'Special');


    var css = $(this).find('.arrow').css("background-image").toLowerCase();
    if (css == 'url("https://d3njjcbhbojbot.cloudfront.net/web/images/imba/right_arrow.svg")') {

      $(this).find('.arrow').css("background-image", "url(\"https://d3njjcbhbojbot.cloudfront.net/web/images/imba/down_arrow.svg\")");

    }

    else {
      $(this).find('.arrow').css("background-image", "url(\"https://d3njjcbhbojbot.cloudfront.net/web/images/imba/right_arrow.svg\")");
    }

    $(this).children('.answer').toggle();
    */



  });

});
