@extends('layouts.menu-list-items')

@section('content')

<div style="margin-top: 3rem;" class="content-section">




    <div class="container">
        <div class="content-container content-container-contact">
            <div class="row">
                <div class="content-header">
                    <img width="50" src="https://lh3.googleusercontent.com/WZNtkAK0lyQKtXw8rW29BACIoQXpkTgdUhsvmCUTJIN_ZWW9svtrtLd5GNnDJTdAQ9w" alt="">
                    <h1>Merci de sélectionner les horaires de récupération et de livraison</h1>
                </div>
            </div>



            <div class="row">
                <div id="new-customer-address-container">
                    <form method="post" id="contact-form">
                        @csrf

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one ten columns map-pin-input-container">
                                <label class="formal--label">Quel jour voulez-vous pour la récupération de votre linge ?</label>
                                <input value="" class="formal--control form-control" name="first_name" name="date" type="datetime-local">
                            </div>
                        </div>





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
