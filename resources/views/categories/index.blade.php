@extends('layouts.menu-dashboard')

@section('title', 'Catégories d\'article')

@section('description', 'Femmes, enfants ou ce que vous voulez !')
@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body text-center">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 m-b-lg m-t-lg">
              <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#CategoryModal">
                <i class="pe-7s-plus fa-5x plus-address  m-t-lg m-b-md" title="Add address"></i>
                <br>Ajouter une catégorie
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--popup-->

  <div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Ajouter une catégorie</h3>
          </div>



    <form method="post" enctype="multipart/form-data" action="{{route('categories.store')}}" id="addressForm" novalidate="novalidate">
      @csrf


          <div class="modal-body">
            <div class="container-full">
              <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                  <div class="row">
                    <fieldset class="title">
                      <legend class="hr-divider text-primary">Catégorie</legend>








      <div class="form-group">








      <input type="text" class="address form-control" name="name" placeholder="Nom de la catégorie" required="" data-schema-key="address" autocomplete="off">





      <span class="help-block"></span>
    </div>







































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
