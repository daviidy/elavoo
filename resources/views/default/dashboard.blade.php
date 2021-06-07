@extends('layouts.menu-dashboard')

@if(Auth::user()->isAdmin())
@section('title', 'Liste des commandes')
@else
@section('title', 'Mes commandes')
@endif

@if(Auth::user()->isAdmin())
@section('description', 'Voici la liste des commandes clients')
@else
@section('description', 'Regardez en toute sérénité l\'état de vos commandes')
@endif

@section('content')

@if(Auth::user()->isAdmin())


@include('admins.dashboard')


@else

<style media="screen">
/*! CSS Used from: https://www.udacity.com/styles.d39a0e66d1ffd63b7b9d.css */
hr{box-sizing:content-box;height:0;overflow:visible;}
a{background-color:transparent;}
*,*::after,*::before{box-sizing:inherit;}
@media (max-width: 767px){
.hidden-sm-down{display:none!important;}
}
@media (min-width: 768px){
.hidden-md-up{display:none!important;}
}
@media (max-width: 991px){
.hidden-md-down{display:none!important;}
}
*,*::after,*::before{box-sizing:inherit;}
.left{margin-left:0!important;}
.right{margin-right:0!important;}
.mb-0{margin-bottom:0!important;}
.mb-1{margin-bottom:12px!important;}
@media screen and (min-width: 48rem){
.mb-1{margin-bottom:24px!important;}
}
hr{border:0;height:0;margin-top:0;margin-bottom:0;max-width:73.75rem;box-sizing:border-box;border-bottom:1px solid rgba(255, 255, 255, 0.3);border-top:1px solid rgba(0, 0, 0, 0.1);}
.blue{color:#02b3e4!important;}
.text-right{text-align:right!important;}
.uppercase{text-transform:uppercase;}
.capitalize{text-transform:capitalize;}
*,*::after,*::before{box-sizing:inherit;}
a{border-bottom:none;text-decoration:none;color:#525c65;-webkit-transition:color 0.3s ease;transition:color 0.3s ease;}
a:active,a:focus,a:hover{color:#24292d;}
h3,h4{margin-top:0;margin-bottom:24px;color:#2e3d49;-webkit-font-smoothing:antialiased;}
@media screen and (min-width: 48rem){
h3,h4{margin-bottom:24px;}
}
h3{font-size:1.5rem;line-height:36px;font-weight:300;}
@media screen and (min-width: 48rem){
h3{font-size:1.75rem;line-height:36px;}
}
h4{font-size:1.125rem;line-height:32px;font-weight:400;}
@media screen and (min-width: 48rem){
h4{font-size:1.5rem;line-height:36px;}
}
.button--primary{display:block;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-align:center;white-space:nowrap;vertical-align:top;text-decoration:none;vertical-align:middle;height:3rem;padding:0 0.5rem;text-transform:uppercase;font-size:16px;font-weight:600;font-size:0.813rem;line-height:2.625rem;-webkit-font-smoothing:antialiased;border-radius:0.25rem;letter-spacing:0.125rem;-webkit-transition:all 0.3s ease;transition:all 0.3s ease;}
.button--primary{box-shadow:8px 10px 20px 0px rgba(46, 61, 73, 0.15);}
.button--primary:hover{box-shadow:2px 4px 8px 0px rgba(46, 61, 73, 0.2);}
.button--primary{width:13.75rem;color:#fff;background-color:#02b3e4;border:0.125rem solid transparent;}
.button--primary:focus,.button--primary:hover{outline:none;color:white;border-color:transparent;background-color:#029fcb;}
/*! CSS Used from: https://www.udacity.com/assets/styles/styles.shared.649d1ba9e2.css */
@media (max-width:767px){
.hidden-sm-down{display:none!important;}
}
@media (min-width:768px){
.hidden-md-up{display:none!important;}
}
@media (max-width:991px){
.hidden-md-down{display:none!important;}
}
*,::after,::before{box-sizing:inherit;}
/*! CSS Used from: Embedded */
*[_ngcontent-iridium-us-c24],[_ngcontent-iridium-us-c24]:after,[_ngcontent-iridium-us-c24]:before{box-sizing:border-box;}
.row[_ngcontent-iridium-us-c24]:after{clear:both;}
.row[_ngcontent-iridium-us-c24]{margin-left:-15px;margin-right:-15px;}
.row[_ngcontent-iridium-us-c24]:after,.row[_ngcontent-iridium-us-c24]:before{content:" ";display:table;}
.row.row-gap-medium[_ngcontent-iridium-us-c24]{margin-bottom:30px;}
.course-summary-card[_ngcontent-iridium-us-c24]{-webkit-transition:opacity .3s ease-in;transition:opacity .3s ease-in;}
*[_ngcontent-iridium-us-c24],*[_ngcontent-iridium-us-c24]::after,*[_ngcontent-iridium-us-c24]::before{box-sizing:inherit;}
.course-list[_ngcontent-iridium-us-c24]   .row.row-gap-medium[_ngcontent-iridium-us-c24]{margin-left:0;margin-right:0;}
/*! CSS Used from: Embedded */
hr[_ngcontent-iridium-us-c27]{border:0;}
a[_ngcontent-iridium-us-c27]{background:0 0;color:#1f8fc1;text-decoration:none;}
a[_ngcontent-iridium-us-c27]:active,a[_ngcontent-iridium-us-c27]:hover{outline:0;}
hr[_ngcontent-iridium-us-c27]{box-sizing:content-box;height:0;}
*[_ngcontent-iridium-us-c27],[_ngcontent-iridium-us-c27]:after,[_ngcontent-iridium-us-c27]:before{box-sizing:border-box;}
a[_ngcontent-iridium-us-c27]:focus,a[_ngcontent-iridium-us-c27]:hover{color:#145e7f;}
a[_ngcontent-iridium-us-c27]:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px;}
hr[_ngcontent-iridium-us-c27]{margin-top:23px;margin-bottom:23px;border-top:1px solid #dcdcdc;}
h3[_ngcontent-iridium-us-c27],h4[_ngcontent-iridium-us-c27]{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h3[_ngcontent-iridium-us-c27]{margin-top:23px;margin-bottom:11.5px;}
h4[_ngcontent-iridium-us-c27]{margin-top:11.5px;margin-bottom:11.5px;}
h3[_ngcontent-iridium-us-c27]{font-size:18px;}
h4[_ngcontent-iridium-us-c27]{font-size:12px;}
.text-right[_ngcontent-iridium-us-c27]{text-align:right;}
h4[_ngcontent-iridium-us-c27]{text-transform:uppercase;}
h4[_ngcontent-iridium-us-c27]{line-height:1.6;}
h3[_ngcontent-iridium-us-c27]{color:#303030;line-height:1.6;}
h4[_ngcontent-iridium-us-c27]{color:#767676;font-weight:400;}
h3[_ngcontent-iridium-us-c27]{font-weight:400;}
*[_ngcontent-iridium-us-c27],*[_ngcontent-iridium-us-c27]::after,*[_ngcontent-iridium-us-c27]::before{box-sizing:inherit;}
@media (max-width: 767px){
.hidden-sm-down[_ngcontent-iridium-us-c27]{display:none!important;}
}
@media (min-width: 768px){
.hidden-md-up[_ngcontent-iridium-us-c27]{display:none!important;}
}
@media (max-width: 991px){
.hidden-md-down[_ngcontent-iridium-us-c27]{display:none!important;}
}
*[_ngcontent-iridium-us-c27],*[_ngcontent-iridium-us-c27]::after,*[_ngcontent-iridium-us-c27]::before{box-sizing:inherit;}
.card[_ngcontent-iridium-us-c27]{margin-top:0;margin-bottom:24px;text-align:left;position:relative;background:#fff;box-shadow:5px 5px 25px 0px rgba(46, 61, 73, 0.2);border-radius:0.375rem;-webkit-transition:all 0.3s ease;transition:all 0.3s ease;}
@media screen and (min-width: 48rem){
.card[_ngcontent-iridium-us-c27]{margin-bottom:24px;}
}
*[_ngcontent-iridium-us-c27],*[_ngcontent-iridium-us-c27]::after,*[_ngcontent-iridium-us-c27]::before{box-sizing:inherit;}
*[_ngcontent-iridium-us-c27],*[_ngcontent-iridium-us-c27]::after,*[_ngcontent-iridium-us-c27]::before{box-sizing:inherit;}
.card[_ngcontent-iridium-us-c27]{margin-top:0;margin-bottom:24px;text-align:left;position:relative;background:#fff;box-shadow:5px 5px 25px 0px rgba(46, 61, 73, 0.2);border-radius:0.375rem;-webkit-transition:all 0.3s ease;transition:all 0.3s ease;}
@media screen and (min-width: 48rem){
.card[_ngcontent-iridium-us-c27]{margin-bottom:24px;}
}
*[_ngcontent-iridium-us-c27],*[_ngcontent-iridium-us-c27]::after,*[_ngcontent-iridium-us-c27]::before{box-sizing:inherit;}
.card__inner--upper[_ngcontent-iridium-us-c27]::after,.card__inner--lower[_ngcontent-iridium-us-c27]::after{clear:both;content:"";display:block;}
.card__inner[_ngcontent-iridium-us-c27]{padding:2rem;padding-bottom:0;}
.card__inner--upper[_ngcontent-iridium-us-c27]{display:-webkit-box;display:flex;-webkit-box-align:start;align-items:flex-start;padding-bottom:1.5rem;border-bottom:1px solid #dbe2e8;}
@media (max-width: 48rem){
.card__inner--upper[_ngcontent-iridium-us-c27]{border:none;}
}
.card__inner--upper[_ngcontent-iridium-us-c27]:hover   a[_ngcontent-iridium-us-c27]{color:#02b3e4;}
.card__inner--lower[_ngcontent-iridium-us-c27]{line-height:2.5rem;}
.card__inner--lower[_ngcontent-iridium-us-c27]::after{clear:both;content:"";display:block;}
.card__inner--lower[_ngcontent-iridium-us-c27]   .expander[_ngcontent-iridium-us-c27]{font-weight:600;font-size:0.9rem;letter-spacing:0.1rem;}
.card__inner--lower[_ngcontent-iridium-us-c27]   .expander[_ngcontent-iridium-us-c27]::before{content:'';background:url(https://www.udacity.com/assets/iridium/images/shared/nd-cards/icon-toggle-closed.svg) 50% no-repeat;height:1rem;line-height:1rem;position:relative;top:2px;width:.75rem;margin-right:.75rem;display:inline-block;-webkit-transition:all .5s ease;transition:all .5s ease;}
.card__inner--lower[_ngcontent-iridium-us-c27]   .level[_ngcontent-iridium-us-c27]{font-size:0.75rem;}
.card__inner--lower[_ngcontent-iridium-us-c27]   .left[_ngcontent-iridium-us-c27]{float:left;}
.card__inner--lower[_ngcontent-iridium-us-c27]   .right[_ngcontent-iridium-us-c27]{float:right;}
.card__inner[_ngcontent-iridium-us-c27]   .image_wrapper[_ngcontent-iridium-us-c27]{padding-left:0;padding-right:1rem;float:left;display:block;margin-right:1.69491525%;width:23.72881356%;}
.card__inner[_ngcontent-iridium-us-c27]   .image_wrapper[_ngcontent-iridium-us-c27]   .image-container[_ngcontent-iridium-us-c27]{padding-bottom:6.5rem;min-width:6.5rem;background-repeat:no-repeat;background-position:center;background-size:cover;border-radius:6px;box-shadow:1px 1px 7px #bcc9d4;border:0;position:relative;overflow:hidden;float:left;display:block;margin-right:1.69491525%;width:100%;}
.card__inner[_ngcontent-iridium-us-c27]   .image_wrapper[_ngcontent-iridium-us-c27]   .image-container[_ngcontent-iridium-us-c27]:last-child{margin-right:0;}
.card-wrapper[_ngcontent-iridium-us-c27]   .card__expander[_ngcontent-iridium-us-c27]{-webkit-transition:max-height 0.5s ease-in-out;transition:max-height 0.5s ease-in-out;background-color:white;box-shadow:5px 5px 25px 0px rgba(46, 61, 73, 0.2);border-radius:0 0 0.375rem 0.375rem;}
.card-wrapper.is-collapsed[_ngcontent-iridium-us-c27]   .card__expander[_ngcontent-iridium-us-c27]{overflow:hidden;width:100%;max-height:0;}
.card-wrapper[_ngcontent-iridium-us-c27]   hr[_ngcontent-iridium-us-c27]{border-top:1px solid #dbe2e8;margin:1.5rem 4rem;}
.card[_ngcontent-iridium-us-c27]   .category[_ngcontent-iridium-us-c27]{margin-top:0;font-weight:600;font-size:0.75rem;line-height:24px;color:#7D97AD;text-transform:none;display:inline-block;}
@media screen and (min-width: 48rem){
.card[_ngcontent-iridium-us-c27]   .category[_ngcontent-iridium-us-c27]{font-size:0.75rem;line-height:24px;}
}
@media screen and (min-width: 48rem){
.card[_ngcontent-iridium-us-c27]   .category[_ngcontent-iridium-us-c27]{font-size:0.8125rem;line-height:24px;}
}
@media screen and (min-width: 48rem) and (min-width: 48rem){
.card[_ngcontent-iridium-us-c27]   .category[_ngcontent-iridium-us-c27]{font-size:0.8125rem;line-height:24px;}
}
.card-heading[_ngcontent-iridium-us-c27]{margin-top:0;margin-bottom:0.5rem; font-weight: bold;}
.card-heading[_ngcontent-iridium-us-c27]   a[_ngcontent-iridium-us-c27]{color:#2e3d49;font-weight:600;display:block;overflow:hidden;text-overflow:ellipsis;line-height:1.6rem;max-height:4.8rem;}
.card-heading[_ngcontent-iridium-us-c27]   a[_ngcontent-iridium-us-c27]:hover{color:#02b3e4;}
.card-content[_ngcontent-iridium-us-c27]{float:left;display:block;margin-right:1.69491525%;width:74.57627119%;}
.card-content[_ngcontent-iridium-us-c27]:last-child{margin-right:0;}
@media (max-width: 62rem){
.card-content[_ngcontent-iridium-us-c27]{float:left;display:block;margin-right:1.69491525%;width:100%;}
.card-content[_ngcontent-iridium-us-c27]:last-child{margin-right:0;}
}
.card__expander[_ngcontent-iridium-us-c27]{background:-webkit-gradient(linear, right bottom, left top, from(#F7F7F7), to(#EAFBFF));background:linear-gradient(to top left, #F7F7F7, #EAFBFF);}
.card__expander--summary[_ngcontent-iridium-us-c27]{font-size:0.9rem;padding:1.5rem 4rem 0;}
.card__expander--details[_ngcontent-iridium-us-c27]{float:left;display:block;margin-right:1.69491525%;width:100%;display:-webkit-box;display:flex;-webkit-box-pack:justify;justify-content:space-between;padding:0 4rem 1.5rem;}
.card__expander--details[_ngcontent-iridium-us-c27]:last-child{margin-right:0;}
.card__expander--details[_ngcontent-iridium-us-c27]   .btn[_ngcontent-iridium-us-c27]{width:10rem;height:2.5rem;line-height:2.3rem;color:#fff;background-color:#02b3e4;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]{display:-webkit-box;display:flex;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]   h4[_ngcontent-iridium-us-c27]{font-size:0.9rem;text-transform:capitalize;margin-top:0;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]   div[_ngcontent-iridium-us-c27]{float:left;display:block;margin-right:1.69491525%;width:49.15254237%;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]   div[_ngcontent-iridium-us-c27]:last-child{margin-right:0;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]   span[_ngcontent-iridium-us-c27]{font-size:16px;color:#2e3d49;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]   span.truncate-content[_ngcontent-iridium-us-c27]{max-height:3rem;display:block;overflow-y:hidden;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]   .level[_ngcontent-iridium-us-c27]   span[_ngcontent-iridium-us-c27]:after{content:''!important;}
.card[_ngcontent-iridium-us-c27]   .right-sub[_ngcontent-iridium-us-c27]   .skills[_ngcontent-iridium-us-c27]    ~ .level[_ngcontent-iridium-us-c27]{margin-top:1.4rem;}
.card[_ngcontent-iridium-us-c27]   h4[_ngcontent-iridium-us-c27]{margin-bottom:0;}
@media (max-width: 48rem){
.card[_ngcontent-iridium-us-c27]   .mobile-icon[_ngcontent-iridium-us-c27]{display:inline-block;height:0.8rem;width:1.5rem;margin-right:0.2rem;background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/course-icon-mobile.svg);background-position:center;background-size:contain;background-repeat:no-repeat;vertical-align:middle;}
}
.pointer[_ngcontent-iridium-us-c27]{cursor:pointer;}
.course-level[_ngcontent-iridium-us-c27]{width:0.8rem;height:0.8rem;background-size:contain;display:inline-block;vertical-align:middle;background-repeat:no-repeat;margin-right:0.5rem;}
.course-level-beginner[_ngcontent-iridium-us-c27]{background-image:url(https://www.udacity.com/assets/iridium/images/svgs/beginner.svg);}
.nanodegree-card   [_nghost-iridium-us-c27]   .image-overlay[_ngcontent-iridium-us-c27]{position:absolute;float:left;display:block;margin-right:1.69491525%;width:100%;height:100%;background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/nanodegree-icon.png);background-repeat:no-repeat;background-position:0.5rem 0.5rem;}
.nanodegree-card   [_nghost-iridium-us-c27]   .image-overlay[_ngcontent-iridium-us-c27]:last-child{margin-right:0;}
@media (max-width: 48rem){
.nanodegree-card   [_nghost-iridium-us-c27]   .mobile-icon[_ngcontent-iridium-us-c27]{background-image:url(https://www.udacity.com/assets/iridium/images/course-catalog/nanodegree-icon-mobile.svg);}
}
.nanodegree-card:nth-child(3n+1)   [_nghost-iridium-us-c27]   .image-overlay[_ngcontent-iridium-us-c27]{background-color:rgba(82, 92, 101, 0.6);}
.tag[_ngcontent-iridium-us-c27]{float:right;text-align:center;font-size:0.8125rem;line-height:24px;padding:6px 0.75rem;letter-spacing:0.125rem;border-radius:0.25rem;text-transform:uppercase;font-weight:600;}
@media screen and (min-width: 48rem){
.tag[_ngcontent-iridium-us-c27]{font-size:0.8125rem;line-height:24px;}
}
@media screen and (max-width: 20rem){
.tag[_ngcontent-iridium-us-c27]{background:none;box-shadow:none;margin:0;}
}
.tag--new[_ngcontent-iridium-us-c27]{color:#6854c5;}
/*! CSS Used from: Embedded */
*,*::after,*::before{box-sizing:inherit;}
@media (max-width: 767px){
.hidden-sm-down{display:none!important;}
}
@media (min-width: 768px){
.hidden-md-up{display:none!important;}
}
@media (max-width: 991px){
.hidden-md-down{display:none!important;}
}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
@media (max-width: 767px){
.hidden-sm-down{display:none!important;}
}
@media (min-width: 768px){
.hidden-md-up{display:none!important;}
}
@media (max-width: 991px){
.hidden-md-down{display:none!important;}
}
*,*::after,*::before{box-sizing:inherit;}
*,*::after,*::before{box-sizing:inherit;}
</style>


@if(session('orders'))
@php
$price = 0;
@endphp
@foreach(session('orders') as $order)
@php
$price = $price + ($order[2] * $order[1]);
@endphp
@endforeach

<div style="width: 87%;margin: auto;margin-top: 1rem;" _ngcontent-iridium-us-c24="" class="course-summary-card row row-gap-medium catalog-card nanodegree-card ng-star-inserted">
    <ir-catalog-card _ngcontent-iridium-us-c24="" _nghost-iridium-us-c27="">
        <div _ngcontent-iridium-us-c27="" class="card-wrapper is-collapsed">
            <div _ngcontent-iridium-us-c27="" class="card__inner card mb-0">
                <div _ngcontent-iridium-us-c27="" class="card__inner--upper">
                    <div _ngcontent-iridium-us-c27="" class="image_wrapper hidden-md-down"><a _ngcontent-iridium-us-c27="" href="/course/ux-designer-nanodegree--nd578">
                            <!---->
                            <div _ngcontent-iridium-us-c27="" class="image-container ng-star-inserted" style="background-image: url(&quot;https://images.unsplash.com/photo-1560060141-7b9018741ced?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=499&q=80&quot;);">
                            </div>
                        </a>
                        <!---->
                    </div>
                    <div _ngcontent-iridium-us-c27="" class="card-content">
                        <!----><span _ngcontent-iridium-us-c27="" class="tag tag--new card ng-star-inserted"><a href="/bills/create">Valider la commande</a></span>
                        <!---->
                        <div _ngcontent-iridium-us-c27="" class="category-wrapper">
                            <!---->
                            <h4 _ngcontent-iridium-us-c27="" class="category ng-star-inserted">Vous avez une commande à terminer</h4>
                        </div>
                        <h3 _ngcontent-iridium-us-c27="" class="card-heading">
                            <a _ngcontent-iridium-us-c27="" class="capitalize" href="">
                                @if(session('orders'))
                                    @foreach(session('orders') as $order)
                                        @if(!$loop->last)
                                    {{$order[1]}} {{$order[0]}} ({{$order[2]}} FCFA),
                                        @else
                                    {{$order[1]}} {{$order[0]}} ({{$order[2]}} FCFA).
                                        @endif
                                    @endforeach
                                @endif
                            </a>
                        </h3>

                    </div>
                </div>

            </div>

        </div>
    </ir-catalog-card>
    <!---->
</div>


@endif

@if(Auth::user()->bills)
@foreach(Auth::user()->bills as $bill)
    @if($bill->state == 'Validé')

<div style="width: 87%;margin: auto;margin-top: 1rem;" _ngcontent-iridium-us-c24="" class="course-summary-card row row-gap-medium catalog-card nanodegree-card ng-star-inserted">
    <ir-catalog-card _ngcontent-iridium-us-c24="" _nghost-iridium-us-c27="">
        <div _ngcontent-iridium-us-c27="" class="card-wrapper is-collapsed">
            <div _ngcontent-iridium-us-c27="" style="{{$bill->statut_livraison == 'Livré' ? 'background: rgba(2, 205, 137, 0.5);' : ''}} {{$bill->statut_livraison == 'Annulé' ? 'background: rgba(220, 79, 47, 0.5);' : ''}} {{$bill->statut_livraison == 'Récupéré' ? 'background: rgba(2, 116, 181, 0.5);' : ''}} {{$bill->statut_livraison == 'Déposé au pressing' ? 'background: rgba(2, 116, 181, 0.5);' : ''}} {{$bill->statut_livraison == 'En cours de traitement par le pressing' || $bill->statut_livraison == 'Prêt à être livré' ? 'background: rgba(246, 160, 15, 0.5);' : ''}}" class="card__inner card mb-0">
                <div _ngcontent-iridium-us-c27="" class="card__inner--upper">
                    <div _ngcontent-iridium-us-c27="" class="image_wrapper hidden-md-down">
                            <!---->
                            <div _ngcontent-iridium-us-c27="" class="image-container ng-star-inserted" style="background-image: url(&quot;https://images.unsplash.com/photo-1549037173-e3b717902c57?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80&quot;);">
                            </div>

                        <!---->
                    </div>
                    <div _ngcontent-iridium-us-c27="" class="card-content">
                        <!----><span _ngcontent-iridium-us-c27="" class="tag tag--new card ng-star-inserted">Commande n°<a href="{{url('bills', $bill)}}">{{$bill->trans_id}}</a></span>
                        <!---->
                        <div _ngcontent-iridium-us-c27="" class="category-wrapper">
                            <!---->
                            <h4 style="{{$bill->statut_livraison !== 'En cours' ? 'color: #fff;' : ''}}" _ngcontent-iridium-us-c27="" class="category ng-star-inserted"> Date de récupération du linge:  {{Carbon\Carbon::parse($bill->date_pickup)->format('d-m-Y')}}</h4>
                        </div>
                        <h3 _ngcontent-iridium-us-c27="" class="card-heading capitalize">

                                @foreach($bill->orders as $order)
                                @if(!$loop->last)
                                {{$order->quantity}} {{$order->name_item}} ({{$order->unit_price * $order->quantity}}),
                                @else
                                {{$order->quantity}} {{$order->name_item}} ({{$order->unit_price * $order->quantity}}).
                                @endif
                                @endforeach

                        </h3>
                        <div _ngcontent-iridium-us-c27="" class="right-sub">
                            <!---->
                            <div _ngcontent-iridium-us-c27="" class="skills ng-star-inserted">
                                <h4 _ngcontent-iridium-us-c27="">{{$bill->payment_mode == 'cash' ? 'Paiement à la livraison' : 'Payée en ligne'}}</h4><span _ngcontent-iridium-us-c27="" class="truncate-content">
                                    <!----><span _ngcontent-iridium-us-c27="" class="ng-star-inserted">{{$bill->statut_livraison}} </span><br> <span _ngcontent-iridium-us-c27=""
                                      class="ng-star-inserted">
                                      <strong>
                                          Livreur:
                                          @if($bill->delivery)
                                          <a href="/users/{{$bill->delivery->id}}">{{$bill->delivery->name}}</a>
                                          @else
                                          Aucun pour le moment
                                          @endif
                                      </strong>
                                  </span>
                              </span>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </ir-catalog-card>
    <!---->
</div>

@endif

@endforeach
@endif





@endif


            <!-- END BOTTOM BAR SECTION -->

        </div>
    </div>
@endsection
