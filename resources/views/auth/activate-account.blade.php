
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
                    <h3 class="text-primary text-center m-t-10"><a href="/home" style="color: #0076B2;font-size:16px"><i class="fa fa-user"></i>&nbsp;Tableau de bord</a></h3>
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
                    <h3 class="text-primary text-center m-t-10"><a href="{{route('account.send_account_activation')}}" style="color: #0076B2;font-size:16px">Je n'ai pas réçu de code d'activation</a></h3>
                @endif

                <ul class="login-more p-t-190">
                    <li class="m-b-8">
                        <a href="/" class="txt2">
                            <i class="fa fa-home"></i>&nbsp;Retour à la pae d'accueil
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


@endsection
