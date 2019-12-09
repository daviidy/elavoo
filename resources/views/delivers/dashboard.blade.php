@extends('layouts.menu-dashboard')

@section('title', 'Mes livraisons')


@section('description', 'Voici la liste de vos livraisons')


@section('content')


<div class="content">
    <div class="row">

      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body">
            <div class="stats-title">
              <h4>Historique</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>
                      Numéro commande
                    </th>
                    <th>
                      Article(s)
                    </th>
                    <th>
                      Date de récuparation du linge
                    </th>
                    <th>
                      Statut
                    </th>

                  </tr>
                  @if($bills)
                  @foreach($bills as $bill)
                  <tr>
                      <td><a href="{{url('bills', $bill)}}">{{$bill->trans_id}}</a></td>
                      <td>
                          @foreach($bill->orders as $order)
                          {{$order->quantity}} {{$order->name_item}} ({{$order->unit_price * $order->quantity}}),
                          @endforeach
                      </td>
                      <td>{{Carbon\Carbon::parse($bill->date_pickup)->format('d-m-Y')}}</td>
                      <td>{{$bill->statut_livraison}}
                          @if($bill->statut_livraison !== 'Livré' && $bill->statut_livraison !== 'Annulé')
                          ( <a href="#" data-toggle="modal" data-target="#EditBillStatusModal{{$bill->id}}">modifier</a> )
                          @endif
                      </td>

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
    @if($bills)
      @foreach($bills as $bill)
    <div class="modal fade" id="EditBillStatusModal{{$bill->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Modifier une catégorie</h3>
            </div>



      <form method="post" enctype="multipart/form-data" action="{{url('bills', $bill)}}" id="addressForm" novalidate="novalidate">
        @csrf
        {{method_field('patch')}}

            <div class="modal-body">
              <div class="container-full">
                <div class="row">
                  <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <fieldset class="title">
                        <legend class="hr-divider text-primary">Modifier le statut de cette commande</legend>


        <div class="form-group">


        <select class="address form-control" name="statut_livraison"required="">
            <option value="Livré">Livré</option>
            <option value="Annulé">Annulé</option>
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
