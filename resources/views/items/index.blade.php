@extends('layouts.menu-list-items')

@section('content')
<style>

#summary-container{
    position: sticky;
    top: 0px;
}



</style>


<style media="screen">

.promo-star {
    position: absolute;
    top: 0;
    left: 30px;
    width: 80px;
    height: 80px;
    background-size: cover;
    background-image: url('https://www.zipjet.fr/assets/common/images/promotion-star-red.svg');
}


.promo-star-inner {
    transform: rotate(-15deg);
    color: #FFF;
    text-align: center;
    font-weight: bold;
    line-height: 80px;
}

.savings {
    position: absolute;
    top: -20px;
    right: -5px;
    width: 0;
    height: 0;
    border-top: 50px solid #0175B9;
    border-left: 50px solid transparent;
    z-index: 100;
}

.savings i {
    font-style: normal;
    position: absolute;
    top: -45px;
    right: 8px;
    color: #fff;
}


.original-price {
    color: #8492a6;
    text-decoration: line-through;
}

</style>




<section class="price-estimator" id="B2C-price-estimator">

    <div class="price-estimator-holder content-holder">

        <div class="price-estimator-header">
            <div class="headline-holder">
                <h1>Tarifs pressing et linge</h1>
            </div>
            <input name="search" placeholder="Rechercher un article…" type="text" data-list=".list" class="item-search">

            <!-- Categories tabs -->
            <ul id="category-tabs">
                @foreach($categories as $category)
                    @if($category->items->count() > 0)
                <li data-tab="tab_drycleaning" class="active">
                  <a href="#tab_{{preg_replace('/\\s/','',$category->name)}}" rel="nofollow">{{$category->name}} <span></span></a>
                </li>
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="content" id="price-estimator-content">
            <!-- Items in each tabs -->
            <h2>CHOISISSEZ VOS ARTICLES !</h2>

            <div id="category-content" class="category-content" >
                <!-- Output each category in respective tab -->
                @foreach($categories as $category)
                    @if($category->items->count() > 0)

                <div class="category-items " id="tab_{{preg_replace('/\\s/','',$category->name)}}" style="display:{{$loop->first ? 'block' : 'none'}};">
                    <ul class="list" id="scrolling">
                        @foreach($category->items as $item)
                        <li data-id="drycleaning_2" data-product-reference="FR-PRO-L9457501" class="" style="min-height: 285px; {{$category->promotions->count() > 0 ? 'width: 50%;' : ''}}">

                            <div class="flipper" style="min-height: 285px;">
                                <div class="front">
                                    @if($category->promotions->count() > 0)
                                    <span class="savings"><i>%</i></span>
                                    @endif
                                    <span class="additional-desc-open-icon">i</span>
                                    <div class="img-container noselect">
                                        <span class="item-substract item-update">-</span>
                                        <img src="/images/items/{{$item->image}}">
                                        <span class="item-add item-update">+</span>
                                    </div>
                                    @if($category->promotions->count() > 0)
                                        @foreach($category->promotions as $promotion)
                                        @if(Carbon\Carbon::parse($promotion->date_exp) > Carbon\Carbon::now())
                                    <div class="promo-star">
                                        <div class="promo-star-inner">-{{$promotion->value}}%</div>
                                    </div>
                                        @endif
                                        @endforeach

                                    @endif


                                    <div class="name">
                                        <span>{{$item->name}}</span>
                                    </div>
                                    <div  class="price" data-price="19">
                                        @if($category->promotions->count() > 0)
                                            @foreach($category->promotions as $promotion)
                                            @if(Carbon\Carbon::parse($promotion->date_exp) > Carbon\Carbon::now())
                                        <span style="font-size: 2rem;">{{$item->price - ($item->price * $promotion->value)/100}}</span> <span>FCFA</span>
                                        <p style="margin: 0;" class="original-price">{{$item->price}} FCFA</p>
                                            @else
                                        <span >{{$item->price}}</span> <span>FCFA</span>
                                            @endif
                                            @endforeach
                                        @else
                                        <span>{{$item->price}}</span> <span>FCFA</span>
                                        @endif
                                    </div>
                                    @auth
                                    @if(Auth::user()->isAdmin())
                                    <a class="" style="margin: 0 15px; float:left;" href="{{route('items.edit', $item)}}"><i class="ion-android-create btn btn-warning" style="font-size:20px;"></i></a>
                                    <form action="{{ route('items.destroy', $item) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="ion-android-close btn btn-danger" type="submit"></button>
                                    </form>
                                    @endif
                                    @endauth
                                </div>

                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                @endif
                @endforeach




            </div>
        </div>



        <div class="right-column fixed-summary">
            <div id="summary-container"class="follow-scroll" >

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
                                    @foreach(session('orders') as $order)
                                    @php
                                    $price = $price + ($order[2] * $order[1]);
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
                                @foreach(session('orders') as $order)
                                <tr class="summary-item bundle" style="display: table-row">
                                    <td class="name">{{$order[0]}}</td>
                                    <td class="update-controls noselect"><span class="item-substract item-update">-</span><span class="item-amount">{{$order[1]}}</span><span class="item-add item-update">+</span></td>
                                    <td class="price"><span>{{$order[2]}}</span><span> FCFA</span></td>
                                </tr>
                                @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>

                    <p class="disclaimer"><sup>*</sup>Veuillez noter que le prix définitif pourra être fixé légèrement à la hausse ou à la baisse  par notre pressing partenaire. Le prix total peut varier en conséquence.
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

                    <a id="command" data-toggle="modal" data-target="#inscription" class="order-btn-map-view btn-disable">
                        Commandez maintenant </a>
                    <div style="clear:both;"></div>

                    @endguest


            </div>
        </div>

        <div style="clear:both"></div>

    </div>


</section>


<script src="/js/fixed.js"></script>



<!--js des onglets des différent catégorys-->
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

@include('includes.items_page.registration')

@include('includes.items_page.login')


@include('includes.items_page.popupOrange')




@endsection
