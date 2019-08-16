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
                <!--li data-tab="tab_washnfold" class="">
                    Linge Nettoyé &amp; Plié <span></span>
                </li-->
            </ul>
        </div>

        <div class="content" id="price-estimator-content">
            <!-- Items in each tabs -->
            <div id="category-content" class="category-content">
                <!-- Output each category in respective tab -->
                <div class="category-items active" id="tab_drycleaning" style="display: block;">
                    <h2>CHOISISSEZ VOS ARTICLES !</h2>
                    <ul class="list">

                    <!--
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

                    -->

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


                                        <span>{{$item->price}}</span> <span>FCFA</span> </div>
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
                                    Total <!--i>(TVA incluse)</i-->




                                </span>
                            </td>
                            <td class="total-price-value">
                                @if(session('orders'))
                                @php
                                $price = 0;
                                @endphp
                                @foreach(session('orders') as $orders)
                                @php
                                $price = $price + ($orders[2] * $orders[1]);
                                @endphp
                                @endforeach
                                <span class="value" data-value="0">{{$price}}</span>
                                <span class="currency"> FCFA</span><sup>*</sup>
                                @else
                                <span class="value" data-value="0">0</span>
                                <span class="currency"> FCFA</span><sup>*</sup>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="scrollable">
                    <table id="summary-items">


                        <tbody>
                            @if(session('orders'))
                            @foreach(session('orders') as $orders)
                            <tr class="summary-item bundle" style="display: table-row">
                                <td class="name">{{$orders[0]}}</td>
                                <td class="update-controls noselect"><span class="item-substract item-update">-</span><span class="item-amount">{{$orders[1]}}</span><span class="item-add item-update">+</span></td>
                                <td class="price"><span>{{$orders[2]}}</span><span> FCFA</span></td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>

              <p class="disclaimer"><sup>*</sup>Veuillez noter que le prix definitif pourra être fixé légèrement à la hausse ou à la baisse  par notre pressing partenaire. Le prix total peut varier en conséquence.
                    <style>
                        #nav ul li:first-of-type, .header-holder .order-button { display: none; }
section.price-estimator .price-estimator-holder .content .category-content .category-items ul li .back p { display: none; }
section.price-estimator .price-estimator-holder .content .category-content .category-items ul li.flip .back p { display: block !important; }
</style>
</p>

                @auth
                <a class="order-btn-map-view" id="orderNowLink">
                    Commandez maintenant </a>
                <div style="clear:both;"></div>
                @endauth
                @guest

                <a href="#" data-toggle="modal" data-target="#inscription" class="order-btn-map-view">
                    Commandez maintenant </a>
                <div style="clear:both;"></div>

                @endguest


            </div>
        </div>

        <div style="clear:both"></div>

    </div>





</section>


@include('includes.items_page.registration')

@include('includes.items_page.login')

@include('includes.items_page.popupOrange')




@endsection
