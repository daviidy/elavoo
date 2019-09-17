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
    <h1>Avantage exclusif pour les entreprises partenaires</h1>
    <h2>Nous récupérons, nettoyons &amp; livrons vos vêtements</h2>
    <style>
      .visual .text .action-forms-container .form-container .col input[type=submit] { padding: 14px 10px; }
</style>
    <style>
      @media (max-width: 767px) {
#promo-bottom { line-height: 20px; }
#promo-bottom .promo-container { padding: 10px 0;}
}
</style>
  </div>
</div>


<div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 620px; width: 1349px; z-index: -999998; position: absolute;">
  <div class="backstretch-item" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 100%; z-index: -999999;">
    <img alt="" src="/assets/images/why-2.png"
      style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1349px; height: 899.333px; max-width: none; left: 0px; top: -139.667px; right: auto; bottom: auto;"></div>
</div>
</section>
<section class="cms-content mobile-hidden">
<section id="why" class="wow fadeInUp mobile-hidden animated" style="visibility: visible; animation-name: fadeInUp;">
  <div class="content-section">
    <div class="advantages">
      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important; width: 70px;" style="margin-bottom: 35px;"><img src="/assets/images/corporate_partners.svg"></div>
          <!--img src="/assets/images/elavoo_phone.svg" alt="Flexible"-->
        </div>
        <div class="text-wrap">
          <h3>Pour Les Entreprises</h3>
          <p>Une main-d'œuvre motivée rend une entreprise plus productive. Donnez à vos employés les avantages du TEMPS gratuit, des économies supplémentaires et de la commodité, lorsque vous leur accordez Elavoo comme avantages.</p>
        </div>
        <div class="clear"></div>
      </div>

      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important;" style="margin-bottom: 35px;"><img src="/assets/images/hospitality.svg"></div>
        </div>
        <div class="text-wrap">
          <h3>Pour Les Hopitaux</h3>
          <p>Elavoo corporate fait une offre exceptionnel aux hopitaux en enlevant et traitant leurs linges. Gagnez en temps et en productivité</p>
        </div>
        <div class="clear"></div>
      </div>

      <div class="advantage">
        <div class="img-icon">
          <div style="font-size:50px!important; width: 70px;" style="margin-bottom: 35px;"><img src="/assets/images/for_hotels.svg"></div>
        </div>
        <div class="text-wrap">
          <h3>Pour Les Hotels</h3>
          <p>Elavoo corporate vous offre, à vous et à vos client, une expérience unique et professionnelle.</p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</section>

<!--style>@media (max-width: 767px) { .home { background: url(https://res.cloudinary.com/zipjet/image/upload/q_auto:good/v1518717543/deals-dark-mobile-2_on3zon.png) center top no-repeat; background-size: cover; } }</style-->

<div class="divider-wrap">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>
<section id="contact-us-corporate" class="content-section">
        <h2 class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Nous contacter</h2>
    <strong class="sub-heading wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"></strong>
    <div class="wow fadeInLeft column column-1 animated" style="visibility: visible; animation-name: fadeInLeft;">
        <p>Chez Elavoo Corporate, nous offrons aux entreprises un service sur mesure adapté à vos besoins.</p>
        <span class="line"></span>
        <p>
            <span class="color-dark"><b>Coordonnées :</b><br>
            <span class="color-green">(+225) 49922028</span><br>
            <a href="mailto:info@elavoo.com" class="color-green">info@elavoo.com</a>
        </span></p>
        <span class="line"></span>
        <p>Si votre entreprise est éventuellement intéressée par un service de linge et de pressing à domicile, N’hésitez pas à nous contacter.</p>
    </div>
    <div class="wow fadeInRight column animated" style="visibility: visible; animation-name: fadeInRight;">


<form action="mailto:info@elavoo.com" method="post" class="enquiry-corporate" novalidate="">

    <div class="inputs">
        <input type="hidden" id="form-csrf" name="form[__csrf]" value="7b10338f79d0767e5a0f2e3fe7ee1ec2695424b6a6c76e5c44015faff5b1a132da3ff2f7">

        <div class="column pad-r-2 pos-rel">
            <label for="form-name" class="formal--label">Nom</label><input class="formal--control form-control" id="form-name" name="form[name]" value="" placeholder="" type="text" data-parsley-required="true" data-parsley-id="0773"><ul class="parsley-errors-list" id="parsley-id-0773"></ul>
        </div>

        <div class="column pad-l-2 pos-rel">
            <label for="form-phone" class="formal--label">Numéro de mobile</label><input class="formal--control form-control" id="form-phone" name="form[phone]" value="" placeholder="" type="text" data-parsley-required="true" data-parsley-id="7860"><ul class="parsley-errors-list" id="parsley-id-7860"></ul>
        </div>

        <div class="clear"></div>

        <div class="pos-rel">
            <label for="form-email" class="formal--label">E-mail</label><input class="formal--control form-control" id="form-email" name="form[email]" value="" placeholder="" type="email" data-parsley-required="true" data-parsley-type="email" data-parsley-id="1393"><ul class="parsley-errors-list" id="parsley-id-1393"></ul>
        </div>

        <div class="pos-rel">
            <label for="form-message" class="formal--label">Message</label>
<textarea class="formal--control form-control" id="form-message" name="form[message]" placeholder="" data-parsley-id="8896"></textarea><ul class="parsley-errors-list" id="parsley-id-8896"></ul>
        </div>

        <div style="text-align: center;">
            <input type="submit" value="Renseignez-vous maintenant" class="button-primary corporate-enquiry-form-submit">
        </div>
    </div>

    <div class="alert alert-success hidden">
        Votre demande a été envoyée. Nous vous contacterons dès que possible.    </div>

</form>

<script>
    window.addEventListener('load', function() {
        $('form.enquiry-corporate').on('submit', function () {

            var $form = $(this);

            $.ajax({
                type: 'POST',
                url:  $form.attr("action"),
                data: $form.serialize(),

                success: function() {
                    $form.find('.inputs').hide();
                    $form.find('.alert-success').show();
                }
            });

            return false;
        });
    });
</script>
    </div>
    <div class="clear"></div>
  </section>
  <div class="divider-wrap">
    <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
  </div>
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
      <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image: url(/assets/images/why-21.jpg)"></div>
  </section>




  <section class="section-xl bg-gray-lighter">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
                <!-- Blurb minimal-->
                <article class="blurb blurb-minimal">
                  <div class="unit flex-row unit-spacing-md">
                    <div class="unit-left">
                      <div class="blurb-minimal__icon"><span class="icon "><img src="/assets/images/elav-phone.png" alt=""> </span></div>
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
                      <div class="blurb-minimal__icon"><span class="icon "><img src="/assets/images/elav-car.png" alt="" style="width: 70px;"> </span></div>
                    </div>
                    <div class="unit-body">
                      <p class="blurb__title">Rencontrez un livreur elavoo</p>
                      <p>Nous collectons vos vêtements chez vous à domicile et au bureau grâce à l'adresse que vous nous aurez indiqué.</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-6 col-lg-4">
                <!-- Blurb minimal-->
                <article class="blurb blurb-minimal">
                  <div class="unit flex-row unit-spacing-md">
                    <div class="unit-left">
                      <div class="blurb-minimal__icon"><span class="icon"><img src="/assets/images/elav_desk.png" alt=""></span></div>
                    </div>
                    <div class="unit-body">
                      <p class="blurb__title">Votre linge propre vous est rendu.</p>
                      <p>Nous vous livrerons vos vêtements propre en 48H, ou 24H*.(*Service express)</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>

<!--div class="divider-wrap mobile-hidden">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div>


<div class="divider-wrap mobile-hidden">
  <div class="divider wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
</div-->

</section>





</div>
</div>



@endsection
