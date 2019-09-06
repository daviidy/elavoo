
@extends('layouts.menu-form-auth')

@section('title', 'Connexion')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-70">
                    Connectez-vous
                </span>
                <span class="login100-form-avatar">
                    <img src="https://image.freepik.com/vecteurs-libre/afro-femme-dessin-anime-avatar_8462-1.jpg" alt="AVATAR">
                </span>

                <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                    <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100" data-placeholder="Email"></span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input id="password" class="input100  @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                    <span class="focus-input100" data-placeholder="Mot de passe"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Se connecter
                    </button>
                </div>

                <ul class="login-more p-t-190">
                    <li class="m-b-8">
                        <span class="txt1">
                            Oups !
                        </span>

                        <a href="{{ route('password.request') }}" class="txt2">
                            J'ai oublié mon mot de passe
                        </a>
                    </li>

                    <li>
                        <span class="txt1">
                            Nouveau ?
                        </span>

                        <a href="{{ route('register') }}" class="txt2">
                            Inscrivez-vous
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


@endsection
