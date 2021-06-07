<html class=" ">

<head>
  <link rel="stylesheet" href="/css/style-dashboard.css">
  <meta content="width=device-width,initial-scale=1.0,user-scalable=no" name="viewport">
  <title>@yield('title') | Tableau de Bord | Elavoo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        .notif-div {
            width: 500px !important;
            padding: 15px;
            border-bottom: 1px solid #34495e;
            padding-top:10px;
            padding-bottom:5px;
        }
        .notif-div:hover {
            background: #D9EDF7;
        }
    </style>

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

        <div class="btn-group" id="notificationView">
            @include('includes.notifications')
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
            @elseif(Auth::user()->isDeliver())
            @include('includes.dashboard.menu-deliver')
            @elseif(Auth::user()->isPressing())
            @include('includes.dashboard.menu-pressing')
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
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>


    <script>
        $(document).ready( function () {
            $('#myDataTable').DataTable();
        } );
    </script>

    <script>

        var pusher = new Pusher('cf4fcfe6fc9f933d6fd7', {
            cluster: 'eu'
        });
        // - channels
        var admin_channel = pusher.subscribe('admin-channel');

        // - events
        admin_channel.bind('order-notification', function(data) {
            $.ajax({
                type: 'GET',
                url:  "{{route('notifications.index')}}",
                // data: $form.serialize(),
                beforeSend: function() {
                    //
                },
                success: function(data) {
                    $('#notificationView').html(data)
                },
                error:function(xhr){
                    // NProgress.done();
                    console.log('Problème de raffraichissement notifications')
                }
            });
            // console.log('data',data);
        });

    </script>
  </body>
  </html
