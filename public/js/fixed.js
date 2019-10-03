(function($) {
    var element = $('.follow-scroll'),
        originalY = element.offset().top;
    
// Space between element and top of screen (when scrolling)
    var topMargin = 100;
// Should probably be set in CSS; but here just for emphasis
    element.css('position', 'relative');
    
    $(window).on('scroll', function(event) {
        var scrollTop = $(window).scrollTop();

        //annalize of bottom space
        var hT = $('#category-content').offset().top,
        hH = $('#category-content').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
        if (wS > (300+hT+hH-wH)){
            // stop scroll when we are over section

            scrollTop = function(e){
                e.preventDefault();
                e.stopPropagation();
            }
          

            // scrollTop = this.scrollTop()


        //     console.log(hT+hH-wH-50)
        // }else if(wS > (hT+hH+400-wH)){
        //     scrollTop = function(e){
        //         // e.preventDefault();
        //         e.stopPropagation();
        //     }
        }


        element.stop(false, false).animate({
            top: scrollTop < originalY
                    ? 0
                    : scrollTop - originalY + topMargin
        }, 210); // scroll duration
    });
})(jQuery);




// $(document).ready(function() {
//     $(window).scroll(function() {
        
//         var headerH = $('.header').outerHeight(true);
//         console.log(headerH);
//  //this will calculate header's full height, with borders, margins, paddings
//         var scrollTopVal = $(this).scrollTop();
//          if ( scrollTopVal > headerH ) {
//              $('.follow-scroll').css({'position':'fixed','top' :'0px'});
//          } else {
//              $('.follow-scroll').css({'position':'static','top':'0px'});
//          }
        
//         var scrollLeftVal = $(this).scrollLeft();
//         if ( scrollLeftVal > 1 ) { alert('i scrolled to the left'); }
//      });
//   });