<div class="mobile-menu">
    <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
        <i class="fa fa-bars fa-2x text-primary"></i>
    </button>
    <div class="collapse mobile-navbar" id="mobile-collapse">
        <ul class="nav navbar-nav">

          <li class="navbar-menu-border">
              <a class="menu" href="/home"><span class="text-warning">Commandes</span></a>
          </li>


            <li class="navbar-menu-border">
                <a class="menu" href="#"><span class="text-warning">Articles</span></a>
            </li>

            <li class="navbar-menu-border">
                <a class="menu" href="{{route('categories.index')}}"><span class="text-warning">Catégories</span></a>
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
      <a class="menu" href="/home"><span class="pe-7s-display2 fa-2x icon-menu-color"></span> Commandes</a>
  </li>


    <li>
        <a class="menu" href="#" data-toggle="modal" data-target="#ItemModal"><span class="pe-7s-bookmarks fa-2x icon-menu-color"></span> Articles</a>
    </li>

    <li>
        <a class="menu" href="{{route('categories.index')}}"><span class="pe-7s-bookmarks fa-2x icon-menu-color"></span> Catégories</a>
    </li>


    <li>
        <a class="menu" href="{{route('users.edit', Auth::user())}}"><span class="pe-7s-user fa-2x icon-menu-color"></span> Profil</a>
    </li>


</ul>
</div>
</aside>


<!--popup-->

<div class="modal fade" id="ItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Articles</h3>
        </div>





        <div class="modal-body">
          <div class="container-full">
            <div class="row">
              <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="row">


                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{route('items.create')}}">
                      <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#AddressModal">
                        <i class="pe-7s-plus fa-5x plus-address  m-t-lg m-b-md" title="Add address"></i>
                        <br>Ajouter un article
                      </button>
                    </a>
                  </div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{route('items.index')}}">
                      <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#AddressModal">
                        <i class="pe-7s-plus fa-5x plus-address  m-t-lg m-b-md" title="Add address"></i>
                        <br>Voir les articles
                      </button>
                    </a>
                  </div>





                </div>
              </div>
            </div>
          </div>
        </div>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
