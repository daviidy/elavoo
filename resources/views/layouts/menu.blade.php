<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pressing tarifs à Abidjan | Pressing à domicile | Elavoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style-homepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="/js/index.js" type="text/javascript"></script>
    <script src="/js/jQuery_cookie.js" type="text/javascript"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
<body class="mapflow fr lang-fr brand-zipjet-vanilla home" cz-shortcut-listen="true">


  <!-- main container of all the page elements -->
  <div class="mobile-menu">
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu-container" id="mobile-menu-container" style="height: 435px;">

      <div class="mobile-menu-logo-container">
        <a href="/">
          <img src="/assets/logos/elavoo_black.png" alt="Pressings Abidjan | Récupération et Livraison sous 24h | Elavo
  " class="logo-icon">
          <!--img src="/assets/logos/elavoo_1.png" alt="Pressings Abidjan | Récupération et Livraison sous 24h | Elavoo
  " class="logo-text"-->
        </a>
      </div>


      <ul class="mobile-menu-list" style="height: 463px;">
        <li class="mobile-menu-item">
          <a href="{{route('items.index')}}">
            Nouvelle commande </a>
        </li>

        <!--li class="mobile-menu-item">

          <a href="/comment-ca-marche">
            Comment ça marche ? </a>
        </li-->

        <li class="mobile-menu-item">
          <a href="{{route('items.index')}}">
            Tarifs </a>
        </li>

        <li class="mobile-menu-item">
          <a href="/corporate">
            Entreprise </a>
        </li>

        <!--li class="mobile-menu-item">
          <span>Légal</span>
          <ul>
            <li>
              <a href="/politique-de-confidentialite">
                Politique de confidentialité </a>
            </li>

            <li>
              <a href="/cgv">
                CGV </a>
            </li>

            <li>
              <a href="/mentions-legales">
                Mentions légales </a>
            </li>
          </ul>
        </li>

        <li class="mobile-menu-item">
          <a href="https://zipjet.zendesk.com/hc/fr-fr" target="_blank">
            Aide </a>
        </li>

        <li class="mobile-menu-item">
          <a href="https://www.zipjet.fr/en/paris">
            Switch to English </a>
        </li-->
      </ul>

      <a href="{{ route('login') }}" class="mobile-primary-button mobile-menu-button">
        Connexion </a>


    </div>
  </div>
  <header id="header-mobile">
    <span class="mobile-menu-icon closed"><img src="https://www.zipjet.fr/assets/common/img/icon-menu-dark.svg" alt=""></span>

    <a href="/">
      <!--img src="/assets/logos/elavoo_1.png" alt="Pressings Abidjan | Récupération et Livraison sous 24h | ZipJet
  " class="logo-icon"-->
      <img src="/assets/logos/elavoo_black.png" alt="Pressings Abidjan | Récupération et Livraison sous 24h | ZipJet
  " class="logo-text logo-text-dark">
    </a>
  </header>
  <!-- main container of all the page elements -->
  <div id="wrapper" class="content homepage">
    <div class="w1">
      <div class="w2">



        <section class="top-section" data-carousel="/assets/images/banner.jpg" style="position: relative; z-index: 999; background-image: none;">

          <!-- header of the page -->
          <header id="header" class="" style="display: block; z-index: 1000;">
            <!-- header container -->
            <div class="header-holder fr" data-height="0">
              <a href="/" class="logo">
                <img src="/assets/logos/elavoo_logo.png" alt="Pressings Abidjan | Récupération et Livraison sous 24h | Elavoo
  " class="logo-text logo-text-white">

                <img src="/assets/logos/elavoo_black.png" alt="Pressings Abidjan | Récupération et Livraison sous 24h | Elavoo
  " class="logo-text logo-text-dark">
  <!--
                <img src="/assets/logos/elavo.jpg" alt="Pressings Abidjan | Récupération et Livraison sous 24h | Elavoo
  " class="logo-text logo-text-white">
-->
              </a>
              <nav id="nav">
                <!-- <a href="#" class="opener"><span>Menu</span></a> -->
                <div class="slide">

                  <div class="language-switcher">
                    <ol>
                        <!--
                      <li class="entry lang">
                        <span>fr</span>
                        <ol>
                          <li class="arrow">&nbsp;</li>
                          <li class="first">
                            <a href="https://www.zipjet.fr">
                              fr </a>
                          </li>
                          <li class="last">
                            <a href="https://www.zipjet.fr/en/paris">
                              en </a>
                          </li>
                        </ol>
                      </li>
                  -->
                      <li class="entry login">
                        <a href="{{ route('login') }}">
                          Connexion </a>
                      </li>
                    </ol>
                  </div>
                  <ul>
                    <li><a href="/corporate">Entreprise</a></li>
                    <!--<li class="download-app">
          <a href="#">Téléchargez l'app</a>
          <div class="download-app-tooltip-container">
              <div class="download-app-tooltip">
                  <img src="https://www.zipjet.fr/assets/webapp/v1/img/icons/arrow-up-bg.png" class="arrow-up" alt="">
                  <a href="https://app.adjust.com/kx5wdk?deeplink=ZIPJET://fr/c&amp;fallback=https%3A%2F%2Fitunes.apple.com%2Ffr%2Fapp%2Fzipjet-dry-cleaning-laundry%2Fid926955591" target="_blank" class="app itunes-link">
                      <img src="https://www.zipjet.fr/assets/frontend/images/apple-icon.png" height="18" width="16" alt="Zipjet - iOS"> iOS
                  </a>
                  <a href="https://app.adjust.com/dvthcv?deeplink=ZIPJET://fr/c&amp;fallback=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.zipjet.android%26hl%3Dfr" target="_blank" class="app">
                      <img src="https://www.zipjet.fr/assets/frontend/images/android-icon.png" height="20" width="17" alt="Zipjet - Android"> Android
                  </a>

  <div class="download-sms-form form-container">

      <form action="#" class="download-form" rel="top">
          <fieldset>
              <div class="col">
                  <input type="tel" class="input" placeholder="Entrez votre numero de t&eacute;l&eacute;phone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
                  <input type="submit" value="T&eacute;l&eacute;charger l&rsquo;app">
              </div>
          </fieldset>
          <div class="download-thank-you">
              Merci ! Nous vous avons envoy&eacute; un message contenant le lien de t&eacute;l&eacute;chargement de notre app.        </div>
      </form>

  </div>

              </div>
          </div>
      </li>-->
                    <li class=""><a href="{{route('items.index')}}" class="go">Tarifs</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="clear"></div>
          </header>
          <script src="/js/index.js" charset="utf-8"></script>


          @yield('content')





          @include('includes.footer')
