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
	$(".mobile-menu-container").css({ "height":"760px","margin-left":"0px"});
	$(".mobile-menu-overlay").css("display","block");
	$("html, body").addClass("no-scroll");

});

$(".mobile-menu-overlay").click(function() {
	$(".mobile-menu-overlay").css("display","none");
	$(".mobile-menu-container").css("margin-left","-300px");
	$("html, body").removeClass("no-scroll");
});
