@extends('layouts.menu')

@section('content')

<style media="screen">
/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/bootstrap.css */
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
p,h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
*,*::before,*::after{box-sizing:border-box;}
article,section{display:block;}
h3{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
h3{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:#151515;}
h3{font-size:40px;}
body{
  font-weight= 300 !important;
  font-family: 'Montserrat', sans-serif!important;
  line-height= 1.88889 !important;
}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1200px;}
}
@media (min-width:1600px){
.container{max-width:1400px;}
}
.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-md-6,.col-lg-4,.col-lg-10,.col-xl-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-md-6{flex:0 0 50%;max-width:50%;}
}
@media (min-width:992px){
.col-lg-4{flex:0 0 33.33333%;max-width:33.33333%;}
.col-lg-10{flex:0 0 83.33333%;max-width:83.33333%;}
}
@media (min-width:1200px){
.col-xl-8{flex:0 0 66.66667%;max-width:66.66667%;}
}
.bg-default{background-color:#fff!important;}
@media (min-width:992px){
.justify-content-lg-center{justify-content:center!important;}
}
.text-center{text-align:center!important;}
/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/style.css */
*:focus{outline:none;}
p{margin:0;}
h3{margin-top:0;margin-bottom:0;font-family:inherit;font-weight:500;color:#151515;}
h3{font-size:22px;line-height:1.45;font-weight:200;}
@media (min-width:768px){
h3{font-size:28px;}
}
@media (min-width:1200px){
h3{font-size:40px;line-height:1.35;}
}
.icon{display:inline-block;line-height:1;text-align:center;}
.icon:before{display:inline-block;font-weight:400;font-style:normal;speak:none;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.blurb__title{font-size:18px;line-height:1.33;color:#000;}
*+.blurb__title{margin-top:16px;}
@media (min-width:1200px){
.blurb__title{font-size:24px;line-height:1.54167;}
*+.blurb__title{margin-top:45px;}
}
.blurb-circle{text-align:left;}
.blurb-circle__icon .icon{width:2.4em;height:2.4em;border:1px solid #2ed3ae;border-radius:50%;text-align:center;color:#2ed3ae;font-size:30px;line-height:2.33em;}
.blurb-circle__icon .icon::before{line-height:inherit;}
@media (min-width:1200px){
.blurb-circle__icon .icon{font-size:36px;}
}
@media (min-width:1600px){
.blurb-circle__icon .icon{font-size:44px;}
}
.blurb-circle.blurb-circle_centered{max-width:360px;margin-left:auto;margin-right:auto;text-align:center;}
@media (max-width:767px){
.blurb-circle{max-width:360px;margin-left:auto;margin-right:auto;}
}
.bg-default{background-color:#fff;}
.text-center{text-align:center;}
.section-xl{padding-top:60px;padding-bottom:60px;}
@media (min-width:768px){
.section-xl{padding-top:95px;padding-bottom:95px;}
}
@media (min-width:992px){
.section-xl{/*padding-top:130px;padding-bottom:130px;*/}
}
@media (min-width:1200px) and (min-height:800px){
.section-xl{padding-top:190px;padding-bottom:190px;}
}
*+p{margin-top:16px;}
p+*{margin-top:22px;}
p+p{margin-top:16px;}
@media (min-width:992px){
*+p{margin-top:28px;}
}
html .row-50{margin-bottom:-50px;}
html .row-50:empty{margin-bottom:0;}
html .row-50>*{margin-bottom:50px;}
*+.row{margin-top:25px;}
@media (min-width:768px){
*+.row{margin-top:35px;}
}
@media (min-width:1600px){
.row{margin-left:-25px;margin-right:-25px;}
.row>[class*=col-]{padding-left:25px;padding-right:25px;}
}
[class*=" linear-icon-"]::before{font-family:linearicons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-feature-settings:"liga";-moz-font-feature-settings:"liga=1";-moz-font-feature-settings:"liga";-ms-font-feature-settings:"liga" 1;-o-font-feature-settings:"liga";font-feature-settings:"liga";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.linear-icon-feather:before{content:"\e614";}
.linear-icon-bag2:before{content:"\e74c";}
.linear-icon-menu3:before{content:"\e931";}
/*! CSS Used fontfaces */
@font-face{font-family:linearicons;src:url(https://livedemo00.template-help.com/wt_62267_v8/62267-default/fonts/Linearicons.ttf) format("truetype");font-weight:400;font-style:normal;}









/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/bootstrap.css */
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
p,h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
*,*::before,*::after{box-sizing:border-box;}
section{display:block;}
h3{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
h3{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:#151515;}
h3{font-size:40px;}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1200px;}
}
@media (min-width:1600px){
.container{max-width:1400px;}
}
.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-lg-5{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:992px){
.col-lg-5{flex:0 0 41.66667%;max-width:41.66667%;}
}
/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/style.css */
*:focus{outline:none;}
p{margin:0;}
h3{margin-top:0;margin-bottom:0;font-family:inherit;font-weight:500;color:#151515;}
h3{font-size:22px;line-height:1.45;font-weight:200;}
@media (min-width:768px){
h3{font-size:28px;}
}
@media (min-width:1200px){
h3{font-size:40px;line-height:1.35;}
}
.bg-gray-lighter h3{color:#151515;}
.bg-gray-lighter{background-color:#f8f8f8;}
.bg-image{background-size:cover;background-position:center center;background-repeat:no-repeat;}
.section-xxl{padding-top:75px;padding-bottom:75px;}
@media (min-width:1200px) and (min-height:800px){
.section-xxl{padding-top:165px;padding-bottom:190px;}
}
*+p{margin-top:16px;}
@media (min-width:992px){
*+p{margin-top:28px;}
}
.object-wrap{position:relative;overflow:hidden;}
@media (max-width:991px){
.object-wrap__body{height:33vw;min-height:200px;}
}
@media (min-width:992px){
.object-wrap__body{overflow:hidden;position:absolute;top:0;bottom:0;width:100vw;min-width:1px;max-width:none;height:100%;min-height:100%;max-height:none;margin:0;z-index:0;}
.object-wrap__body.object-wrap__body-md-right{right:0;}
}
@media (min-width:992px){
.object-wrap__body-sizing-1{width:34vw;}
}
@media (min-width:1600px){
.row{margin-left:-25px;margin-right:-25px;}
.row>[class*=col-]{padding-left:25px;padding-right:25px;}
}









/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/bootstrap.css */
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{box-sizing:border-box;}
article,section{display:block;}
p{margin-top:0;margin-bottom:1rem;}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1200px;}
}
@media (min-width:1600px){
.container{max-width:1400px;}
}
.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-md-6,.col-lg-4{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-md-6{flex:0 0 50%;max-width:50%;}
}
@media (min-width:992px){
.col-lg-4{flex:0 0 33.33333%;max-width:33.33333%;}
}
.flex-row{flex-direction:row!important;}
/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/style.css */
*:focus{outline:none;}
p{margin:0;}
.icon{display:inline-block;line-height:1;text-align:center;}
.icon:before{display:inline-block;font-weight:400;font-style:normal;speak:none;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.blurb__title{font-size:18px;line-height:1.33;color:#000;}
@media (min-width:1200px){
.blurb__title{font-size:24px;line-height:1.54167;}
}
.blurb-minimal{text-align:left;}
.blurb-minimal .unit .blurb-minimal__icon .icon{font-size:32px;}
.blurb-minimal__icon .icon{font-size:30px;color:#2ed3ae;}
@media (min-width:1200px){
.blurb-minimal__icon .icon{font-size:36px;}
}
@media (min-width:1600px){
.blurb-minimal__icon .icon{font-size:44px;}
}
.bg-gray-lighter{background-color:#f8f8f8;}
.section-xl{padding-top:60px;padding-bottom:60px;}
@media (min-width:768px){
.section-xl{padding-top:95px;padding-bottom:95px;}
}
@media (min-width:992px){
.section-xl{/*padding-top:130px;padding-bottom:130px;*/}
}
@media (min-width:1200px) and (min-height:800px){
.section-xl{padding-top:190px;padding-bottom:190px;}
}
*+p{margin-top:16px;}
p+*{margin-top:22px;}
p+p{margin-top:16px;}
@media (min-width:992px){
*+p{margin-top:28px;}
}
html .row-50{margin-bottom:-50px;}
html .row-50:empty{margin-bottom:0;}
html .row-50>*{margin-bottom:50px;}
@media (min-width:1600px){
.row{margin-left:-25px;margin-right:-25px;}
.row>[class*=col-]{padding-left:25px;padding-right:25px;}
}
.unit{display:flex;flex:0 1 100%;}
[class*=unit]:empty{margin-bottom:0;margin-left:0;}
.unit-body{flex:0 1 auto;}
.unit-left{flex:0 0 auto;max-width:100%;}
.unit{margin-bottom:-30px;margin-left:-20px;}
.unit>*{margin-bottom:30px;margin-left:20px;}
.unit-spacing-md.unit{margin-bottom:-30px;margin-left:-15px;}
.unit-spacing-md.unit>*{margin-bottom:30px;margin-left:15px;}
@media (min-width:576px){
.unit-spacing-md.unit{margin-bottom:-30px;margin-left:-15px;}
.unit-spacing-md.unit>*{margin-bottom:30px;margin-left:15px;}
}
@media (min-width:768px){
.unit-spacing-md.unit{margin-bottom:-30px;margin-left:-15px;}
.unit-spacing-md.unit>*{margin-bottom:30px;margin-left:15px;}
}
@media (min-width:992px){
.unit-spacing-md.unit{margin-bottom:-30px;margin-left:-15px;}
.unit-spacing-md.unit>*{margin-bottom:30px;margin-left:15px;}
}
@media (min-width:1200px){
.unit-spacing-md.unit{margin-bottom:-30px;margin-left:-15px;}
.unit-spacing-md.unit>*{margin-bottom:30px;margin-left:15px;}
}
@media (min-width:1600px){
.unit-spacing-md.unit{margin-bottom:-30px;margin-left:-15px;}
.unit-spacing-md.unit>*{margin-bottom:30px;margin-left:15px;}
}
[class*=" linear-icon-"]::before{font-family:linearicons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-feature-settings:"liga";-moz-font-feature-settings:"liga=1";-moz-font-feature-settings:"liga";-ms-font-feature-settings:"liga" 1;-o-font-feature-settings:"liga";font-feature-settings:"liga";-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.linear-icon-magic-wand:before{content:"\e62b";}
.linear-icon-users2:before{content:"\e723";}
.linear-icon-menu3:before{content:"\e931";}
/*! CSS Used fontfaces */
@font-face{font-family:linearicons;src:url(https://livedemo00.template-help.com/wt_62267_v8/62267-default/fonts/Linearicons.ttf) format("truetype");font-weight:400;font-style:normal;}








/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/bootstrap.css */
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p,h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
*,*::before,*::after{box-sizing:border-box;}
section{display:block;}
h3{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;border-style:none;}
h3{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:#151515;}
h3{font-size:40px;}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1200px;}
}
@media (min-width:1600px){
.container{max-width:1400px;}
}
.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-6,.col-lg-5,.col-lg-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-6{flex:0 0 50%;max-width:50%;}
@media (min-width:992px){
.col-lg-5{flex:0 0 41.66667%;max-width:41.66667%;}
.col-lg-6{flex:0 0 50%;max-width:50%;}
}
.bg-default{background-color:#fff!important;}
@media (min-width:992px){
.justify-content-lg-between{justify-content:space-between!important;}
.align-items-lg-center{align-items:center!important;}
}
/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/style.css */
*:focus{outline:none;}
p{margin:0;}
img{display:inline-block;max-width:100%;height:auto;}
h3{margin-top:0;margin-bottom:0;font-family:inherit;font-weight:500;color:#151515;}
h3{font-size:22px;line-height:1.45;font-weight:200;}
@media (min-width:768px){
h3{font-size:28px;}
}
@media (min-width:1200px){
h3{font-size:40px;line-height:1.35;}
}
.bg-default{background-color:#fff;}
.section-xl{padding-top:60px;padding-bottom:60px;}
@media (min-width:768px){
.section-xl{padding-top:95px;padding-bottom:95px;}
}
@media (min-width:992px){
.section-xl{/*padding-top:130px;padding-bottom:130px;*/}
}
@media (min-width:1200px) and (min-height:800px){
.section-xl{padding-top:190px;padding-bottom:190px;}
}
*+p{margin-top:16px;}
@media (min-width:992px){
*+p{margin-top:28px;}
}
html .row-50{margin-bottom:-50px;}
html .row-50:empty{margin-bottom:0;}
html .row-50>*{margin-bottom:50px;}
.gallery-wrap{margin-bottom:-10px;}
.gallery-wrap:empty{margin-bottom:0;}
.gallery-wrap>*{margin-bottom:10px;}
@media (min-width:768px){
.gallery-wrap{margin-bottom:-30px;}
.gallery-wrap:empty{margin-bottom:0;}
.gallery-wrap>*{margin-bottom:30px;}
}
@media (min-width:1600px){
.gallery-wrap{margin-bottom:-50px;}
.gallery-wrap:empty{margin-bottom:0;}
.gallery-wrap>*{margin-bottom:50px;}
}
@media (max-width:767px){
.gallery-wrap.row{margin-left:-5px;margin-right:-5px;}
.gallery-wrap.row>[class*=col-]{padding-left:5px;padding-right:5px;}
}
@media (min-width:1600px){
.row{margin-left:-25px;margin-right:-25px;}
.row>[class*=col-]{padding-left:25px;padding-right:25px;}
}









/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/bootstrap.css */
@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
p,h2{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
*,*::before,*::after{box-sizing:border-box;}
section{display:block;}
h2{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
a{color:#2ed3ae;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#1f957b;text-decoration:none;}
img{vertical-align:middle;border-style:none;}
a{touch-action:manipulation;}
h2{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:#151515;}
h2{font-size:60px;}
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
@media (min-width:576px){
.container{max-width:540px;}
}
@media (min-width:768px){
.container{max-width:720px;}
}
@media (min-width:992px){
.container{max-width:960px;}
}
@media (min-width:1200px){
.container{max-width:1200px;}
}
@media (min-width:1600px){
.container{max-width:1400px;}
}
.text-center{text-align:center!important;}
/*! CSS Used from: https://livedemo00.template-help.com/wt_62267_v8/62267-default/css/style.css */
a:focus{outline:none!important;}
*:focus{outline:none;}
p{margin:0;}
a{display:inline-block;text-decoration:none;transition:.33s all ease;}
a,a:active,a:focus{color:#2ed3ae;}
a:hover,a:focus{color:#1f957b;text-decoration:none;}
img{display:inline-block;max-width:100%;height:auto;}
h2{margin-top:0;margin-bottom:0;font-family:inherit;font-weight:500;color:#151515;}
h2{font-size:26px;line-height:1.3;font-weight:200;}
@media (min-width:768px){
h2{font-size:32px;line-height:1.33333;}
}
@media (min-width:992px){
h2{font-size:44px;}
}
@media (min-width:1200px){
h2{font-size:60px;}
}
.button{display:inline-block;width:auto;max-width:100%;border:1px solid;border-radius:3px;padding:12px 30px;font-size:12px;line-height:24px;font-family:libre franklin,Helvetica,Arial,sans-serif;font-weight:600;letter-spacing:.06em;transition:.33s all ease;white-space:normal;text-transform:uppercase;cursor:pointer;text-align:center;}
@media (min-width:992px){
.button{padding:16px 40px;font-size:12px;line-height:24px;}
}
*+.button{margin-top:25px;}
@media (min-width:768px){
*+.button{margin-top:35px;}
}
.page .button-primary{color:#fff;background-color:#02cd89;border-color:#02cd89;}
.page .button-primary:hover,.page .button-primary:focus,.page .button-primary:active{color:#fff;background-color:#000;border-color:#000;}
.bg-gray-dark{color:#fff;}
.bg-gray-dark h2{color:#fff;}
.bg-gray-dark a,.bg-gray-dark a:active,.bg-gray-dark a:focus{color:inherit;}
.bg-gray-dark a:hover{color:#FFF;}
.bg-gray-dark{background-color:#333;}
.bg-image{background-size:cover;background-position:center center;background-repeat:no-repeat;}
.text-center{text-align:center;}
.section-xxl{padding-top:75px;padding-bottom:75px;}
@media (min-width:1200px) and (min-height:800px){
.section-xxl{padding-top:165px;padding-bottom:190px;}
}
.col-lg-5 h4{
  font-weight: bold;
  line-height: 0.2;
}
*+p{margin-top:16px;}
p+*{margin-top:22px;}
@media (min-width:992px){
*+p{/*margin-top:28px;*/}
}
.rd-parallax-light h2,.rd-parallax-light p{color:#fff;}
.parallax-container{position:relative;overflow:hidden;}
.material-parallax{position:absolute;top:0;left:-1px;right:-1px;bottom:0;}
.material-parallax img{display:none;position:absolute;left:50%;bottom:0;min-width:101%;min-height:101%;transform:translate3d(-50%,0,0);max-width:none;}
.parallax-content{position:relative;z-index:1;}










</style>

<!-- visual section -->
<div class="visual" id="visual" style="">
  <div class="text">
    <h1>Pressing &amp; linge livrés à domicile dans Abidjan</h1>
    <h2>Nous récupérons, nettoyons &amp; livrons vos vêtements en 48h</h2>

    <style>
      @media (max-width: 767px) {
#promo-bottom { line-height: 20px; }
#promo-bottom .promo-container { padding: 10px 0;}
}
</style>
    <div class="action-forms-container">
      <div class="place-order-form form-container call-to-action">
        <a href="{{route('items.index')}}" class="order-zip-form order-location-form" rel="top" method="POST" data-trk-trigger="submitWithValues" data-trk-event="submitPostCode" data-trk-location-identifier="fr_paris"
          novalidate="">
          <fieldset>
            <div class="col">
              <input type="submit" value="Commandez maintenant">
            </div>
          </fieldset>
        </a>

        <div class="geolocation-blocked-warning">Si vous souhaitez utiliser la fonction de géolocalisation merci de l'autoriser dans les préférences de votre navigateur</div>
      </div>

      <div style="clear: both"></div>
    </div>
  </div>
</div>


<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 620px; width: 1349px; z-index: -999998; position: absolute;">
  <div class="backstretch-item" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999;">
    <img alt="" src="/assets/images/banner.jpg"
      style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1349px; height: 899.333px; max-width: none; left: 0px; top: -139.667px; right: auto; bottom: auto;"></div>
</div>
</section>



<section class="section-xl bg-default text-center cms-content mobile-hidde" id="section-see-features" style="padding-top: 10px!important">
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-10 col-xl-8">
              <h3 style="font-size: 35px;">Fini le linge qui s’accumule! Fini le manque de temps pour les choses essentielles ! Fini le stress du weekend.</h3>
              <div class="">

                <iframe style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); width:100%;" width="560" height="315" src="https://www.youtube-nocookie.com/embed/sSfK_xR5Mt0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>
              <p class="tsp">Chez Elavoo, nous croyons que le nettoyage à sec et la lessive devraient être un art. Tout ce que nous faisons vise à créer une expérience unique. Nos partenaires utilisent un mélange de technologies de nettoyage écologiques modernes et de savoir-faire artisanal, afin de vous assurer que vos linges sont renvoyés en parfait état.</p>
            </div>
          </div>
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon "><img src="/assets/images/command.svg" style="width:100px" alt=""> </span></div>
                <p class="blurb__title">Pratique</p>
                <p>Disponible 7/7 de 8H à 19H </p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon"><img src="/assets/images/livreur.svg" alt="" style="width: 120px;"></span></div>
                <p class="blurb__title">Professionel</p>
                <p>Livraison à votre convenance en 48H, 24H. Vous choisissez la date et le canal horaire de la livraison.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-circle blurb-circle_centered">
                <div class="blurb-circle__icon"><span class="icon"><img src="/assets/images/clean_clothes.svg" style="width:100px" alt=""></span></div>
                <p class="blurb__title">Prix attractif</p>
                <p>Collecte &amp; livraison offerte</p>
              </article>
            </div>
          </div>
        </div>
      </section>



<section class="bg-gray-lighter object-wrap">
    <div class="section-xxl section-xxl_bigger">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3>Comment ça marche ?</h3>
                    <p>Commandez en seulement trois étapes : </p>
                </div>
            </div>
        </div>
    </div>
    <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image: url(http://www.apprenticeship.ng/wp-content/uploads/2019/04/DRYCLEANING.jpg)"></div>
</section>




<section class="section-xl bg-gray-lighter">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon "><img src="/assets/images/command.svg" style="width:100px" alt=""> </span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title">Commandez via le site internet elavoo</p>
                    <p>Collectez votre linge en ligne sur elavoo.com et passez la commande.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon "><img src="/assets/images/livreur.svg" alt="" style="width: 120px;"> </span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title">Rencontrez un livreur elavoo</p>
                    <p>Nous collectons vos vêtements chez vous à domicile et au bureau grâce à l'adresse que vous nous aurez indiquée.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <!-- Blurb minimal-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><span class="icon"><img src="/assets/images/clean_clothes.svg" style="width:100px" alt=""></span></div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title">Votre linge propre vous est rendu.</p>
                    <p>Nous vous livrerons vos vêtements propres en 48 H, ou 24 H*.(*Service express)</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>




      <section class="section-xl bg-default">
        <div class="container">
          <div class="row row-50 align-items-lg-center justify-content-lg-between">
            <div class="col-lg-5">
              <h3>Pourquoi elavoo ?</h3>
              <h4> Innovations</h4>
              <p>Elavoo utilise le meilleur de la technologie au service du consommateur.</p>
              <h4>Prise en charge</h4>
              <p>Nous collectons vos vêtements et vous les ramenons propres et frais.</p>
              <h4> Confort</h4>
              <p>Profitez de votre famille et de votre temps libre.</p>
              <h4>Qualité supérieure</h4>
              <p>Nous utilisons des solvants respectueux de l'environnement dans la manipulation de vos vêtements. Elavoo.com offre le meilleur service de sa catégorie.</p>
            </div>
            <div class="col-lg-6">
              <div class="row gallery-wrap">
                <div class="col-6"><img src="/assets/images/elav-ino.jpg" alt="" width="301" height="227">
                </div>
                <div class="col-6"><img src="/assets/images/elav_prise.jpg" alt="" width="301" height="227">
                </div>
                <div class="col-6"><img src="/assets/images/elav-conf2.png" alt="" width="301" height="227">
                </div>
                <div class="col-6"><img src="/assets/images/elav-fam.jpg" alt="" width="301" height="227">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="bg-gray-dark text-center">
              <!-- RD Parallax-->
              <div class="parallax-container bg-image rd-parallax-light" data-parallax-img="images/parallax-01.jpg"><div class="material-parallax parallax"><img src="https://livedemo00.template-help.com/wt_62267_v8/62267-default/images/parallax-01.jpg" alt="" style="display: block; transform: translate3d(-50%, 114px, 0px);"></div>
                <div class="parallax-content">
                  <div class="container section-xxl">
                    <h2>Commandez maintenant</h2>
                    <p>Nos tarifs pressing et linge au kilo</p>
                    <a class="button button-primary" href="/items">Consultez nos prix</a>
                  </div>
                </div>
              </div>
      </section>








</div>
</div>



@endsection
