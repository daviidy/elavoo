@extends('layouts.menu-list-items')

@section('content')

<section class="price-estimator" id="B2C-price-estimator">

    <div class="price-estimator-holder content-holder">

        <div class="price-estimator-header">
            <div class="headline-holder">
                <h1>Tarifs pressing et linge</h1>
            </div>
            <input name="search" placeholder="Rechercher un article…" type="text" data-list=".list" class="item-search">

            <!-- Categories tabs -->
            <ul id="category-tabs">
                <li data-tab="tab_drycleaning" class="active">
                    Pressing &amp; Repassage <span></span>
                </li>
                <li data-tab="tab_washnfold" class="">
                    Linge Nettoyé &amp; Plié <span></span>
                </li>
            </ul>
        </div>

        <div class="content" id="price-estimator-content">
            <!-- Items in each tabs -->
            <div id="category-content" class="category-content">
                <!-- Output each category in respective tab -->
                <div class="category-items active" id="tab_drycleaning" style="display: block;">
                    <p>Tarifé à la pièce, notre service de nettoyage à sec et repassage s'effectue par article. Chaque article est nettoyé à sec, repassé et rendu sur cintre individuellement.</p>
                    <ul class="list">

                        <li data-id="drycleaning_0" data-product-reference="FR-PRO-K9197124" class="bundle        promotion        additional-desc" style="min-height: 261px;">

                            <div class="flipper" style="min-height: 261px;">
                                <div class="front">
                                    <span class="savings"><i>%</i></span>

                                    <span class="additional-desc-open-icon">i</span>
                                    <div class="img-container noselect">
                                        <span class="item-substract item-update">-</span>
                                        <img src="https://res.cloudinary.com/zipjet/image/upload/q_auto:good/v1461917837/Handfinished_Shirt_jsepgw.jpg">
                                        <span class="item-add item-update">+</span>
                                    </div>

                                    <div class="promo-star">
                                        <div class="promo-star-inner">-13%</div>
                                    </div>

                                    <div class="name">
                                        <span>Lot de 5 chemises (sur cintre)</span>
                                    </div>
                                    <div class="price" data-price="17.5">

                                        <span class="original-price">20,00€</span>

                                        17,50€ </div>
                                </div>
                                <div class="back">
                                    <span class="additional-desc-close-icon">+</span>
                                    <p>Valables pour des chemises homme</p>
                                </div>
                            </div>
                        </li>



                      @foreach($items as $item)
                        <li data-id="drycleaning_2" data-product-reference="FR-PRO-L9457501" class="                " style="min-height: 285px;">

                            <div class="flipper" style="min-height: 285px;">
                                <div class="front">

                                    <span class="additional-desc-open-icon">i</span>
                                    <div class="img-container noselect">
                                        <span class="item-substract item-update">-</span>
                                        <img src="/images/items/{{$item->image}}">
                                        <span class="item-add item-update">+</span>
                                    </div>


                                    <div class="name">
                                        <span>{{$item->name}}</span>
                                    </div>
                                    <div class="price" data-price="19">


                                        {{$item->price}} FCFA </div>
                                </div>
                                <div class="back">
                                    <span class="additional-desc-close-icon">+</span>
                                    <p></p>
                                </div>
                            </div>
                        </li>
                      @endforeach
                    </ul>
                </div>
                <div class="category-items" id="tab_washnfold" style="display: none;">
                    <p>Tarifé par kilo, notre service de linge au kilo convient parfaitement pour votre linge quotidien. Vos articles seront lavés ensemble à 30°C, séchés au sèche-linge puis pliés. Chaque sac de linge est tarifé au
                        minimum de 3 kg.</p>
                    <ul class="list">
                        <li data-id="washnfold_0" data-product-reference="FR-PRO-B7431778" class="                additional-desc" style="min-height: 365px;">

                            <div class="flipper" style="min-height: 365px;">
                                <div class="front">

                                    <span class="additional-desc-open-icon">i</span>
                                    <div class="img-container noselect allow-substraction">
                                        <span class="item-substract item-update">-</span>
                                        <img src="https://res.cloudinary.com/zipjet/image/upload/q_auto:good/v1490638365/Bag_puifzm.jpg">
                                        <span class="item-add item-update">+</span>
                                    </div>


                                    <div class="name">
                                        <span>Linge au Kilo (par kg avec minimum de 3kg par sac)</span>
                                    </div>
                                    <div class="description">(arrondi au kg supérieur)</div>
                                    <div class="price" data-price="4.99">


                                        4,99€ </div>
                                </div>
                                <div class="back">
                                    <span class="additional-desc-close-icon">+</span>
                                    <p>Il est important de noter que lorsque nous recevons les sacs de linge au kilo, ils sont pesés, lavés, séchés et pliés. Nous n'inspectons pas les étiquettes d'entretien de chaque article contenu
                                        dans les sacs et nous ne sommes pas responsables si les instructions d'entretien ne correspondent pas à notre méthode de lavage et séchage. Le séchage se fait à 70°.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="right-column fixed-summary">
            <div id="summary-container">

                <table class="bottom-line">
                    <tbody>
                        <tr>
                            <td class="total-price-label">
                                <span>
                                    Total <i>(TVA incluse)</i>
                                </span>
                            </td>
                            <td class="total-price-value">
                                <span class="value" data-value="0">154,99</span><span class="currency">€</span><sup>*</sup>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="scrollable">
                    <table id="summary-items">


                        <tbody>
                            <tr class="summary-category" id="drycleaning" style="display: table-row;">
                                <td class="category-label" colspan="3">
                                    Pressing &amp; Repassage </td>
                            </tr>
                            <tr id="drycleaning_0" data-category="drycleaning" class="summary-item bundle" data-product-reference="FR-PRO-K9197124" data-price="17.5">

                                <td class="name">Lot de 5 chemises (sur cintre)</td>
                                <td class="update-controls noselect"><span class="item-substract item-update">-</span> <span class="item-amount">0</span> <span class="item-add item-update">+</span></td>
                                <td class="price">
                                    17,50€ </td>
                            </tr>
                            <tr id="drycleaning_1" data-category="drycleaning" class="summary-item bundle" data-product-reference="FR-PRO-P9501409" data-price="30" style="display: table-row;">

                                <td class="name">Lot de 10 chemises (sur cintre)</td>
                                <td class="update-controls noselect"><span class="item-substract item-update">-</span> <span class="item-amount">5</span> <span class="item-add item-update">+</span></td>
                                <td class="price">
                                    30,00€ </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <p class="disclaimer"><sup>*</sup>Veuillez noter que le comptage final sera effectué par notre pressing partenaire. Le prix total peut varier en conséquence.
                    <style>
                        #nav ul li:first-of-type, .header-holder .order-button { display: none; }
section.price-estimator .price-estimator-holder .content .category-content .category-items ul li .back p { display: none; }
section.price-estimator .price-estimator-holder .content .category-content .category-items ul li.flip .back p { display: block !important; }
</style>
                </p>

                <a href="https://www.zipjet.fr" class="order-btn-map-view" id="orderNowLink">
                    Commandez maintenant </a>
                <div style="clear:both;"></div>

                <!-- Address input form -->
                <div class="hidden">
                    <form action="https://www.zipjet.fr/fr/paris/order/new/location" class="order-zip-form order-location-form" rel="top" method="POST" data-trk-trigger="submitWithValues" data-trk-event="submitPostCode" data-trk-location-identifier="fr_paris"
                      novalidate="">
                        <fieldset>
                            <div class="col">
                                <span class="localise-me" title="Me localiser"></span>
                                <img src="/assets/frontend/images/loader.gif" height="40" width="40" alt="" id="loader">
                                <input type="text" id="addressLine" class="addressLine" name="addressLine" placeholder="Entrez votre adresse" data-parsley-required="true" data-parsley-id="0632" autocomplete="off">
                                <ul class="parsley-errors-list" id="parsley-id-0632"></ul>
                                <input type="hidden" id="lat" name="lat" value="48.8697953">
                                <input type="hidden" id="lng" name="lng" value="2.3078203999999687">
                                <input type="hidden" id="street" name="street" value="Avenue des Champs-Élysées">
                                <input type="hidden" id="streetnumber" name="streetnumber" value="">
                                <input type="hidden" class="input" id="zip" name="zip" value="75008">
                                <input type="hidden" class="input" id="mobile" name="mobile">
                                <input type="submit" value="Commander maintenant">
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>

        <div style="clear:both"></div>

    </div>

    <!-- popups -->
    <div class="popup-holder" style="position: absolute; top: 0;">

        <div style="display:none">
            <a id="show-popup-pin" href="#popup-pin"></a>
        </div>
        <div style="width:auto;height:auto;overflow: auto;position:relative;">
            <div id="popup-pin" class="lightbox">
                <div class="bar">
                    <span>Merci de confirmer votre adresse</span>
                    <a href="#" class="close icon-ico-close"></a>
                </div>
                <div class="map-container">
                    <div class="center-marker"></div>
                    <div class="input-container">
                        <input type="text" id="address-popup" placeholder="Indiquez un lieu" autocomplete="off" data-parsley-id="2081">
                        <ul class="parsley-errors-list" id="parsley-id-2081"></ul>
                    </div>

                    <button class="address-field-popup-confirm">
                        <img src="/assets/common/images/loader-popup.svg" height="20" width="20" alt="" id="confirm-loader">
                        Confirmer l'adresse </button>
                </div>
            </div>
        </div>
    </div>

</section>

<script type="text/javascript" src="/js/items.js"></script>


@endsection
