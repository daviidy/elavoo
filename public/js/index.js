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

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
