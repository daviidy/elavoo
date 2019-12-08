@extends('layouts.menu-dashboard')

@section('title', 'Comptabilité')


@section('description', 'Comptabilité')


@section('content')



<div class="content">
    <div class="row">

      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body">
            <div class="stats-title">
              <h4>Historique de ce mois</h4>
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
                      Livreur
                    </th>
                    <th>
                      Type
                    </th>
                    <th>
                      Statut
                    </th>
                  </tr>
                  @foreach($current_month_purchases as $bill)
                  <tr>
                      <td> <a href="{{url('bills', $bill)}}">{{$bill->trans_id}}</a> </td>
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
                          {{$bill->delivery->name}}
                          @else
                          Aucun pour le moment
                          <a href="#" data-toggle="modal" data-target="#AssignBillModal{{$bill->id}}">
                              (assigner)
                          </a>
                          @endif

                      </td>
                      <td>{{$bill->statut_livraison}}</td>

                  </tr>
                  @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total</th>
                        <th>{{$current_month_purchases->sum('amount')}} FCFA</th>
                    </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>










@endsection
