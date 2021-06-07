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
                <a class="menu nav-side-active" href="{{route('items.index')}}"><span class="text-warning">Commandez</span></a>
            </li>


            <li class="navbar-menu-border">
                <a class="menu" href="{{route('adresses.index')}}"><span class="text-warning">Adresses</span></a>
            </li>



            <li class="navbar-menu-border">
                <a class="menu" href="{{route('users.edit', Auth::user())}}"><span class="text-warning">Profil</span></a>
            </li>


            <li class="navbar-menu-border">
                <a class="menu" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"><span class=" icon-menu-color"><i class="fa fa-sign-out-alt"></i></span> Déconnexion</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
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

    <img class="profilPic img-circle m-b pointer" src="/{{Auth::user()->image}}">





    <div class="stats-label text-color">
        <span class="font-extra-bold font-uppercase">{{Auth::user()->name}}</span>
    </div>
    <div class="form-group m-t-sm">

    </div>
</div>
<ul class="nav" id="side-menu">
  <li>
      <a class="menu" href="/home"><span class=" icon-menu-color"><i class="fa fa-shopping-basket"></i></span> Mes commandes</a>
  </li>
    <li>
        <a class="menu nav-side-active" href="{{route('items.index')}}"><span class="icon-menu-color"><i class="fa fa-shopping-basket"></i></span>

            Commandez

        </a>
    </li>

    <li>
        <a class="menu" href="{{route('adresses.index')}}"><span class="icon-menu-color"><i class="fa fa-address-card"></i></span> Adresses</a>
    </li>


    <li>
        <a class="menu" href="{{route('users.edit', Auth::user())}}"><span class="icon-menu-color"><i class="fa fa-user"></i></span> Profil</a>
    </li>

    <li>
        <a class="menu" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><span class=" icon-menu-color"><i class="fa fa-sign-out-alt"></i></span> Déconnexion</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
    </li>


</ul>
</div>
</aside>
