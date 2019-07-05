<html class=" ">

<head>
  <link rel="stylesheet" href="/css/style-dashboard.css">
  <title>@yield('title') | Tableau de Bord | Elavoo</title>

</head>

<body class="" style="min-height: 0px;" cz-shortcut-listen="true">

    <div id="header">
        <div id="logo" class="light-version">
            <span>
                <a class="logo-inside" href="/order">
                    <img src="/images/logo.png" alt="Cleanio">
                </a>
            </span>
        </div>
        <nav role="navigation">
            <div class="small-logo">
                <span>
                    <a class="logo-inside" href="/order">
                        <img src="http://res.cloudinary.com/getcleanio/image/upload/v1465314781/logo-blue-bowtie-only.png" alt="Cleanio" class="img-small-logo">
                    </a>
                </span>
            </div>
            <div class="mobile-menu">
                <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                    <i class="fa fa-bars fa-2x text-primary"></i>
                </button>
                <div class="collapse mobile-navbar" id="mobile-collapse">
                    <ul class="nav navbar-nav">
                        <li class="navbar-menu-border">
                            <a class="menu nav-side-active" href="/order"><span class="text-warning">Commander</span></a>
                        </li>

                        <li class="navbar-menu-border">
                            <a class="menu" href="/lastorders"><span class="text-warning">Mes commandes</span></a>
                        </li>
                        <li class="navbar-menu-border">
                            <a class="menu" href="/addresses"><span class="text-warning">Adresses</span></a>
                        </li>


                        <li class="navbar-menu-border">
                            <a class="menu" href="/creditcards"><span class="text-warning">Paiement</span></a>
                        </li>
                        <li class="navbar-menu-border">
                            <a class="menu" href="/prices"><span class="text-warning">Tarifs</span></a>
                        </li>
                        <li class="navbar-menu-border">
                            <a class="menu" href="/account"><span class="text-warning">Profil</span></a>
                        </li>


                        <li class="navbar-menu-border">
                            <a href="" class="goOut menu">
                                <span class="text-warning">Déconnexion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav no-borders">
                    <li class="dropdown">
                        <a href="" class="goOut menu">
                            <i class="pe-7s-upload pe-rotate-90"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- sd-menu -->

    <aside id="menu">
        <div id="navigation">
            <div class="profile-picture">

                <img class="profilPic img-circle m-b pointer" src="/images/defaultprofilpic.svg">


                <div class="col-sm-offset-4 hidden">
                    <input id="upload-pic" type="file" accept="image/*">
                </div>


                <div class="stats-label text-color">
                    <span class="font-extra-bold font-uppercase">David Yao</span>
                </div>
                <div class="form-group m-t-sm">

                </div>
            </div>
            <ul class="nav" id="side-menu">
                <li>
                    <a class="menu nav-side-active" href="/order"><span class="pe-7s-cart fa-2x icon-menu-color"></span>

                        Commander

                    </a>
                </li>
                <li>
                    <a class="menu" href="/lastorders"><span class="pe-7s-display2 fa-2x icon-menu-color"></span> Mes commandes</a>
                </li>
                <li>
                    <a class="menu" href="/addresses"><span class="pe-7s-bookmarks fa-2x icon-menu-color"></span> Adresses</a>
                </li>

                <li>
                    <a class="menu" href="/prices"><span class="pe-7s-calculator fa-2x icon-menu-color"></span> Tarifs</a>
                </li>
                <li>
                    <a class="menu" href="/account"><span class="pe-7s-user fa-2x icon-menu-color"></span> Profil</a>
                </li>

                <li>
                    <a class="menu" href="/preferences">
                        <span class="pe-7s-tools fa-2x icon-menu-color"></span> Préférences
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    @yield('content')

  </body>
  </html>
