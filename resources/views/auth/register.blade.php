
@extends('layouts.menu-form-auth')

@section('title', 'Inscription')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-70">
                    Bienvenue, inscrivez-vous.
                    <h3 class="text-primary text-center m-t-10"><a href="/" style="color: #0076B2;font-size:16px"><i class="fa fa-home"></i>&nbsp;Page d'accueil</a></h3>
                </span>
                <span class="login100-form-avatar">
                  <a href="/"> <img src="/assets/logos/elavoo_black.png" alt="AVATAR"></a>
                </span>

                <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                    <input id="name" class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="focus-input100" data-placeholder="Nom d'utilisateur"></span>
                    @error('name')
                        <small class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100" data-placeholder="Email"></span>
                    @error('email')
                        <small class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input id="password" class="input100  @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                    <span class="focus-input100" data-placeholder="Mot de passe"></span>
                    @error('password')
                        <small class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input id="password-confirm" class="input100" type="password" name="password_confirmation" required autocomplete="new-password">
                    <span class="focus-input100" data-placeholder="Confirmer le mot de passe"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        S'inscrire
                    </button>
                </div>

                <ul class="login-more p-t-190">
                    <li class="m-b-8">
                        <span class="txt1">
                            Oups!
                        </span>

                        <a href="{{ route('password.request') }}" class="txt2">
                            J'ai oublié mon mot de passe
                        </a>
                    </li>

                    <li>
                        <span class="txt1">
                            Vous avez déjà un compte ?
                        </span>

                        <a href="{{ route('login') }}" class="txt2">
                            Connectez-vous
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


@endsection
