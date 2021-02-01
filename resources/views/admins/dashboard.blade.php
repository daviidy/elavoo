
<style media="screen">

/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css */
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
}
*,::after,::before{box-sizing:border-box;}
strong{font-weight:bolder;}
small{font-size:80%;}
img{vertical-align:middle;border-style:none;}
small{font-size:80%;font-weight:400;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-3,.col-8,.col-lg-3,.col-lg-8,.col-sm-3,.col-sm-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
@media (min-width:576px){
.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}
@media (min-width:992px){
.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}
.w-50{width:100%!important;}
.text-center{text-align:center!important;}
.text-info{color:#17a2b8!important;}
.text-warning{color:#ffc107!important;}
/*! CSS Used from: Embedded */
.notification-box{padding:10px 0px;}

.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
background-color: #17A2B8;
}

.dropdown-menu{

  box-shadow: 0px 5px 7px -1px #c1c1c1;
  width: 432px;
}

.notification-box{
padding: 10px 0px;
}
.bg-gray{
background-color: #eee;
}
@media (max-width: 640px) {
.dropdown-menu{
  top: 50px;
  left: -16px;
  width: 290px;
}
.nav{
  display: block;
}
.nav .nav-item,.nav .nav-item a{
  padding-left: 0px;
}
.message{
  font-size: 13px;
}
}
</style>


<div class="content">
    <div class="row">

        <nav class="navbar navbar-expand-lg bg-info rounded">


            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
              <ul class="nav nav-pills mr-auto justify-content-end">

                <li class="nav-item dropdown">
                  <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Notifications&nbsp;<i data-count="0" class="fa fa-bell"></i>
                  </a>
                    <ul class="dropdown-menu">
                      <li class="head text-light bg-dark">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 col-12">
                            <span>Notifications (3)</span>
                            <a href="" class="float-right text-light">Mark all as read</a>
                          </div>
                      </li>

                      <li class="footer bg-dark text-center">
                        <a href="" class="text-light">View All</a>
                      </li>
                    </ul>
                </li>
              </ul>
            </div>
          </nav>

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
                  <tr style="{{$bill->statut_livraison == 'Livré' ? 'background: rgba(2, 205, 137, 0.5);' : ''}} {{$bill->statut_livraison == 'Annulé' ? 'background: rgba(220, 79, 47, 0.5);' : ''}} {{$bill->statut_livraison == 'Récupéré au pressing' ? 'background: rgba(2, 116, 181, 0.5);' : ''}} {{$bill->statut_livraison == 'Déposé au pressing' ? 'background: rgba(2, 116, 181, 0.5);' : ''}} {{$bill->statut_livraison == 'En cours de traitement par le pressing' || $bill->statut_livraison == 'Prêt à être livré' ? 'background: rgba(246, 160, 15, 0.5);' : ''}}">
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





      <script src="https://js.pusher.com/3.1/pusher.min.js"></script>


      <script type="text/javascript">
        var notificationsWrapper   = $('.dropdown');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('ul.dropdown-menu');

        if (notificationsCount <= 0) {
          notificationsWrapper.hide();
        }

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('18007709cbdcf8865f0f', {
        cluster: 'eu',
        forceTLS: false
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('order-status');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('App\\Events\\OrderStatus', function(data) {
           console.log('test');
          var existingNotifications = notifications.html();
          var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
          var newNotificationHtml = `
          <li class="notification-box">
            <div class="row">
              <div class="col-lg-3 col-sm-3 col-3 text-center">
                <img src="/images/notif.png" class="w-50 rounded-circle">
              </div>
              <div class="col-lg-8 col-sm-8 col-8">
                <strong class="text-info">David John</strong>
                <div>`+data.message+`</div>
                <small class="text-warning">27.11.2015, 15:00</small>
              </div>
            </div>
          </li>
          `;
          notifications.html(newNotificationHtml + existingNotifications);

          notificationsCount += 1;
          notificationsCountElem.attr('data-count', notificationsCount);
          notificationsWrapper.find('.notif-count').text(notificationsCount);
          notificationsWrapper.show();
        });
      </script>

      @endforeach
      @endif
