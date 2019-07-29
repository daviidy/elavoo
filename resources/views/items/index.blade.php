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
                                <span class="value" data-value="0">0</span><span class="currency"> FCFA</span><sup>*</sup>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="scrollable">
                    <table id="summary-items">


                        <tbody>


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

                <a class="order-btn-map-view" id="orderNowLink">
                    Commandez maintenant </a>
                <div style="clear:both;"></div>


            </div>
        </div>

        <div style="clear:both"></div>

    </div>

    <div class="lw-widget lw-widget_fullscreen" data-lw-onload>
    <div class="lw-overlay" data-lw-close></div>
    <div class="lw-container lw-container_md">
        <div class="lw-item" style="--theme-color: #0097A7; background: #F0F5F5"><button class="lw-close" data-lw-close><i class="material-icons">close</i></button>
            <div class="lw-wrap lw-p-lg">
                <div class="lw-title lw-title_lg">Create a project</div>
                <div class="lw-content lw-mb-md">There’s good news for parents who have a child born.</div>
                <div class="lw-mb-md">
                    <div class="lw-field"><input class="lw-input" type="text" placeholder="Name a project"></div>
                    <div class="lw-field"><textarea class="lw-textarea" type="text" placeholder="Tell us a bit more about your project"></textarea></div>
                    <div class="lw-field"><input class="lw-input" type="text" placeholder="Enter tags separated by commas"></div>
                </div>
                <div class="lw-mb">
                    <div class="lw-label">Select categories where you want to add your project</div>
                    <div class="lw-group"><label class="lw-checkbox"><input class="lw-checkbox-input" type="checkbox" checked="checked"/><span class="lw-checkbox-content">Design<span class="lw-checkbox-tick"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13">
<polygon fill="var(--theme-color)" points="5.173 9.791 1.314 5.932 0 7.237 5.173 12.41 16.278 1.305 14.973 0"/>
</svg>

</span></span></label><label class="lw-checkbox"><input class="lw-checkbox-input" type="checkbox" checked="checked"/><span class="lw-checkbox-content">Web Design<span class="lw-checkbox-tick"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13">
<polygon fill="var(--theme-color)" points="5.173 9.791 1.314 5.932 0 7.237 5.173 12.41 16.278 1.305 14.973 0"/>
</svg>

</span></span></label><label class="lw-checkbox"><input class="lw-checkbox-input" type="checkbox" checked="checked"/><span class="lw-checkbox-content">Illustrations<span class="lw-checkbox-tick"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13">
<polygon fill="var(--theme-color)" points="5.173 9.791 1.314 5.932 0 7.237 5.173 12.41 16.278 1.305 14.973 0"/>
</svg>

</span></span></label></div>
                </div><button class="lw-btn">Create a project</button></div>
        </div>
        <div class="lw-powered">We run on <a href="https://niceverynice.com/little-widgets/" target="_blank">Little Widgets</a></div>
    </div>
</div>



</section>




@endsection
