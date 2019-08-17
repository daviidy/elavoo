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
                  <a href="#tab_drycleaning" rel="nofollow">Pressing &amp; Repassage <span></span></a>
                </li>
                <li data-tab="tab_washnfold" class="">
                  <a href="#tab_washnfold" rel="nofollow">Hommes<span></span></a>
                </li>
                <li data-tab="tab_girls" class="">
                  <a href="#tab_girls" rel="nofollow">Femmes<span></span></a>
                </li>
            </ul>
        </div>

        <div class="content" id="price-estimator-content">
            <!-- Items in each tabs -->
            <h2>CHOISISSEZ VOS ARTICLES !</h2>

            <div id="category-content" class="category-content">
                <!-- Output each category in respective tab -->
                <div class="category-items " id="tab_drycleaning" style="display: block;">
                    <ul class="list">

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

                        <ul class="list">

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

                <div class="category-items " id="tab_girls" style="display: none;">
                    <ul class="list">

                      <img src="/assets/images/elavoo_box.jpeg" alt="" width="400">
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
                                $price = $price + $orders[2];
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

                <a href="{{route('login')}}" class="order-btn-map-view">
                    Commandez maintenant </a>
                <div style="clear:both;"></div>

                @endguest


            </div>
        </div>

        <div style="clear:both"></div>

    </div>





</section>
<script type="text/javascript">
$('#category-tabs a').on('click', function (event) {
    event.preventDefault();

    $('.active').removeClass('active');
    $(this).parent().addClass('active');
    $('.category-content .category-items').hide();
    $($(this).attr('href')).show();
});

$('#category-tabs a:first').trigger('click'); // Default

</script>





@endsection
