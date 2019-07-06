<html class=" ">

<head>
  <link rel="stylesheet" href="/css/style-dashboard.css">
  <title>@yield('title') | Tableau de Bord | Elavoo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body class="" style="min-height: 0px;" cz-shortcut-listen="true">

  @if (session('status'))
  <div style="z-index: 999;" class="w3-panel w3-red w3-display-container">
      {{ session('status') }}
  </div>
  @endif

    <div id="header">
        <div id="logo" class="light-version">
            <span>
                <a class="logo-inside" href="/order">
                    <img style="width: 60%;" src="/assets/logos/elavoo_black.png" alt="Elavoo">
                </a>
            </span>
        </div>
        <nav role="navigation">
            <div class="small-logo">
                <span>
                    <a class="logo-inside" href="/order">
                        <img src="/assets/logos/elavoo_black.png" alt="Cleanio" class="img-small-logo">
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
                          <a class="menu" href="/home"><span class="text-warning">Mes commandes</span></a>
                      </li>


                        <li class="navbar-menu-border">
                            <a class="menu nav-side-active" href="{{route('items.index')}}"><span class="text-warning">Commander</span></a>
                        </li>


                        <li class="navbar-menu-border">
                            <a class="menu" href="{{route('adresses.index')}}"><span class="text-warning">Adresses</span></a>
                        </li>



                        <li class="navbar-menu-border">
                            <a class="menu" href="{{route('users.edit', Auth::user())}}"><span class="text-warning">Profil</span></a>
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

                <img class="profilPic img-circle m-b pointer" src="/images/users/{{Auth::user()->image}}">





                <div class="stats-label text-color">
                    <span class="font-extra-bold font-uppercase">{{Auth::user()->name}}</span>
                </div>
                <div class="form-group m-t-sm">

                </div>
            </div>
            <ul class="nav" id="side-menu">
              <li>
                  <a class="menu" href="/home"><span class="pe-7s-display2 fa-2x icon-menu-color"></span> Mes commandes</a>
              </li>
                <li>
                    <a class="menu nav-side-active" href="{{route('items.index')}}"><span class="pe-7s-cart fa-2x icon-menu-color"></span>

                        Commander

                    </a>
                </li>

                <li>
                    <a class="menu" href="{{route('adresses.index')}}"><span class="pe-7s-bookmarks fa-2x icon-menu-color"></span> Adresses</a>
                </li>


                <li>
                    <a class="menu" href="{{route('users.edit', Auth::user())}}"><span class="pe-7s-user fa-2x icon-menu-color"></span> Profil</a>
                </li>


            </ul>
        </div>
    </aside>


    <div id="wrapper" style="min-height: 717px;">
        <!-- this is the wrapper for the content -->





        <div id="yield" class="side-bar-change">

            <!-- START CONTACTS SECTION -->


            <div class="normalheader transition animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hpanel">
                            <div class="panel-body">
                                <h2 class="font-normal m-b-xs">
                                    @yield('title')
                                </h2>
                                <p>
                                  @yield('description')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @yield('content')

  </body>
  </html
