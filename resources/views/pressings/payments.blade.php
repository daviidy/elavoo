@extends('layouts.menu-dashboard')

@section('title', 'Comptabilité')


@section('description', 'Comptabilité')


@section('content')


<style media="screen">
/*! CSS Used from: https://oschoolelearning.com/admin/assets/vendor/bootstrap/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
label{display:inline-block;margin-bottom:.5rem;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input,select{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button,select{text-transform:none;}
[type=submit],button{-webkit-appearance:button;}
[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media screen and (prefers-reduced-motion:reduce){
.form-control{transition:none;}
}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-moz-placeholder{color:#6c757d;opacity:1;}
.form-control:-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::-ms-input-placeholder{color:#6c757d;opacity:1;}
.form-control::placeholder{color:#6c757d;opacity:1;}
.form-control:disabled{background-color:#e9ecef;opacity:1;}
select.form-control:not([size]):not([multiple]){height:calc(2.25rem + 2px);}
.form-group{margin-bottom:1rem;}
.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media screen and (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.btn:disabled{opacity:.65;}
.btn-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8;}
.btn-info:hover{color:#fff;background-color:#138496;border-color:#117a8b;}
.btn-info:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5);}
.btn-info:disabled{color:#fff;background-color:#17a2b8;border-color:#17a2b8;}
.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
}
/*! CSS Used from: https://oschoolelearning.com/admin/assets/libs/css/style.css */
label{display:inline-block;max-width:100%;margin-bottom:5px;font-size:15px;color:#71748d;}
.form-control{display:block;width:100%;font-size:14px;line-height:1.42857143;color:#71748d;background-color:#fff;background-image:none;border:1px solid #d2d2e4;border-radius:2px;}
.form-control:focus{color:#71748d;background-color:#fff;border-color:#a7a7f0;outline:0;box-shadow:0 0 0 0.2rem rgba(214, 214, 255, .75);}
button:focus{outline:0;}
select.form-control{color:#71748d;-webkit-appearance:none;-moz-appearance:none;background-position:99% 52%;background-size:auto;background-repeat:no-repeat;background-image:url(https://oschoolelearning.com/images/down-arrow.png);padding-right:15px;border:1px solid #d2d2e4;border-radius:2px;}
input::-webkit-input-placeholder{color:#71748d!important;}
input:focus::-webkit-input-placeholder{color:#5969ff!important;}
.form-group{margin-bottom:12px;}
.btn{font-size:14px;padding:9px 16px;border-radius:2px;}
.btn-info{color:#fff;background-color:#25d5f2;border-color:#25d5f2;}
.btn-info:hover{color:#fff;background-color:#17c0dc;border-color:#17c0dc;}
.btn-info:focus{color:#fff;background-color:#17c0dc;border-color:#17c0dc;box-shadow:0 0 0 1px rgb(238, 184, 22);}
.btn-rounded{border-radius:100px;}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media screen{
input{overflow:visible;}
}
}

/*! CSS Used from: https://oschoolelearning.com/admin/assets/vendor/bootstrap/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem;}
.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
}
</style>


<div class="content">
    @if(!empty($status))

        <div class="card-body">

            <div class="alert alert-success" role="alert">
                {{$status}}
            </div>

        </div>

    @endif

    <div class="row">

        <div style="background: #fff; margin-bottom: 2rem;" class="card-body">

                <form method="post" enctype="multipart/form-data" action="/monthlyPayments">
                    @csrf
                    <div class="form-group">
                        <label for="input-select">Choisir un mois</label>
                        <select name="month" class="form-control" id="input-select">
                            <option value="01">Janvier</option>
                            <option value="02">Février</option>
                            <option value="03">Mars</option>
                            <option value="04">Avril</option>
                            <option value="05">Mai</option>
                            <option value="06">Juin</option>
                            <option value="07">Juillet</option>
                            <option value="08">Août</option>
                            <option value="09">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="input-select">Choisir une année</label>
                        <select name="year" class="form-control" id="input-select">
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <button class="btn btn-rounded btn-info" type="submit" name="button">
                        Envoyer
                    </button>
                </form>

            </div>

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
