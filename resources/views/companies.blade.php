@extends('layouts.menu')

@section('content')


<!-- visual section -->
<div class="visual" id="visual" style="">
  <div class="text">
    <h1>Avantage exclusif pour les entreprises partenaires</h1>
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
    <!--div class="action-forms-container">
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
    </div-->
  </div>
</div>


<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 620px; width: 1349px; z-index: -999998; position: absolute;">
  <div class="backstretch-item" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999;">
    <img alt="" src="/assets/images/why-2.png"
      style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1349px; height: 899.333px; max-width: none; left: 0px; top: -139.667px; right: auto; bottom: auto;"></div>
</div>
</section>
<section class="cms-content mobile-hidden">
<section id="why" class="wow fadeInUp mobile-hidden animated" style="visibility: visible; animation-name: fadeInUp;">
  <div class="content-section">
    <div class="advantages">
      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important; width: 70px!important;" style="margin-bottom: 35px;"><img src="/assets/images/corporate_partners.svg"></div>
        </div>
        <div class="text-wrap">
          <h3>Pour Les Entreprises</h3>
          <p>Une main-d'œuvre motivée rend une entreprise plus productive. Donnez à vos employés les avantages du TEMPS gratuit, des économies supplémentaires et de la commodité, lorsque vous leur accordez Elavoo comme avantages.</p>
        </div>
        <div class="clear"></div>
      </div>

      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important;" style="margin-bottom: 35px;"><img src="/assets/images/hospitality.svg"></div>
        </div>
        <div class="text-wrap">
          <h3>Pour Les Hopitaux</h3>
          <p>Elavoo corporate fait une offre exceptionnel aux hopitaux en enlevant et traitant leurs linges. Gagnez en temps et en productivité</p>
        </div>
        <div class="clear"></div>
      </div>

      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important; width: 70px!important;" style="margin-bottom: 35px;"><img src="/assets/images/for_hotels.svg"></div>
        </div>
        <div class="text-wrap">
          <h3>Pour Les Hotels</h3>
          <p>Elavoo corporate vous offre, à vous et à vos client, une expérience unique et professionnelle.</p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</section>

<style>@media (max-width: 767px) { .home { background: url(/assets/images/why-2.png) center top no-repeat; background-size: cover; } }</style>

<div class="divider-wrap">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>
<section id="contact-us-corporate" class="content-section">
        <h2 class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Nous contacter</h2>
    <strong class="sub-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"></strong>
    <div class="wow fadeInLeft column column-1 animated" style="visibility: visible; animation-name: fadeInLeft;">
        <p>Chez Elavoo Corporate, nous offrons aux entreprises un service sur mesure adapté à vos besoins.</p>
        <span class="line"></span>
        <p>
            <span class="color-dark"><b>Coordonnées :</b><br>
            <span class="color-green">(+225) 49922028</span><br>
            <a href="mailto:info@elavoo.com" class="color-green">info@elavoo.com</a>
        </span></p>
        <span class="line"></span>
        <p>Si votre entreprise est éventuellement intéressée par un service de linge et de pressing à domicile, N’hésitez pas à nous contacter.</p>
    </div>
    <div class="wow fadeInRight column animated" style="visibility: visible; animation-name: fadeInRight;">


<form action="#" method="post" class="enquiry-corporate" novalidate="">

    <div class="inputs">
        <input type="hidden" id="form-csrf" name="form[__csrf]" value="7b10338f79d0767e5a0f2e3fe7ee1ec2695424b6a6c76e5c44015faff5b1a132da3ff2f7">

        <div class="column pad-r-2 pos-rel">
            <label for="form-name" class="formal--label">Nom</label><input class="formal--control form-control" id="form-name" name="form[name]" value="" placeholder="" type="text" data-parsley-required="true" data-parsley-id="0773"><ul class="parsley-errors-list" id="parsley-id-0773"></ul>
        </div>

        <div class="column pad-l-2 pos-rel">
            <label for="form-phone" class="formal--label">Numéro de mobile</label><input class="formal--control form-control" id="form-phone" name="form[phone]" value="" placeholder="" type="text" data-parsley-required="true" data-parsley-id="7860"><ul class="parsley-errors-list" id="parsley-id-7860"></ul>
        </div>

        <div class="clear"></div>

        <div class="pos-rel">
            <label for="form-email" class="formal--label">E-mail</label><input class="formal--control form-control" id="form-email" name="form[email]" value="" placeholder="" type="email" data-parsley-required="true" data-parsley-type="email" data-parsley-id="1393"><ul class="parsley-errors-list" id="parsley-id-1393"></ul>
        </div>

        <div class="pos-rel">
            <label for="form-message" class="formal--label">Message</label>
<textarea class="formal--control form-control" id="form-message" name="form[message]" placeholder="" data-parsley-id="8896"></textarea><ul class="parsley-errors-list" id="parsley-id-8896"></ul>
        </div>

        <div style="text-align: center;">
            <input type="submit" value="Renseignez-vous maintenant" class="button-primary corporate-enquiry-form-submit">
        </div>
    </div>

    <div class="alert alert-success hidden">
        Votre demande a été envoyée. Nous vous contacterons dès que possible.    </div>

</form>

<script>
    window.addEventListener('load', function() {
        $('form.enquiry-corporate').on('submit', function () {

            var $form = $(this);

            $.ajax({
                type: 'POST',
                url:  $form.attr("action"),
                data: $form.serialize(),

                success: function() {
                    $form.find('.inputs').hide();
                    $form.find('.alert-success').show();
                }
            });

            return false;
        });
    });
</script>
    </div>
    <div class="clear"></div>
  </section>
  <div class="divider-wrap">
    <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
  </div>
<section id="how-it-works" class="content-section">
  <h2 class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Comment ça marche ?</h2>
  <strong class="sub-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Commandez en seulement 3 étapes</strong>
  <div class="wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
    <img src="/assets/images/why-21.jpg" alt="" style="height: 300px;width: 458px;">
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


<div class="divider-wrap mobile-hidden">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>
<!--section id="area-served" class="content-section mobile-hidden">
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
          background: url(/assets/images/why-2.png) center top no-repeat;
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
</section>-->

</section>





</div>
</div>



@endsection
