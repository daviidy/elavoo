@extends('layouts.menu-list-items')

@section('content')

<section class="cms-content politique-de-confidentialite">
                    <div class="content-holder">

                        <div class="headline-holder">
<h1 style="font-size:30px">DEVENEZ LIVREUR</h1>
</div>
<div class="content">
  <h2>Devenez livreur Elavoo et soyez votre propre Boss ?</h2>
<p>Chez Elavoo, pas d’emploi du temps imposé, vous êtes libre de votre temps.  Pas de contrainte, c’est vous et vous seul qui décidez quand vous souhaitez travailler. Elavoo est le meilleur moyen d’obtenir la liberté que vous souhaitez. </p>
<h2>Quelles sont les conditions pour nous rejoindre ?</h2>

<ul>
  <li>Être une personne souriante</li>
  <li>Vous devez avoir une moto ou une voiture 5 portes</li>
  <li>Un smartphone avec internet et habiter Abidjan.</li>
  <li>Inutile de préciser que la ponctualité fait également partie des pré-requis !</li>
</ul>

<h2>Rémunération</h2><br>
<p><br>Vous êtes payé jusqu'à 1000 F CFA la livraison au client !<br> </p>

<h2>Comment postuler</h2>
<p><br>Les candidatures se font uniquement <strong> en remplissant ce formulaire.</strong> Aucune candidature ou aucun renseignement ne pourra être donné par téléphone. Une fois que vous avez soumis votre candidature, un membre de notre équipe vous contactera si votre profil correspond à nos recherches !<br> </p>

</div>

<div class="right-column fixed" style="margin-top: 0px;">
    @include('includes.contacte')
</div>



                        <div style="clear:both"></div>

                    </div>
                </section>

                <script>
                window.onscroll = function() {scrollFunction()};
                function scrollFunction() {
                	var element = document.getElementsByClassName("fixed-summary");
                	if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600)
                	{
                		element.classList.add("scroll");
                	}
                	else
                	{
                		element.classList.remove("scroll");
                	}
                }
                </script>


  @endsection
