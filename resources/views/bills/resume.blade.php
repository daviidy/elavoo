@extends('layouts.menu-resume')
@section('title', 'Validation de la commande')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="display: block;margin-left: auto;margin-right: auto;width: 25%;" src="/formcreate/images/cup.jpg" alt="IMG">
      </div>

      <span class="login100-form-title">
        Veuillez vérifier les informations ci-dessous avant de valider votre achat.<br><br>
        Vous paierez {{$bill->amount}} FCFA<br><br>
      </span>

      <section class="woocommerce-order-details">

    <h2 class="woocommerce-order-details__title">Détails de la commande</h2>

    <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

        <thead>
            <tr>
                <th class="woocommerce-table__product-name product-name">Produit</th>
                <th class="woocommerce-table__product-table product-total">Total</th>
            </tr>
        </thead>

        <tbody>
            @foreach($bill->orders as $order)

            <tr class="woocommerce-table__line-item order_item">

                <td class="woocommerce-table__product-name product-name">
                    <a>{{$order->name_item}}</a> <strong class="product-quantity">× {{$order->quantity}}</strong>
                    <div style="float: right;text-align: left;">
                        <table>
                            <tbody>
                                <tr>
                                    <td><img style="width: 100px;" src="/images/items/{{$order->image}}" with="100"></td>
                                </tr>
                            </tbody>
                        </table>
                        <dt>Prix unitaire: </dt>
                        <dd>{{$order->unit_price}} </dd>
                    </div>
                </td>

                <td class="woocommerce-table__product-total product-total">
                    <span class="woocommerce-Price-amount amount">{{$order->unit_price * $order->quantity}}&nbsp;<span class="woocommerce-Price-currencySymbol">CFA</span></span> </td>

            </tr>

            @endforeach



        </tbody>

        <tfoot>

            <tr>
                <th scope="row">Expédition&nbsp;:</th>
                <td>Livraison gratuite</td>
            </tr>
            <tr>
                <th scope="row">Moyen de paiement&nbsp;:</th>
                <td>{{$bill->payment_mode}}</td>
            </tr>
            <tr>
                <th scope="row">Total&nbsp;:</th>
                <td><span class="woocommerce-Price-amount amount">{{$bill->amount}}&nbsp;<span class="woocommerce-Price-currencySymbol">FCFA</span></span></td>
            </tr>
        </tfoot>
    </table>

</section>










      <form method="post" enctype="multipart/form-data" action="https://secure.cinetpay.com/" class="login100-form validate-form">


        <ul>
          <li>Nom: <strong>{{session('nom')}}</strong> </li>
          <li>Prénoms: <strong>{{session('prenoms')}}</strong> </li>
          <li>Email: <strong>{{session('email')}}</strong> </li>
        </ul><br>
        {{ csrf_field() }}
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_id">
            <option value="{{$temps}}">trans id</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_amount">
            <option value="{{$montant}}">montant</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_currency">
            <option value="CFA">currency</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_site_id">
            <option value="423311">Id site</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_language">
            <option value="fr">language</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_version">
            <option value="V1">version</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_payment_config">
            <option value="SINGLE">payment config</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_page_action">
            <option value="PAYMENT">page action</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_date">
            <option value="{{$time}}">trans date</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="apikey">
            <option value="134714631658c289ed716950.86091611">api key</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="signature">
            <option value="{{$signature}}">Signature</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_designation">
            <option value="Achat Oschool Live">Désignation</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cancel_url">
            <option value="{{URL::previous()}}">url cancel</option>
          </select>
        </div>
        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Payer avec Mobile Money
          </button>
        </div>
      </form><!--fin form cinetpay-->

      <div class="login100-pic js-tilt" data-tilt>
      </div>





    </div>



  </div>
</div>

<script>
    function redirectHome() {
        // console.log('Redirect to home on back')
        window.history.pushState({page: 1}, "", "");

        window.onpopstate = function(event) {
            if(event){
                window.location.href = '/home';
                // Code to handle back button or prevent from navigation
            }
        }
    }
    redirectHome()
</script>

@endsection
