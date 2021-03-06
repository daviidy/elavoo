@extends('layouts.menu-dashboard')

@section('title', 'Commandes')


@section('description', 'Voici la liste des commandes qui vous ont été assignées')


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
                      Date de récupération du linge
                    </th>
                    <th>
                      Type
                    </th>
                    <th>
                      Livreur
                    </th>
                    <th>
                      Statut
                    </th>

                  </tr>
                  @if($bills)
                  @foreach($bills as $bill)
                  <tr style="{{$bill->statut_livraison == 'Livré' ? 'background: rgba(2, 205, 137, 0.5);' : ''}} {{$bill->statut_livraison == 'Annulé' ? 'background: rgba(220, 79, 47, 0.5);' : ''}} {{$bill->statut_livraison == 'Récupéré' ? 'background: rgba(2, 116, 181, 0.5);' : ''}} {{$bill->statut_livraison == 'Déposé au pressing' ? 'background: rgba(2, 116, 181, 0.5);' : ''}} {{$bill->statut_livraison == 'En cours de traitement par le pressing' || $bill->statut_livraison == 'Prêt à être livré' ? 'background: rgba(246, 160, 15, 0.5);' : ''}}">
                      <td><a href="{{url('bills', $bill)}}">{{$bill->trans_id}}</a></td>
                      <td>
                          @foreach($bill->orders as $order)
                          @if(!$loop->last)
                          {{$order->quantity}} {{$order->name_item}} ({{$order->unit_price * $order->quantity}}),
                          @else
                          {{$order->quantity}} {{$order->name_item}} ({{$order->unit_price * $order->quantity}}).
                          @endif
                          @endforeach
                      </td>
                      <td>{{Carbon\Carbon::parse($bill->date_pickup)->format('d-m-Y')}}</td>
                      <td>{{$bill->payment_mode == 'cash' ? 'Paiement à la livraison' : 'Paiement en ligne'}}</td>
                      <td>
                          @if($bill->delivery)
                          <a href="/users/{{$bill->delivery->id}}">
                          {{$bill->delivery->name}}
                          </a>
                          @else
                          Aucun pour le moment

                          @endif
                      </td>
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
            <option value="En cours de traitement par le pressing">En cours de traitement</option>
            <option value="Prêt à être livré">Terminé</option>
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
