@extends('layouts.menu-dashboard')

@section('title', 'Liste des utilisateurs')


@section('description', 'Voici la liste des utilisateurs du site')


@section('content')


<div class="content">
    <div class="row">

      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body">
            <div class="stats-title">
              <h4>Liste</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>
                      Nom d'utilisateur
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Nom complet
                    </th>
                    <th>
                      Type
                    </th>


                  </tr>
                  @if($users)
                  @foreach($users as $user)
                  <tr>
                      <td> <a href="{{url('users', $user)}}">{{$user->name}}</a> </td>
                      <td>
                          {{$user->email}}
                      </td>
                      <td>{{$user->first_name}} {{$user->last_name}}</td>
                      <td>{{$user->type}} ( <a href="#" data-toggle="modal" data-target="#EditUserTypeModal{{$user->id}}"> <strong>changer rôle ou code</strong> </a> )</td>
                  </tr>
                  @endforeach
                  @endif

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


            <!-- END BOTTOM BAR SECTION -->

        </div>
    </div>



    <!--popup-->
    @if($users)
      @foreach($users as $user)
    <div class="modal fade" id="EditUserTypeModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Modifier une catégorie</h3>
            </div>



      <form method="post" enctype="multipart/form-data" action="{{url('users', $user)}}" id="addressForm" novalidate="novalidate">
        @csrf
        {{method_field('patch')}}

            <div class="modal-body">
              <div class="container-full">
                <div class="row">
                  <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <fieldset class="title">
                        <legend class="hr-divider text-primary">Changer le rôle ou code de cet utilisateur</legend>


        <div class="form-group">


        <select class="address form-control" name="type"required="">
            <option {{$user->type == 'default' ? 'selected' : ''}} value="default">Normal</option>
            <option {{$user->type == 'admin' ? 'selected' : ''}} value="admin">Administrateur</option>
            <option {{$user->type == 'deliver' ? 'selected' : ''}} value="deliver">Livreur</option>
            <option {{$user->type == 'pressing' ? 'selected' : ''}} value="pressing">Pressing</option>
        </select>

        <span class="help-block"></span>
      </div>

      <div class="form-group">

          <input type="text" name="code" value="{{$user->code ? $user->code : ''}}" class="form-control">

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
