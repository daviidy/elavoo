$(function(){
// On recupere la position du bloc par rapport au haut du site
var position_top_raccourci = $("#header").offset().top + $(window).height();

//Au scroll dans la fenetre on déclenche la fonction
$(window).scroll(function () {

//si on a defile de plus de 150px du haut vers le bas
if ($(this).scrollTop() > position_top_raccourci) {

//on ajoute la classe "fixNavigation" a <div id="navigation">
$('#header').addClass("active1");
$('#header').hideClass("logo-icon");
} else {

//sinon on retire la classe "fixNavigation" a <div id="navigation">
$('#header').removeClass("active1");
}
});
});
// cookie bar

/*$(document).ready(function(){
  $(".icon-ico-close").click(function(){
    $(".cookie-info").hide()1000;
  });
});*/



$(".mobile-menu-icon").click(function() {
	$(".mobile-menu-icon").toggleClass("active");
	$(".mobile-menu-container").css({ "height":"628px","margin-left":"0px"});
	$(".mobile-menu-overlay").css("display","block");
	$("html, body").css({"position":"fixed","height":"100%","width":"100%","overflow":"hidden"});

});

$(".mobile-menu-overlay").click(function() {
	$(".mobile-menu-overlay").css("display","none");
	$(".mobile-menu-container").css("margin-left","-300px");
	$("html, body").css({"height":"100%","overflow":"auto"});
});


/*filter code for items category*/

$('#category-tabs li').click(function(e) {
  e.preventDefault();
  var a = $(this).attr('href');
  a = a.substr(1);
  $('.category-content a').each(function() {
    if (!$(this).hasClass(a) && a != 'all')
      $(this).addClass('hide');
    else
      $(this).removeClass('hide');
  });
});
$('.gallery a').click(function(e) {
  e.preventDefault();
  var $i = $(this);
  $('.gallery a').not($i).toggleClass('pophide');
  $i.toggleClass('pop');
});
