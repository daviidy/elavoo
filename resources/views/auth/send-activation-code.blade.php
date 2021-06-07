
@extends('layouts.menu-form-auth')

@section('title', 'Connexion')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form method="POST" action="{{ route('account.send_account_activation_mail') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-70">
                    Activation de compte
                    <h3 class="text-primary text-center m-t-10"><a href="/" style="color: #0076B2;font-size:16px"><i class="fa fa-home"></i>&nbsp;Page d'accueil</a></h3>
                </span>
                <span class="login100-form-avatar">
                  <a href="/"> <img src="/assets/logos/elavoo_black.png" alt="AVATAR"></a>
                </span>

                @if(\Session::get('success'))
                    <div class="alert alert-success m-t-50">
                        <b>{{ \Session::get('success') }}</b>
                    </div>
                @elseif(\Session::get('error'))
                    <div class="alert alert-danger m-t-50">
                        <b>{{ \Session::get('error') }}</b>
                    </div>
                    <h3 class="text-primary text-center m-t-10"><a href="{{route('account.send_account_activation')}}" style="color: #0076B2;font-size:16px">Réessayer à nouveau</a></h3>
                @else
                    <div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Enter username">
                        <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')
                            <small class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Envoyer un mail d'activation
                        </button>
                    </div>
                @enderror

                <ul class="login-more p-t-190">
                    <li>
                        <span class="txt1">
                            Nouveau ?
                        </span>

                        <a href="{{ route('register') }}" class="txt2">
                            Inscrivez-vous
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
