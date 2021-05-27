
@extends('layouts.menu-form-auth')

@section('title', 'Inscription')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form method="POST" action="{{ route('password.update') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-70">
                    Réinitialisation de compte.
                </span>
                <span class="login100-form-avatar">
                  <a href="/"> <img src="/assets/logos/elavoo_black.png" alt="AVATAR"></a>
                </span>

                @if(\Session::get('error'))
                    <div class="alert alert-danger m-t-50">
                        <b>{{ \Session::get('error') }}</b>
                    </div>
                @enderror

                <div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate="Enter password">
                    <input type="hidden" name="token" value="{{$token}}">
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
                    <span class="focus-input100" data-placeholder="Nouveau Mot de passe"></span>
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
                        Réinitialiser
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection
