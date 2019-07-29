@extends('layouts.menu-dashboard')

@section('title', 'Mes adresses')

@section('description', 'À la maison, au bureau ou dans un parc (qui sait!) Elavoo se déplace partout.')
@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body text-center">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 m-b-lg m-t-lg">
              <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#AddressModal">
                <i class="pe-7s-plus fa fa-address-card font-1 plus-address  m-t-lg m-b-md" title="Add address"></i>
                <br>Ajouter une adresse
              </button>
            </div>
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



    <form id="addressForm" novalidate="novalidate">


          <div class="modal-body">
            <div class="container-full">
              <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                  <div class="row">
                    <fieldset class="title">
                      <legend class="hr-divider text-primary">Adresse</legend>








      <div class="form-group">








      <input type="text" class="address form-control" name="address" placeholder="Adresse" required="" data-schema-key="address" autocomplete="off">





      <span class="help-block"></span>
    </div>















      <div class="form-group">








      <input type="text" class="postCode form-control" name="postCode" placeholder="Code postal" data-geo="postal_code" required="" data-schema-key="postCode">





      <span class="help-block"></span>
    </div>















      <div class="form-group">








      <input type="text" class="city form-control" name="city" placeholder="Ville" data-geo="locality" required="" data-schema-key="city">





      <span class="help-block"></span>
    </div>














      <input type="hidden" name="lat" data-geo="lat" data-schema-key="lat">












      <input type="hidden" name="lng" data-geo="lng" data-schema-key="lng">





                  </fieldset>

                  <fieldset class="title">
                    <legend class="hr-divider text-primary">Informations</legend>









      <div class="form-group">








      <input type="text" class="name form-control" name="name" placeholder="Nom de l'adresse (maison, bureau...)" required="" data-schema-key="name">





      <span class="help-block"></span>
    </div>















      <div class="form-group">








      <textarea class="notes form-control" name="notes" placeholder="Digicode, étage… Soyez le plus précis possible pour faciliter le travail de notre Groom" rows="5" required="" data-schema-key="notes"></textarea>





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


@endsection
