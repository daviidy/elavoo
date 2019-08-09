@extends('layouts.menu')

@section('content')


<!-- visual section -->
<div class="visual" id="visual" style="">
  <div class="text">
    <h1>Pressing &amp; linge livrés à domicile dans Abidjan</h1>
    <h2>Nous récupérons, nettoyons &amp; livrons vos vêtements en 48h</h2>
    <style>
      .visual .text .action-forms-container .form-container .col input[type=submit] { padding: 14px 10px; }
</style>
    <style>
      @media (max-width: 767px) {
#promo-bottom { line-height: 20px; }
#promo-bottom .promo-container { padding: 10px 0;}
}
</style>
    <div class="action-forms-container">
      <div class="place-order-form form-container call-to-action">
        <form action="https://www.zipjet.fr/fr/paris/order/new/location" class="order-zip-form order-location-form" rel="top" method="POST" data-trk-trigger="submitWithValues" data-trk-event="submitPostCode" data-trk-location-identifier="fr_paris"
          novalidate="">
          <fieldset>
            <div class="col">
              <span class="localise-me" title="Me localiser">
                Me localiser </span>
              <img src="https://www.zipjet.fr/assets/frontend/images/loader.gif" height="40" width="40" alt="" id="loader">
              <input type="text" id="addressLine" class="addressLine" name="addressLine" placeholder="Entrez votre adresse" data-parsley-required="true" data-parsley-id="1939" autocomplete="off">
              <ul class="parsley-errors-list" id="parsley-id-1939"></ul>
              <input type="hidden" id="lat" name="lat">
              <input type="hidden" id="lng" name="lng">
              <input type="hidden" id="street" name="street">
              <input type="hidden" id="streetnumber" name="streetnumber">
              <input type="hidden" class="input" id="zip" name="zip">
              <input type="hidden" class="input" id="mobile" name="mobile">
              <input type="submit" value="Commander maintenant">
            </div>
          </fieldset>
        </form>

        <div class="geolocation-blocked-warning">Si vous souhaitez utiliser la fonction de géolocalisation merci de l'autoriser dans les préférences de votre navigateur</div>
      </div>

      <div style="clear: both"></div>
    </div>
  </div>
</div>


<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 620px; width: 1349px; z-index: -999998; position: absolute;">
  <div class="backstretch-item" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999;">
    <img alt="" src="/assets/images/banner.jpg"
      style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1349px; height: 899.333px; max-width: none; left: 0px; top: -139.667px; right: auto; bottom: auto;"></div>
</div>
</section>
<section class="cms-content mobile-hidden">
<section id="why" class="wow fadeInUp mobile-hidden animated" style="visibility: visible; animation-name: fadeInUp;">
  <div class="content-section">
    <div class="advantages">
      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important; width: 70px!important;" style="margin-bottom: 35px;"><i class="fas fa-mobile-alt"></i></div>
          <!--img src="/assets/images/elavoo_phone.svg" alt="Flexible"-->
        </div>
        <div class="text-wrap">
          <h3>Pratique</h3>
          <p>Disponible 7j/7 de 8h à 19h</p>
        </div>
        <div class="clear"></div>
      </div>

      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important;" style="margin-bottom: 35px;"><i class="fas fa-shipping-fast fb" style="width:70px!important;"></i></div>
        </div>
        <div class="text-wrap">
          <h3>professionnels</h3>
          <p>Livraison à votre convenance en 48h, 24h vous choisissez le canal horaire de la livraison.</p>
        </div>
        <div class="clear"></div>
      </div>

      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important; width: 70px!important;" style="margin-bottom: 35px;"><i class="far fa-money-bill-alt"></i></div>
        </div>
        <div class="text-wrap">
          <h3>Prix attractifs</h3>
          <p>Collecte &amp; Livraison gratuites</p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</section>

<style>@media (max-width: 767px) { .home { background: url(https://res.cloudinary.com/zipjet/image/upload/q_auto:good/v1518717543/deals-dark-mobile-2_on3zon.png) center top no-repeat; background-size: cover; } }</style>

<div class="divider-wrap">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>
<section id="how-it-works" class="content-section">
  <h2 class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Comment ça marche ?</h2>
  <strong class="sub-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Commandez en seulement 3 étapes</strong>
  <div class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
    <img src="/assets/images/elavoo_call.png" alt="">
  </div>
  <div class="wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
    <div class="img-icon">
      <div style="font-size:50px!important; width: 70px!important;" class="desktop-icon" style="margin-bottom: 35px;"><i class="fas fa-mobile-alt"></i></div>
      <div style="font-size:50px!important; width:50px!important;" class="mobile-icon" style="margin-bottom: 35px;"><i class="fas fa-mobile-alt"></i></div>
    </div>
    <span class="h3">Commandez via site internet Elavoo</span>
    <p>Choisissez les dates et les horaires de votre choix.</p>
    <div class="clear"></div>

    <div class="img-icon">
      <div style="font-size:50px!important;" class="desktop-icon" style="margin-bottom: 35px;"><i class="fas fa-shipping-fast fb" style="width:70px!important;"></i></div>
      <div style="font-size:50px!important; width:50px!important;" class="mobile-icon"><i class="fas fa-shipping-fast fb" style="width:70px!important;"></i></div>
    </div>
    <span class="h3">Rencontrez un livreur Elavoo</span>
    <p>Nous collectons et livrons vos vêtements chez vous.</p>
    <div class="clear"></div>

    <div class="img-icon">
      <img src="/assets/images/elavoo_ hb.png" alt="" style="width: 70px!important;" class="desktop-icon" style="margin-bottom: 35px;">
      <img src="/assets/images/elavoo_ hb.png" alt="" style="width:50px!important;" class="mobile-icon">
    </div>
    <span class="h3">Votre linge propre vous est rendu</span>
    <p>Votre linge propre vous est rendu en 48h ou 24h*.<br>(*Service Express)</p>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</section>

<!--
<div class="divider-wrap">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>

<section id="testimonials" class="content-section" style="margin-bottom: 0px;">
  <h2 class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Ce qu’ils pensent de nous</h2>
  <strong class="sub-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
    Avis sur <img src="https://res.cloudinary.com/zipjet/image/upload/q_auto:good/v1490688017/Store_josoji.png" alt="" style="vertical-align: middle; margin-top: -2px;">
  </strong>
  <div class="testimonials wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="peoples">
      <div class="mask">
        <div class="slideset">
          <article class="slide match-height" style="height: 216px;">
            <blockquote>
              <cite>
                <span>
                  Guillaume V.
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="" class="first-star">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                </span>
              </cite>
              <q>"Parfait Il ne manque plus qu'un rappelle la veille du rendez-vous pour ne pas oublier le réveil le matin ;-)"</q>
            </blockquote>
          </article>
          <article class="slide match-height" style="height: 216px;">
            <blockquote>
              <cite>
                <span>
                  Bonnet Y.
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="" class="first-star">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                </span>
              </cite>
              <q>"1ère commande : très bien et agréable, venues en temps et en heure, et même prévenu car coincé dans les bouchons donc rien à dire. Service impeccable, je recommande"</q>
            </blockquote>
          </article>
          <article class="slide match-height" style="height: 216px;">
            <blockquote>
              <cite>
                <span>
                  Florian M.
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="" class="first-star">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                  <img src="https://www.zipjet.fr/assets/frontend/images/StarFull.png" alt="">
                </span>
              </cite>
              <q>"Aux petits soins de nos vêtements ! Service d'excellente qualité et soucieux d'un résultat parfait ."</q>
            </blockquote>
          </article>
        </div>
      </div>
      <ul class="pagination">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>

  </div>
</section>
-->

<div class="divider-wrap mobile-hidden">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>
<section id="prices" class="content-section mobile-hidden">
  <h2 class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Nos tarifs pressing &amp; linge au kilo</h2>
  <strong class="sub-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
  <!--  Nous vous proposons deux types de sacs, un pour chacune de nos options de nettoyage. Ils vous sera offert à la fin de votre commande.
  --></strong>

  <div class="column wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft; width: 100%!important;">
    <div class="row categories-menu">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <!-- Search laundry items div -->

        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
          <div id="safi-product-list" class="horizontal-scrollable-tabs text-center" style="margin:0 auto;">
            <div class="scroller arrow-left" style="display: none;"><i class="fa fa-arrow-left"></i></div>
            <div class="scroller arrow-right" style="display: none;"><i class="fa fa-arrow-right"></i></div>
            <div class="horizontal-tabs">
              <ul role="tablist" class="nav nav-tabs nav-tabs-horizontal">
                <li role="presentation" class="active">
                  <a href="#awoof" data-toggle="tab" onclick="return false;">
                    <span class="categories-icon far fa-star"></span>
                    Vêtements par lot
                  </a>
                </li>
                                  <li role="presentation">
                    <a href="#women" data-toggle="tab" onclick="return false;">
                      <span class="categories-icon fas fa-female"></span>
                      Femmes
                    </a>
                  </li>
                                  <li role="presentation">
                    <a href="#men" data-toggle="tab" onclick="return false;">
                      <span class="categories-icon fas fa-user-tie"></span>
                      Hommes
                    </a>
                  </li>
                                  <li role="presentation">
                    <a href="#girls" data-toggle="tab" onclick="return false;">
                      <span class="categories-icon fas fa-female"></span>
                      Filles
                    </a>
                  </li>
                                  <li role="presentation">
                    <a href="#boys" data-toggle="tab" onclick="return false;">
                      <span class="categories-icon fas fa-user"></span>
                      Graçons
                    </a>
                  </li>
                                  <li role="presentation">
                    <a href="#babies" data-toggle="tab" onclick="return false;">
                      <span class="categories-icon fas fa-child"></span>
                      Enfants
                    </a>
                  </li>
                                  <li role="presentation">
                    <a href="#bedding" data-toggle="tab" onclick="return false;">
                      <span class="categories-icon fas fa-bed"></span>
                      Literie
                    </a>
                  </li>



              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--<div class="bag-container">
      <img src="/assets/images/elavoo_punnet.jpeg" alt="" style="margin-top: 9px;">
    </div>
    <span class="h3 dark">Linge Nettoyé &amp; Plié</span>
    <p>Facturé au kilo, notre service de linge au kilo convient parfaitement pour votre linge quotidien. Vos articles seront lavés ensemble à 30°C, séchés au sèche-linge puis pliés. Chaque sac de linge est facturé au kilo avec un minimum
      de 3 kg par commande.</p>
    <ul>
      <li>1 x Linge au kilo (min 3 kg)<br><span>4,50€</span></li>
    </ul>
  </div>
  <div class="column wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
    <div class="bag-container">
      <img src="/assets/images/elavoo_bag.jpeg" alt="">
    </div>
    <span class="h3 dark">Pressing &amp; Repassage</span>
    <p>Facturé à la pièce, notre service de nettoyage à sec et repassage s'effectue par article. Chaque article est nettoyé à sec, repassé et rendu individuellement.</p>
    <ul>
      <li>Chemises sur cintre<br><span>dès 3,00€</span></li>
      <li>Chemisiers<br><span>dès 7,00€</span></li>
      <li>Costumes<br><span>dès 14,00€</span></li>
    </ul>
  </div>
  <div class="clear"></div>-->
  <p>Constituez votre panier en fonction de vos bésoins.<br> Nos livreurs élavoo passeront les récupérer, livrer et repasser.</p>
  <a href="/items" class="button"><span>Consultez nos prix ici</span></a>
</section>

<div class="divider-wrap mobile-hidden">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>
<section id="area-served" class="content-section mobile-hidden">
  <div class="column wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
    <div class="match-height" style="height: 143px;">
      <span class="h2 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Elavoo newsletter</span>
      <strong class="sub-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
        Abonnez-vous à notre newsletter et recevez toutes nos meilleures offres
      </strong>
    </div>
    <form action="#" class="newsletter-form" novalidate="">
      <fieldset>
        <div class="col">
          <input type="email" placeholder="Votre adresse email" data-parsley-required="true" data-parsley-type="email" data-parsley-id="7131">
          <ul class="parsley-errors-list" id="parsley-id-7131"></ul>
          <input type="submit" value="Abonnez-vous à notre newsletter">
        </div>
      </fieldset>
    </form>
  </div>
  <div class="column wow fadeInRight call-to-action animated" style="visibility: visible; animation-name: fadeInRight;">
    <div class="match-height" style="height: 143px;">
      <h2>Votre linge lavé aujourd'hui</h2>
      <strong class="sub-heading">Renseignez votre adresse pour savoir si nous livrons dans votre quartier</strong>
    </div>

    <form action="https://www.zipjet.fr/fr/paris/order/new/location" class="order-zip-form order-location-form" rel="top" method="POST" data-trk-trigger="submitWithValues" data-trk-event="submitPostCode" data-trk-location-identifier="fr_paris"
      novalidate="">
      <fieldset>
        <div class="col">
          <input type="text" id="addressLine" class="addressLine" name="addressLine" placeholder="Entrez votre adresse" data-parsley-required="true" data-parsley-id="1110" autocomplete="off">
          <ul class="parsley-errors-list" id="parsley-id-1110"></ul>
          <input type="hidden" id="lat" name="lat">
          <input type="hidden" id="lng" name="lng">
          <input type="hidden" id="street" name="street">
          <input type="hidden" id="streetnumber" name="streetnumber">
          <input type="hidden" class="input" id="zip" name="zip">
          <input type="hidden" id="mobile" name="mobile">
          <input type="submit" value="Regarder les disponibilités">
        </div>
      </fieldset>
    </form>
    <div class="geolocation-blocked-warning" style="margin-top: 10px;">
      Si vous souhaitez utiliser la fonction de géolocalisation merci de l'autoriser dans les préférences de votre navigateur</div>
    <style>
      .home {
        background: #fff;
      }

      @media (max-width: 767px) {
        .homepage#wrapper .w1 {
          background: url(https://res.cloudinary.com/zipjet/image/upload/q_auto:good/v1518717543/deals-dark-mobile-2_on3zon.png) center top no-repeat;
          background-size: cover;
        }
      }
    </style>
    <script>
      (function() {
var cmsContent = document.getElementsByClassName('cms-content')[0];
var topSection = document.getElementsByClassName('top-section')[0];
var wrapper = document.getElementById('wrapper');
var whyZipjet = document.getElementById('why-zipjet');
var mobileHiddenList = document.querySelectorAll('#testimonials + .divider-wrap, #newsletter, #newsletter + .divider-wrap, #prices + .divider-wrap, #clients + .divider-wrap, #prices, #area-served');
var testimonials = document.getElementById('testimonials');
var addressLine = document.querySelector('.homepage #addressLine');
var homeLength = document.getElementsByClassName("home").length;
var mobileViewActive = false;
var desktopViewActive = false;

if (homeLength > 0) {
mobileHiddenList.forEach(function(mobileHiddenElement) {
    mobileHiddenElement.classList.add('mobile-hidden');
})
}

window.addEventListener("resize", resizeThrottler, false);

if (typeof(Event) === 'function') {
// modern browsers
window.dispatchEvent(new Event('resize'));
} else {
// for IE and other old browsers
// causes deprecation warning on modern browsers
var evt = window.document.createEvent('UIEvents');
evt.initUIEvent('resize', true, false, window, 0);
window.dispatchEvent(evt);
}

var resizeTimeout;

function resizeThrottler() {
// ignore resize events as long as an actualResizeHandler execution is in the queue
if (!resizeTimeout) {
    resizeTimeout = setTimeout(function() {
        resizeTimeout = null;
        actualResizeHandler();

        // The actualResizeHandler will execute at a rate of 15fps
    }, 66);
}
}

function actualResizeHandler() {
// handle the resize event
// mobile
if (window.innerWidth < 768 && homeLength > 0 && !mobileViewActive) {
    mobileViewActive = true;
    desktopViewActive = false;

    wrapper.insertAdjacentElement('afterend', cmsContent);
    cmsContent.classList.remove('mobile-hidden');
    testimonials.style.marginBottom = '20px';

    // Scroll to top on focusout
    addressLine.addEventListener("focusout", function() {
        window.scrollTo(0, 0);
    });

    if (typeof(Event) === 'function') {
        // modern browsers
        window.dispatchEvent(new Event('resize'));
    } else {
        // for IE and other old browsers
        // causes deprecation warning on modern browsers
        var evt = window.document.createEvent('UIEvents');
        evt.initUIEvent('resize', true, false, window, 0);
        window.dispatchEvent(evt);
    }

    // desktop
} else if (window.innerWidth >= 768 && homeLength > 0 && !desktopViewActive) {
    desktopViewActive = true;
    mobileViewActive = false;

    topSection.insertAdjacentElement('afterend', cmsContent);
    cmsContent.classList.add('mobile-hidden');
    testimonials.style.marginBottom = '0px';
    cmsContent.insertAdjacentElement('afterbegin', whyZipjet);
}
}

}());
</script>
  </div>
</section>

</section>





</div>
</div>



@endsection
