@extends('layouts.menu-dashboard')

@if(Auth::user()->isAdmin())
@section('title', 'Liste des commandes')
@else
@section('title', 'Mes commandes')
@endif

@if(Auth::user()->isAdmin())
@section('description', 'Voici la liste des commandes clients')
@else
@section('description', 'Regardez en toute sérénité l\'état de vos commandes')
@endif

@section('content')

@if(Auth::user()->isAdmin())


@include('admins.dashboard')


@else
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
                      Date
                    </th>
                    <th>
                      Type
                    </th>
                    <th>
                      Statut
                    </th>
                    <th>
                      Livreur
                    </th>
                  </tr>
                  @if(Auth::user()->bills)
                  @foreach(Auth::user()->bills as $bill)
                  <tr>
                      <td><a href="{{url('bills', $bill)}}">{{$bill->trans_id}}</a></td>
                      <td>
                          @foreach($bill->orders as $order)
                          {{$order->quantity}} {{$order->name_item}} ({{$order->unit_price * $order->quantity}}),
                          @endforeach
                      </td>
                      <td>{{$bill->created_at}}</td>
                      <td>{{$bill->payment_mode}}</td>
                      <td>{{$bill->statut_livraison}}</td>
                      <td>
                          @if($bill->delivery)
                          {{$bill->delivery->name}}
                          @else
                          Aucun pour le moment
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
@endif


            <!-- END BOTTOM BAR SECTION -->

        </div>
    </div>
@endsection
