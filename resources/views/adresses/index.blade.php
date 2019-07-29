@extends('layouts.menu-dashboard')

@section('title', 'Mes adresses')

@section('description', 'À la maison, au bureau ou dans un parc (qui sait!) Elavoo se déplace partout.')
@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body text-center">

            <div class="col-lg-4">
              <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#AddressModal">
                <i class="pe-7s-plus fa fa-address-card font-1 plus-address  m-t-lg m-b-md" title="Add address"></i>
                <br>Ajouter une adresse
              </button>

            </div>

                @if(Auth::user()->adresses)
                  @foreach(Auth::user()->adresses as $adress)
                  <div class="col-lg-4">
                  <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#EditAdressModal{{$adress->id}}">
                    {{$adress->town}}
                  </button>
                  </div>
                  @endforeach
                @endif

          </div>
        </div>
      </div>
    </div>
  </div>


  <!--popup-->

  <div class="modal fade" id="AddressModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Ajouter une adresse</h3>
          </div>



    <form method="post" enctype="multipart/form-data" action="{{route('adresses.store')}}" id="addressForm" novalidate="novalidate">
        @csrf

          <div class="modal-body">
            <div class="container-full">
              <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                  <div class="row">
                    <fieldset class="title">
                      <legend class="hr-divider text-primary">Adresse</legend>








      <div class="form-group">








      <input type="text" class="address form-control" name="city" placeholder="Ville" required data-schema-key="address" autocomplete="off">





      <span class="help-block"></span>
    </div>















      <div class="form-group">








      <input type="text" class="postCode form-control" name="state" placeholder="Commune" data-geo="postal_code" required data-schema-key="postCode">





      <span class="help-block"></span>
    </div>















      <div class="form-group">








      <input type="text" class="city form-control" name="town" placeholder="Quartier" data-geo="locality" required data-schema-key="city">





      <span class="help-block"></span>
    </div>

    <div style="display: none;" class="form-group">








    <input value="{{Auth::user()->id}}" type="text" class="city form-control" name="user_id" placeholder="Quartier" data-geo="locality" required data-schema-key="city">





    <span class="help-block"></span>
  </div>


                  </fieldset>

                  <fieldset class="title">
                    <legend class="hr-divider text-primary">Informations</legend>



      <div class="form-group">



      <textarea class="notes form-control" name="infos" placeholder="Rue, étage… Soyez le plus précis possible pour faciliter le travail de nos livreurs" rows="5" required data-schema-key="notes"></textarea>


      <span class="help-block"></span>
    </div>






                  </fieldset>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <button type="reset" data-dismiss="modal" class="cancel btn btn-default pull-left">Annuler</button>
          </div>


    </form>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>


    @if(Auth::user()->adresses)
      @foreach(Auth::user()->adresses as $adress)
        <!--popup-->

        <div class="modal fade" id="EditAdressModal{{$adress->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Modifier l'adresse</h3>
                </div>



          <form method="post" enctype="multipart/form-data" action="{{ url('adresses', $adress) }}" id="addressForm" novalidate="novalidate">
              @csrf
              {{ method_field('patch') }}

                <div class="modal-body">
                  <div class="container-full">
                    <div class="row">
                      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="row">
                          <fieldset class="title">
                            <legend class="hr-divider text-primary">Adresse</legend>








            <div class="form-group">








            <input value="{{$adress->city}}" type="text" class="address form-control" name="city" placeholder="Ville" required data-schema-key="address" autocomplete="off">





            <span class="help-block"></span>
          </div>















            <div class="form-group">








            <input value="{{$adress->state}}" type="text" class="postCode form-control" name="state" placeholder="Commune" data-geo="postal_code" required data-schema-key="postCode">





            <span class="help-block"></span>
          </div>















            <div class="form-group">








            <input value="{{$adress->town}}" type="text" class="city form-control" name="town" placeholder="Quartier" data-geo="locality" required data-schema-key="city">





            <span class="help-block"></span>
          </div>

          <div style="display: none;" class="form-group">








          <input value="{{Auth::user()->id}}" type="text" class="city form-control" name="user_id" placeholder="Quartier" data-geo="locality" required data-schema-key="city">





          <span class="help-block"></span>
        </div>


                        </fieldset>

                        <fieldset class="title">
                          <legend class="hr-divider text-primary">Informations</legend>



            <div class="form-group">



            <textarea class="notes form-control" name="infos"  rows="5" required data-schema-key="notes">{{$adress->infos}}</textarea>


            <span class="help-block"></span>
          </div>






                        </fieldset>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Modifier</button>
                  <button type="reset" data-dismiss="modal" class="cancel btn btn-default pull-left">Annuler</button>
                </div>


          </form>

              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>
        @endforeach
    @endif


@endsection
