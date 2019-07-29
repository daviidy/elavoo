
@extends('layouts.menu-login')

@section('content')

<div class="limiter" id="log1">
  <div class="container-login100">
    <div class="wrap-login100">
      <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
        @csrf
        <span class="login100-form-title p-b-26">
          Se connecter
        </span>
        <span class="login100-form-title p-b-48">
          <img src="/assets/logos/elavoo_black.png" alt="logo_elavoo" width="150">

        </span>

        <div class="wrap-input100 validate-input" data-validate = "Un email valide est du type: a@b.c">
          <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <span class="focus-input100" data-placeholder="Email"></span>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrer un mot de passe">
          <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
          </span>
          <input id="password" class="input100  @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
          <span class="focus-input100" data-placeholder="Mot de passe"></span>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="wrap-input100 validate-input">
          <span>
            <input id="remember" class="input100" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="">Se souvenir de moi</label>
          </span>

        </div>

        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
              Se connecter
            </button>
          </div>
        </div>

        <div class="text-center p-t-115">
          Nouveau ?
          </span>

          <a class="txt2" href="#" onclick="register()">
            Inscrivez-vous
          </a>
        </div>
        @if (Route::has('password.request'))
        <div class="text-center p-t-115">
          <span class="txt1">
            <a href="{{ route('password.request') }}">
              Mot de passe oublié ?
            </a>
          </span>
        </div>
        @endif
      </form>
    </div>
  </div>
</div>


<div id="dropDownSelect1"></div>



<div class="limiter" style="display: none;position: absolute; top: 0px;" id="reg1">
  <div class="container-login100">
    <div class="wrap-login100">
      <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
        @csrf
        <span class="login100-form-title p-b-26">
          S'inscrire
        </span>
        <span class="login100-form-title p-b-48">
          <img src="/assets/logos/elavoo_black.png" alt="logo_elavoo" width="150">
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Entrer un nom d'utilisateur valide">
          <input id="name-2" class="input100-1 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          <span class="focus-input100" data-placeholder="Nom d'utilisateur"></span>
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Un email valide est du type: a@b.c">
          <input id="email-2" class="input100-1 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <span class="focus-input100" data-placeholder="Email"></span>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrer un mot de passe">
          <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
          </span>
          <input id="password-2" class="input100-1  @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
          <span class="focus-input100" data-placeholder="Mot de passe"></span>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="wrap-input100 validate-input" data-validate="Les mots de passe ne correspondent pas">
          <span class="btn-show-pass">
            <i class="zmdi zmdi-eye"></i>
          </span>
          <input id="password-confirm-2" class="input100-1" type="password" name="password_confirmation" required autocomplete="new-password">
          <span class="focus-input100" data-placeholder="Confirmer le mot de passe"></span>

        </div>



        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
              S'inscrire
            </button>
          </div>
        </div>

        <div class="text-center p-t-115">
          <span class="txt1">
            Vous avez déjà un compte ?
          </span>

          <a class="txt2 txt3" href="#" onclick="register1()">
            COnnectez-vous
          </a>
        </div>
        @if (Route::has('password.request'))
        <div class="text-center p-t-115">
          <span class="txt1">
            <a href="{{ route('password.request') }}">
              Mot de passe oublié ?
            </a>
          </span>
        </div>
        @endif
      </form>
    </div>
  </div>
</div>


<div id="dropDownSelect2"></div>


@endsection
