@extends('layouts.menu-list-items')

@section('content')

<div style="margin-top: 3rem;" class="content-section">




    <div class="container">
        <div class="content-container content-container-contact">
            <div class="row">
                <div class="content-header">
                    <img width="50" src="https://lh3.googleusercontent.com/WZNtkAK0lyQKtXw8rW29BACIoQXpkTgdUhsvmCUTJIN_ZWW9svtrtLd5GNnDJTdAQ9w" alt="">
                    <h1>Merci de sélectionner les horaires de récupération et le type de service souhaité</h1>
                </div>
            </div>



            <div class="row">
                <div id="new-customer-address-container">
                    <form action="{{url('envoi')}}" method="post" id="contact-form">
                        @csrf

                        <div class="row" style="display: none;">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one ten columns map-pin-input-container">
                                <label class="formal--label">Choisissez le jour et l'heure pour la récupération de votre linge</label>
                                <input value="" class="formal--control form-control" name="date_pickup" type="datetime-local">
                            </div>
                        </div>


                        <div class="row" style="margin-bottom: 2rem;">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one ten columns map-pin-input-container">
                                <label class="formal--label">Choisissez le jour et l'heure pour la récupération de votre linge</label>
                                <input value="" class="formal--control form-control" name="date_pickup" type="datetime-local">
                            </div>
                        </div>

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one ten columns map-pin-input-container" style="position: relative;">

                                <label for="form-addressLine" class="formal--label">Choisissez le type de service que vous souhaitez</label>

                                <select class="formal--control form-control" name="service">

                                      <option value="normal">Service Normal (48 H après réception de vos vêtements)</option>

                                      <option value="express">Service Express (24 H après réception de vos vêtements)</option>

                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one ten columns map-pin-input-container" style="position: relative;">

                                <label for="form-addressLine" class="formal--label">Choisissez le mode de paiement</label>

                                <select class="formal--control form-control" name="payment_mode">

                                      <option value="online">Paiement en ligne</option>

                                      <option value="cash">Paiement à la livraison</option>

                                </select>
                            </div>

                        </div>



<script type="text/javascript">
$(document).ready(function(){
function service(){
var date_pickup = document.getElementById('date_pickup');
date_pickup.addEventListener("blur", function(){
  alert(date_pickup.value);
});

}
});
</script>




                        <div class="submit-block">
                            <input type="submit" class="btn-submit" value="Valider la commande">
                        </div>
                    </form>
                </div>




            </div>
        </div>
    </div>




</div>

@endsection
