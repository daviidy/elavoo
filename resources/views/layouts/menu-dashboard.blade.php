<html class=" ">

<head>
  <link rel="stylesheet" href="/css/style-dashboard.css">
  <title>@yield('title') | Tableau de Bord | Elavoo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
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
                <a class="logo-inside" href="/">
                    <img style="width: 60%;" src="/assets/logos/elavoo_black.png" alt="Elavoo">
                </a>
            </span>
        </div>
        <nav role="navigation">
            <div class="small-logo">
                <span>
                    <a class="logo-inside" href="/">
                        <img src="/assets/logos/elavoo_black.png" alt="Cleanio" class="img-small-logo">
                    </a>
                </span>
            </div>
            @if(Auth::user()->isAdmin())
            @include('includes.dashboard.menu-admin')
            @else
            @include('includes.dashboard.menu-default')
            @endif


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
