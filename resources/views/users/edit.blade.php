@extends('layouts.menu-dashboard')

@section('title', 'Profil')

@section('description', '« Papiers s’il vous plaît ! »')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/css/intlTelInput.css">

<style>
    .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/img/flags.png") !important;}

    @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
    .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/img/flags@2x.png") !important;}
    }
</style>



<div class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="hpanel hnavyblue">
                <div class="panel-heading hbuilt text-center">
                    <i class="pe-7s-id fa fa-user text-warning font-1"></i>
                </div>
                <div class="panel-body text-center">



                    <form method="post" id="updateUserForm" enctype="multipart/form-data" action="{{ url('users', Auth::user()) }}">



                        {{ csrf_field() }}
                        {{ method_field('patch') }}


                        @if(Auth::user()->isDeliver())
                        <div class="form-group">








                            <select disabled name="status" required="" class="form-control">
                                @if(Auth::user()->status == 'available')
                                <option selected value="available">Disponible</option>
                                <option value="busy">Occupé</option>
                                @else
                                <option value="available">Disponible</option>
                                <option selected value="busy">Occupé</option>
                                @endif
                            </select>





                            <span class="help-block"></span>
                        </div>
                        @endif



                        <div class="form-group">








                            <input disabled type="text" name="email" value="{{Auth::user()->email}}" required="" class="form-control">





                            <span class="help-block"></span>
                        </div>

                        @if(Auth::user()->code)
                        <div class="form-group">








                            <input disabled type="text" name="code" value="{{Auth::user()->code}}" required="" class="form-control">





                            <span class="help-block"></span>
                        </div>
                        @endif










                        <div class="form-group">








                            <input type="text" name="first_name" value="{{Auth::user()->first_name}}" class="form-control">





                            <span class="help-block"></span>
                        </div>










                        <div class="form-group">








                            <input type="text" class="change-lastname form-control" name="last_name" value="{{Auth::user()->last_name}}">





                            <span class="help-block"></span>
                        </div>






                        <p>Téléphone ({{Auth::user()->tel ? "+".Auth::user()->tel : 'Aucun'}}) </p>








                        <div class="form-group">








                            <div class="intl-tel-input">
                                <input id="phone" type="text" name="tel"  class="form-control">
                            </div>





                            <span class="help-block"></span>
                        </div

                        <p>Photo de profil </p>








                        <div class="form-group">








                            <div class="intl-tel-input">
                                <input type="file" name="image" class="form-control">
                            </div>





                            <span class="help-block"></span>
                        </div>






                        <button type="submit" id="submitChanges" class="btn btn-primary m-t-sm"><i class="fa fa-rotate-right"></i> METTRE À JOUR</button>


                    </form>

                </div>
            </div>
        </div>
        <!--
        <div class="col-md-6">
            <div class="hpanel hnavyblue">
                <div class="panel-heading hbuilt text-center">
                    <i class="pe-7s-key fa-4x text-warning"></i>
                </div>
                <div class="panel-body text-center">
                    <div class="form-group">



                        <form id="updatePasswordForm" novalidate="novalidate">

                            <div class="form-group">


                                <input type="password" name="oldPassword" placeholder="Mot de passe actuel" required="" data-schema-key="oldPassword" class="form-control">

                                <span class="help-block"></span>
                            </div>










                            <div class="form-group">








                                <input type="password" name="newPassword" placeholder="Nouveau mot de passe" required="" data-schema-key="newPassword" class="form-control">





                                <span class="help-block"></span>
                            </div>






                            <div class="col-md-12 m-t-lg">
                                <button type="submit" class="btn btn-primary m-t-xl"><i class="fa fa-exchange"></i> CHANGER DE MOT DE PASSE</button>
                            </div>
                            <div class="col-md-12 m-t-xl m-b-md">
                                <a href="/deleteaccount" class="text-danger"><i class="fa fa-trash-o"></i> SUPPRIMER VOTRE COMPTE</a>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
      -->
        <!--end col-->
    </div>
</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput.js"></script>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {

    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js",
    preferredCountries: ["ci", "sn", "cm", "ml"],
    autoPlaceholder: "aggressive",
    hiddenInput: "full",

  });
</script>


@endsection
