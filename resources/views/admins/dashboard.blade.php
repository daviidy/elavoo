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
                      Client
                    </th>
                    <th>
                      Téléphone
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
                      Statut
                    </th>
                    <th>
                      Pressing
                    </th>
                    <th>
                        Livreur
                    </th>
                    <th>
                        Prix
                    </th>
                  </tr>
                  @foreach($bills as $bill)
                  <tr>
                      <td> <a href="{{url('bills', $bill)}}">{{$bill->trans_id}}</a> </td>
                      <td> <a href="/users/{{$bill->user->id}}">{{$bill->user->name}}</a> </td>
                      <td>+{{$bill->user->tel}}</td>
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
                      <td>{{$bill->statut_livraison}}</td>
                      <td>
                          @if($bill->pressing)
                          {{$bill->pressing->name}}
                          <a href="#" data-toggle="modal" data-target="#AssignBillPressingModal{{$bill->id}}">
                              (assigner)
                          </a>
                          @else
                          Aucun pour le moment
                          <a href="#" data-toggle="modal" data-target="#AssignBillPressingModal{{$bill->id}}">
                              (assigner)
                          </a>
                          @endif

                      </td>
                      <td>
                          @if($bill->delivery)
                          {{$bill->delivery->name}}
                          <a href="#" data-toggle="modal" data-target="#AssignBillModal{{$bill->id}}">
                              (assigner)
                          </a>
                          @else
                          Aucun pour le moment
                          <a href="#" data-toggle="modal" data-target="#AssignBillModal{{$bill->id}}">
                              (assigner)
                          </a>
                          @endif

                      </td>
                      <td>{{$bill->amount}} FCFA</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!--popup-->
  @if($bills)
    @foreach($bills as $bill)
  <div class="modal fade" id="AssignBillModal{{$bill->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Modifier une commande</h3>
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
                      <legend class="hr-divider text-primary">Assigner cette commande à un livreur</legend>


      <div class="form-group">


      <select class="address form-control" name="delivery_id"required="">
          @foreach($delivers as $deliver)
          <option value="{{$deliver->id}}">{{$deliver->name}}</option>
          @endforeach
      </select>

      <span class="help-block"></span>
    </div>



                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Assigner</button>
            <button type="reset" data-dismiss="modal" class="cancel btn btn-default pull-left">Annuler</button>
          </div>


    </form>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
    @endforeach
    @endif








    <!--popup-->
    @if($bills)
      @foreach($bills as $bill)
    <div class="modal fade" id="AssignBillPressingModal{{$bill->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 class="modal-title center" data-toggle="modal" id="myModalLabel">Modifier une commande</h3>
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
                        <legend class="hr-divider text-primary">Assigner cette commande à un pressing</legend>


        <div class="form-group">


        <select class="address form-control" name="pressing_id"required="">
            @foreach($pressings as $pressing)
            <option value="{{$pressing->id}}">{{$pressing->name}}</option>
            @endforeach
        </select>

        <span class="help-block"></span>
      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Assigner</button>
              <button type="reset" data-dismiss="modal" class="cancel btn btn-default pull-left">Annuler</button>
            </div>


      </form>

          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      @endforeach
      @endif
