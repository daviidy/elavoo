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
                  @foreach($bills as $bill)
                  <tr>
                      <td> <a href="{{url('bills', $bill)}}">{{$bill->trans_id}}</a> </td>
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
                          <a href="#" data-toggle="modal" data-target="#AssignBillModal{{$bill->id}}">
                              (assigner)
                          </a>
                          @endif

                      </td>
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
