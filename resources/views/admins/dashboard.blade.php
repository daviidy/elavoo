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
