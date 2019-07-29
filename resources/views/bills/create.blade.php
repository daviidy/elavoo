@extends('layouts.menu-list-items')

@section('content')

<div style="margin-top: 3rem;" class="content-section">




    <div class="container">
        <div class="content-container content-container-contact">
            <div class="row">
                <div class="content-header">
                    <h1>Merci de renseigner vos coordonnées pour la récupération et livraison de votre linge.</h1>
                    <p><a href="{{route('login')}}">Déjà client chez nous ? Connectez vous ici</a></p>
                </div>
            </div>



            <div class="row">
                <div id="new-customer-address-container">
                    <form method="post" id="contact-form">
                        @csrf

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-five offset-by-one five columns">
                                <label class="formal--label">Prénom</label>
                                @auth
                                <input value="{{Auth::user()->first_name}}" class="formal--control form-control" name="first_name" value="" placeholder="Votre prénom" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="first_name" value="" placeholder="Votre prénom" type="text">
                                @endauth
                            </div>
                            <div class="tablet-five five columns">
                                <label class="formal--label">Nom</label>
                                @auth
                                <input value="{{Auth::user()->last_name}}" class="formal--control form-control" name="last_name" value="" placeholder="Votre nom" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="last_name" value="" placeholder="Votre nom" type="text">
                                @endauth
                            </div>
                        </div>

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one five columns">
                                <label class="formal--label">Email</label>
                                @auth
                                <input disabled value="{{Auth::user()->email}}" class="formal--control form-control" name="email" value="" placeholder="Votre email" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="email" value="" placeholder="Votre email" type="text">
                                @endauth
                            </div>

                            <div class="tablet-five five columns">
                                <label class="formal--label">Numéro de téléphone</label>
                                @auth
                                <input value="{{Auth::user()->tel}}" class="formal--control form-control" name="tel" value="" placeholder="Numéro mobile" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="tel" value="" placeholder="Numéro mobile" type="text">
                                @endauth
                            </div>


                        </div>

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one ten columns map-pin-input-container" style="position: relative;">

                                <label for="form-addressLine" class="formal--label">Choisissez une adresse</label>
                                <a data-toggle="modal" data-target="#myModalAdress" href="#">Ou créer une nouvelle adresse</a>
                                <select class="formal--control form-control" id="form-addressLine" name="adress_id">
                                    @auth
                                    @if(Auth::user()->adresses)
                                      @foreach(Auth::user()->adresses as $adress)
                                      <option value="$adress->id">{{$adress->city}}-{{$adress->state}}-{{$adress->town}}</option>
                                      @endforeach
                                     @endif
                                     @endauth
                                </select>
                            </div>

                        </div>




                        <div class="submit-block">
                            <input type="submit" class="btn-submit" value="Continuer">
                        </div>
                    </form>
                </div>




            </div>
        </div>
    </div>



    <div class="modal fade in" id="myModalAdress" style="display: none; padding-left: 0px;">
                  <div class="modal-dialog">
                  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                  <h4 style="font-size: 24px;" class="modal-title">Créer une adresse</h4>
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                          <p>&nbsp;</p><h2><strong>Qu'est ce qui a été réalisé pendant la session ?</strong></h2><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h2><strong>Que doit faire l'étudiant pour la prochaine session ?</strong></h2><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p></p>

                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                  </div>

                  </div>
                  </div>
                  </div>





</div>

@endsection
