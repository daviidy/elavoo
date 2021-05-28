
@extends('layouts.menu-form-auth')

@section('title', 'Connexion')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-70">
                    Activation de compte
                    <h3 class="text-primary text-center m-t-10"><a href="/home" style="color: #0076B2;font-size:16px"><i class="fa fa-home"></i>&nbsp;Tableau de bord</a></h3>
                </span>
                <span class="login100-form-avatar">
                  <a href="/"> <img src="/assets/logos/elavoo_black.png" alt="AVATAR"></a>
                </span>

                @if (\Session::get('success'))
                    <div class="alert alert-success m-t-50">
                        <b>{{Session::get('success')}}</b>
                    </div>
                @elseif (\Session::get('error'))
                    <div class="alert alert-danger m-t-50">
                        <b>{{Session::get('error')}}</b>
                    </div>
                @else
                    <div class="alert alert-success m-t-50">
                        <b>Vous devez activer votre compte avant de continuer. <br>Nous avons envoyé un mail d'activation de compte dans votre boîte mail.</b>
                        {{-- <b>Nous avons envoyé un mail d'activation de compte dans votre boîte mail. <br>Vous devez activer votre compte avant de continuer.</b> --}}
                    </div>
                @endif

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
