@extends('layouts.menu-dashboard')

@section('title', 'Catégories d\'article')

@section('description', 'Femmes, enfants ou ce que vous voulez !')
@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body text-center">

            <div class="col-lg-4">
              <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#CategoryModal">
                <i class="pe-7s-plus fa fa-certificate plus-address  m-t-lg m-b-md" title="Add address"></i>
                <br>Ajouter une catégorie
              </button>
            </div>

            @if($categories)
              @foreach($categories as $category)
              <div class="col-lg-4">
              <button style="background: #fff;" type="button" class="btn btn-block btn-outline btn-primary address-button" id="showModal" data-toggle="modal" data-target="#EditCategoryModal{{$category->id}}">
                {{$category->name}}
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





    <!--popup-->
    @if($categories)
      @foreach($categories as $category)
    <div class="modal fade" id="EditCategoryModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Modifier une catégorie</h3>
            </div>



      <form method="post" enctype="multipart/form-data" action="{{url('categories', $category)}}" id="addressForm" novalidate="novalidate">
        @csrf
        {{method_field('patch')}}


            <div class="modal-body">
              <div class="container-full">
                <div class="row">
                  <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <fieldset class="title">
                        <legend class="hr-divider text-primary">Catégorie</legend>

        <div class="form-group">
        <input value="{{$category->name}}" type="text" class="address form-control" name="name" placeholder="Nom de la catégorie" required="" data-schema-key="address" autocomplete="off">
        <span class="help-block"></span>
      </div>


      <div class="form-group">
        <select class="input100" required name="visible" id="">
            <option {{$category->visible == 1 ? 'selected' : ''}} value="1">Visible</option>
            <option {{$category->visible == 0 ? 'selected' : ''}} value="0">Pas visible</option>
          </select>
        <span class="help-block"></span>
      </div>
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
