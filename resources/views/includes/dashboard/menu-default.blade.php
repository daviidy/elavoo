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
