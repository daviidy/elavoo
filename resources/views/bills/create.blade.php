@extends('layouts.menu-list-items')

@section('content')

<style media="screen">

/*! CSS Used from: https://www.codecademy.com/webpack/98.18eb2975c5e856f3ffc3.chunk.css */
.btn__28utPbbbrFvjM_kBjYubUO{display:-webkit-inline-flex;display:inline-flex;-webkit-justify-content:center;justify-content:center;font-weight:700;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;border:1px solid transparent;border-radius:2px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;padding:.375rem 1rem;font-size:1rem;line-height:1.5;min-width:8rem;transition:all .1s ease-in-out;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8{color:#fff;background-color:#6400e4;border-color:transparent;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8:hover{box-shadow:0 2px 4px rgba(0,0,0,.3);}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #6400e4;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8:focus,.btn-brand-purple__2HsGqL74je_Znllj96ANu8:hover{text-decoration:none;color:#fff;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8:focus:active,.btn-brand-purple__2HsGqL74je_Znllj96ANu8:hover:active{box-shadow:0 2px 4px rgba(0,0,0,.3);}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8:active{background-color:#5000b6;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8:disabled{background-color:#525252;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8:disabled:hover{box-shadow:none;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW{color:#0274b5;background-color:initial;border:1px solid #0274b5;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:focus,.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:hover{background-color:#0274b5;box-shadow:none;color:#fff;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:focus:active,.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:hover:active{background-color:#8333e9;box-shadow:none;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:hover{box-shadow:0 2px 4px 0 rgba(0,0,0,.3);}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #0274b5;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:disabled{border-color:#525252;color:#525252;background-color:initial;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.flat__PCxKRaciwPQZPxRchKpFY{color:#6400e4;background-color:initial;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.flat__PCxKRaciwPQZPxRchKpFY:active,.btn-brand-purple__2HsGqL74je_Znllj96ANu8.flat__PCxKRaciwPQZPxRchKpFY:hover{box-shadow:none;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.flat__PCxKRaciwPQZPxRchKpFY:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #6400e4;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.flat__PCxKRaciwPQZPxRchKpFY:disabled{color:#525252;background-color:initial;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0{color:#fff;background-color:#141c3a;border-color:transparent;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:hover{box-shadow:0 2px 4px rgba(0,0,0,.3);}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #141c3a;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:focus,.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:hover{text-decoration:none;color:#fff;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:focus:active,.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:hover:active{box-shadow:0 2px 4px rgba(0,0,0,.3);}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:active{background-color:#10162e;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:disabled{background-color:#525252;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0:disabled:hover{box-shadow:none;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW{color:#141c3a;background-color:initial;border:1px solid #141c3a;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW:focus,.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW:hover{background-color:#141c3a;box-shadow:none;color:#fff;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW:focus:active,.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW:hover:active{background-color:#434961;box-shadow:none;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW:hover{box-shadow:0 2px 4px 0 rgba(0,0,0,.3);}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #141c3a;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.outline__1yTvd7pONcHSrTivdxRTLW:disabled{border-color:#525252;color:#525252;background-color:initial;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.flat__PCxKRaciwPQZPxRchKpFY{color:#141c3a;background-color:initial;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.flat__PCxKRaciwPQZPxRchKpFY:active,.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.flat__PCxKRaciwPQZPxRchKpFY:hover{box-shadow:none;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.flat__PCxKRaciwPQZPxRchKpFY:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #141c3a;}
.btn-brand-dark-blue__2mZAGNDeIumVOjdEzxUnP0.flat__PCxKRaciwPQZPxRchKpFY:disabled{color:#525252;background-color:initial;}
.small__8Vty_qXjdDgOHfLWEgzC8{padding:.25rem .75rem;font-size:1rem;line-height:1.5;min-width:8rem;}
.basicBtn__3TwUrbvJiSQ1fnlE6tLXUs{display:inline-block;text-align:center;text-decoration:none;white-space:nowrap;vertical-align:middle;cursor:pointer;font-family:inherit;}
.basicBtn__3TwUrbvJiSQ1fnlE6tLXUs:active:focus,.basicBtn__3TwUrbvJiSQ1fnlE6tLXUs:focus{outline:none;}
.basicBtn__3TwUrbvJiSQ1fnlE6tLXUs:focus,.basicBtn__3TwUrbvJiSQ1fnlE6tLXUs:hover:focus{text-decoration:none;}
.basicBtn__3TwUrbvJiSQ1fnlE6tLXUs:active{background-image:none;outline:0;}
.basicBtn__3TwUrbvJiSQ1fnlE6tLXUs:disabled{cursor:not-allowed;opacity:.65;}
/*! CSS Used from: https://www.codecademy.com/webpack/132.b0ca2c49a6d3e4f35cbc.chunk.css */
*,:after,:before{box-sizing:inherit;}
h3,h5,p{margin-top:0;}
p{margin-bottom:1rem;}
ul{margin-bottom:1rem;}
ul{margin-top:0;}
ul ul{margin-bottom:0;}
a{color:#4b35ef;text-decoration:none;background-color:initial;-webkit-text-decoration-skip:objects;}
a:hover{text-decoration:underline;}
svg:not(:root){overflow:hidden;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;}
button::-moz-focus-inner{padding:0;border-style:none;}
h3,h5{margin-bottom:1rem;font-weight:700;line-height:1.1;color:#292929;}
h3{font-size:1.6rem;}
h5{font-size:1.25rem;}
body{
  font-family: 'Montserrat', sans-serif !important;
    font-weight: 300 !important;
    line-height: 1.88889 !important;
}
/*! CSS Used from: https://www.codecademy.com/webpack/38.617f3ee80ec4d6603ced.chunk.css */
.spacing-tight__3StcVJf9_6aQyGzRLOS40J{font-size:1.1rem;}
.spacing-tight__3StcVJf9_6aQyGzRLOS40J .p__1SFGjPZTzMflwzxYM4F4mU{line-height:1.6;word-wrap:break-word;overflow-wrap:break-word;word-break:break-word;}
.spacing-tight__3StcVJf9_6aQyGzRLOS40J .p__1SFGjPZTzMflwzxYM4F4mU:empty{display:none;}
.spacing-tight__3StcVJf9_6aQyGzRLOS40J .p__1SFGjPZTzMflwzxYM4F4mU:last-child{margin-bottom:0;}
/*! CSS Used from: https://www.codecademy.com/webpack/portal-scenes-Paths.f86eb1f8826580b6b934.chunk.css */
.syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x{color:inherit;}
.syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x:active,.syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x:focus,.syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x:hover{text-decoration:none;color:inherit;}
.syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x:last-of-type .syllabusListItem__mpY1sGpywSxvQoLGafjhN{border:0;}
.syllabusListItem__mpY1sGpywSxvQoLGafjhN{border-bottom:1px solid #e0e0e0;padding:0 .3125rem;cursor:pointer;}
.started__KTm1uulNlc-O95b5iUR2L .iconContainer__2NxgQpF3yVbdNRHxOZbW2r,.started__KTm1uulNlc-O95b5iUR2L .syllabusRowTitle__pRjk5BndGNBNgkZWZzTuB,.started__KTm1uulNlc-O95b5iUR2L .type__102ExoFjjF06J5E3XuOkUj{color:#292929;font-weight:700;}
.started__KTm1uulNlc-O95b5iUR2L .iconContainer__2NxgQpF3yVbdNRHxOZbW2r{border-color:#292929;}
.startBtnContainer__2mLyMC2w44gbDfmS449OW5{padding:0;margin-left:auto;}
.startBtnContainer__2mLyMC2w44gbDfmS449OW5:focus .startBtn__1MzpO37unEPi86qEMY6NrY,.startBtnContainer__2mLyMC2w44gbDfmS449OW5:hover .startBtn__1MzpO37unEPi86qEMY6NrY{opacity:1;}
.startBtn__1MzpO37unEPi86qEMY6NrY{display:none;opacity:0;text-transform:uppercase;transition:opacity .2s;}
.startBtn__1MzpO37unEPi86qEMY6NrY:focus,.startBtn__1MzpO37unEPi86qEMY6NrY:hover{opacity:1;}
@media only screen and (min-width:48rem){
.startBtn__1MzpO37unEPi86qEMY6NrY{display:block;}
}
.syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x:focus .startBtn__1MzpO37unEPi86qEMY6NrY,.syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x:hover .startBtn__1MzpO37unEPi86qEMY6NrY{opacity:1;}
.syllabusRow__3tNiSe12VLQrvtJcPOPMTY{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;list-style:none;max-width:60rem;}
.syllabusRow__3tNiSe12VLQrvtJcPOPMTY>div{padding:1rem;}
.syllabusRow__3tNiSe12VLQrvtJcPOPMTY>div:first-of-type{padding:.3rem;}
.iconContainer__2NxgQpF3yVbdNRHxOZbW2r{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;border:2px solid #6e6e6e;border-radius:50rem;margin-right:.75rem;color:#6e6e6e;}
.type__102ExoFjjF06J5E3XuOkUj{color:#6e6e6e;width:7rem;}
.contentItemList__7v325J_mQTFaUhdEPf07w{list-style:none;-webkit-align-items:center;align-items:center;padding-left:0;}
.syllabusRowTitle__pRjk5BndGNBNgkZWZzTuB{font-size:1.1rem;display:inline;color:#484848;font-weight:400;}
.moduleTitle__3FIvpfzRqvQnGNizRkhdsa{margin-top:2.5rem;color:#292929;}
.markdown__1wetAlS2L0p97MUBALqDIX{margin-bottom:1rem;}
.trackTitleContainer__37fUa9E8KwuwyxEfHjEQTN{display:-webkit-flex;display:flex;-webkit-justify-content:space-between;justify-content:space-between;-webkit-align-items:flex-start;align-items:flex-start;}
.trackCard__8xHGI6bpQ9WJ7R25lFquX{border-radius:2px;box-shadow:0 1px 6px 0 rgba(0,0,0,.2);border-left:6px solid;padding:2.5rem 1.5rem;transition:padding .2s,border .2s;margin-bottom:3rem;width:100%;position:relative;overflow:hidden;background:#fff;}
.trackCard__8xHGI6bpQ9WJ7R25lFquX .detailButton__1EMEvjjq0J0Gtpr_BXKG-U{display:none;}
@media only screen and (min-width:48rem){
.trackCard__8xHGI6bpQ9WJ7R25lFquX .detailButton__1EMEvjjq0J0Gtpr_BXKG-U{display:-webkit-inline-flex;display:inline-flex;margin:2.5rem 0 0;padding-left:0;}
.trackCard__8xHGI6bpQ9WJ7R25lFquX .detailButton__1EMEvjjq0J0Gtpr_BXKG-U .detailButtonIcon__33zPjisV-d02Uvt4uf1SZC{margin:0 .5rem 0 0;}
}
.plainList__3PaDfXGopMtikt5NuezQXb{margin-bottom:0;padding-left:0;list-style:none;}
.moduleContainer__2zWz2ZrsWlyysI9Ex267L0{border-bottom:1px solid #e0e0e0;}
.moduleContainer__2zWz2ZrsWlyysI9Ex267L0:last-of-type{border:0;}
.trackTitle__3pO4XMgdaEm_gjnxdyImXI{line-height:1.4;margin-bottom:.5rem;}
.contentItemList__3Q27iLuye8CH9KDdZgmCJJ{display:-webkit-flex;display:flex;-webkit-flex-wrap:wrap;flex-wrap:wrap;list-style-type:none;padding-left:0;margin-bottom:1rem;font-weight:700;}
.contentItemList__3Q27iLuye8CH9KDdZgmCJJ>li{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;padding-right:1.5rem;padding-top:.75rem;}
.btnRow__2UUVsL_4nIEHyVNyLeRJ8N{position:relative;display:none;}
@media only screen and (min-width:48rem){
.btnRow__2UUVsL_4nIEHyVNyLeRJ8N{display:-webkit-flex;display:flex;}
}
.iconContainer__2FZbaZzuIjiHUhntQin_Lk{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;border:2px solid #6e6e6e;border-radius:50rem;padding:.3rem;margin-right:.75rem;color:#6e6e6e; width: 38px; height: 38px;}
.resumeBtn__2LWHepDxp-cv3HbdZE_cGy{margin-left:1rem;}
.mobileBtnContainer__2jSAZ0pbjlvtbLFqtgkaGh{margin-top:1rem;}
.mobileBtnContainer__2jSAZ0pbjlvtbLFqtgkaGh .mobileDetailButton__1jnTDHiIQUQWXQImWb0d1e{width:100%;display:block;}
.mobileBtnContainer__2jSAZ0pbjlvtbLFqtgkaGh .mobileDetailButton__1jnTDHiIQUQWXQImWb0d1e .detailButtonIcon__33zPjisV-d02Uvt4uf1SZC{display:none;}
@media only screen and (min-width:48rem){
.mobileBtnContainer__2jSAZ0pbjlvtbLFqtgkaGh{display:none;}
}



.iti--allow-dropdown input, .iti--allow-dropdown input[type=text], .iti--allow-dropdown input[type=tel], .iti--separate-dial-code input, .iti--separate-dial-code input[type=text], .iti--separate-dial-code input[type=tel] {

    width: 100%;
    color: #8492a6;
    background: #fff;
    height: 47px;
    padding: 6px 135px !important;
    margin-bottom: 1.2rem;
    border-radius: 26px;
    border-color: #dfe3ee;
}

</style>

    <!--CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/css/intlTelInput.css">

    <style>
        .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/img/flags.png") !important;}

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
        .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/img/flags@2x.png") !important;}
        }
    </style>



    <!--style encart pressing-->

    <style media="screen">
    /*! CSS Used from: https://openclassrooms.com/bundles/common/css/master-ba8beaf8.css ; media=all */
@media all{
body a{color:#0274b5;text-decoration:none;}
body a:hover{color:#0274b5;}
h2{color:rgba(0,0,0,.92);margin:10px 0;font-weight:700;}
h2{font-size:1rem;line-height:1.75rem; text-align: center;}
.ui-front{z-index:100;}
.ui-autocomplete{position:absolute;top:0;left:0;cursor:default;}
.ui-menu{list-style:none;padding:2px;margin:0;display:block;outline:0;}
.ui-widget{font-family:Verdana,Arial,sans-serif;font-size:1.1em;}
.ui-widget-content{border:1px solid #aaa;background:#fff 50% 50% repeat-x;color:#222;}
.ui-widget{font-family:Montserrat,sans-serif;font-size:1.1em;}
.ui-widget-content{border:1px solid #bebebe;background:#ececec;}
.ui-menu{padding:0;}
ul.ui-autocomplete{box-shadow:-2px 2px 4px 0 rgba(0,0,0,.15);position:absolute;max-height:300px;overflow-y:auto;overflow-x:hidden;}
input:not([type=checkbox]):not([type=radio]):focus{outline:0;}
input[type=text]::-ms-clear{display:none;}
.oc-form{font-size:.875rem;position:relative;color:rgba(0,0,0,.92);}
.oc-form input[type=text],.oc-form select{transition:background .2s;border-radius:0;box-sizing:border-box;box-shadow:none;border:1px solid #bebebe;background:#fff;font-family:Montserrat,sans-serif;}
.oc-form input[type=text]:focus,.oc-form select:focus{border:1px solid #7451eb;background:#fff;box-shadow:0 0 8px 3px rgba(116,81,235,.3);}
.oc-form input[type=text]:disabled,.oc-form select:disabled{background:#e5e5e5;border:1px solid #d2d2d2;}
.oc-form input[type=text],.oc-form select{outline:0;height:30px;line-height:24px;font-size:.875rem;padding:0 6px;}
.oc-form select{line-height:1;border:1px solid #bebebe;border-radius:0;font-size:.875rem;padding:6px 5px 6px 0;}
.autocomplete{position:relative;display:block;}
.autocomplete select{display:none;}
.autocomplete__selectedItems{margin:0;padding:0;margin-top:10px;padding-right:5px;}
.autocomplete__field{width:100%;}
.autocomplete__loader{opacity:0;position:absolute;top:7px;right:7px;}
.oc-body a,.oc-body div:not([class^=mce-]),.oc-body span,.oc-body ul{box-sizing:border-box;}
.spacer{margin-top:20px!important;margin-bottom:20px!important;}
.icon-spinner:before{content:"\f17f";}
[class*=" icon-"]{font-family:ocfont;line-height:1;font-weight:400;font-style:normal;speak:none;text-decoration:inherit;text-transform:none;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
[class*=" icon-"]:before{font-family:ocfont;}
.icon-spin{display:inline-block;animation:spin 2s infinite linear;margin:0 8px;}
.searchField{position:relative;display:table;width:100%;}
.searchField__wrapperInput{display:table-cell;vertical-align:middle;width:250px;}
.searchField__input{width:100%;}
.searchField__button{display:table-cell;margin-left:10px;}
.button--secondary{font-family:"Montserrat";font-size:.875rem;font-weight:700;text-align:center;line-height:1.5rem;}
.button--secondary{border-radius:4px;border-width:1px;border-style:solid;outline:none;padding:8px 16px;text-transform:uppercase;-webkit-transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;position:relative;overflow:hidden;color:#7451eb;background-color:#fff;border-color:#7451eb;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:hover,.button--secondary:focus{color:#fff;background-color:#0274b5;border-color:#0274b5;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:active{color:#0274b5;background-color:#fff;border-color:#0274b5;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:disabled{pointer-events:none;}
.button--secondary:after{content:'';position:absolute;top:50%;left:50%;width:5px;height:5px;background:#0274b5;opacity:0;border-radius:100%;-webkit-transform:scale(1, 1) translate(-50%);transform:scale(1, 1) translate(-50%);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;}
.button--secondary:disabled{color:#545454;background-color:#d2d2d2;border-color:#d2d2d2;-webkit-box-shadow:none;box-shadow:none;}
[class*=" icon-"]{font-family:"ocfont";line-height:1;font-weight:normal;font-style:normal;speak:none;text-decoration:inherit;text-transform:none;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.icon-spinner:before{content:"\f17f";}
[class*=" icon-"]{font-family:"ocfont";}
.icon-spin{display:inline-block;-webkit-animation:spin 2s infinite linear;animation:spin 2s infinite linear;margin:0 8px;}
a{color:rgba(0,0,0,0.92);}
a:hover{color:#7451eb;}
input:not([type=checkbox]):not([type=radio]):focus{outline:none;}
.button{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-decoration:none;cursor:pointer;font-weight:700;}
.button:disabled{color:#545454;border-color:#d2d2d2;background:#d2d2d2;}
.button:disabled{pointer-events:none;}
.mentorshipStudent__headWrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin:32px 0;width:100%;}
.mentorshipStudent__mentorContainer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:5px 10px;border:1px solid #f6f6f6;border-radius:5px;-webkit-box-shadow:rgba(121,121,121,0.35) 1px 2px 6px;box-shadow:rgba(121,121,121,0.35) 1px 2px 6px;width:100%;max-width:580px;}
.mentorshipStudent__mentorContainer{margin-top:32px;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;}
.mentorshipStudent__mentorContainer .button{width:220px;}
.mentorshipStudent__mentorNameWrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:-16px;}
.mentorshipStudent__mentorNameWrapper>*{margin-top:16px;}
.mentorshipStudent__name{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-weight:bold;margin-right:auto;}
.mentorshipStudent__name--mentor{text-align:center;}
.mentorshipStudent__name .avatar{vertical-align:middle;margin-right:16px;}
.mentorshipStudent__avatarLink{text-decoration:none;}
.mentorshipStudent__addMentor .searchField{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:-16px;}
.mentorshipStudent__addMentor .searchField>*{margin-top:16px;}
.mentorshipStudent__addMentor .searchField__wrapperInput{margin-right:8px;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;}
.mentorshipStudent__addMentor .searchField__input input{min-height:42px;min-width:200px;border-radius:4px;-webkit-box-shadow:0px 3px 13px rgba(0,0,0,0.1);box-shadow:0px 3px 13px rgba(0,0,0,0.1);border-color:transparent;padding-left:40px;}
.mentorshipStudent__addMentor .searchField__input input:focus{border-color:transparent;}
.mentorshipStudent__addMentor .searchField__input input:focus ~ .searchField__icon{fill:#7451eb;}
.mentorshipStudent__addMentor .searchField__icon{height:32px;position:absolute;top:4px;left:4px;}
.mentorshipStudent__addMentor .searchField .autocomplete__loader{top:14px;}
.mentorshipStudent__addMentor .searchField .button{-ms-flex-negative:0;flex-shrink:0;margin-left:0;}
@media (min-width: 768px){
.mentorshipStudent__headWrapper{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;width:50%;}
.mentorshipStudent__mentorContainer{max-width:initial;}
.mentorshipStudent__mentorContainer{margin-top:0;margin-left:24px;}
}
.avatar{border-radius:50%;display:inline-block;position:relative;width:40px;height:40px;background-size:cover;background-position:center center;background-color:transparent;-webkit-box-shadow:inset 0 0 0 1px rgba(0,0,0,0.1);box-shadow:inset 0 0 0 1px rgba(0,0,0,0.1);}
}

    </style>


<div style="margin-top: 3rem;" class="content-section">



    <div class="container">
        <div class="content-container content-container-contact">
            <div class="row">
                <div class="content-header">
                    <img width="50" src="http://www.naturessupplycentre.net/wp-content/uploads/2017/01/natures-supply-centre-Our-Location-Map.png" alt="">
                    <h1>Merci de renseigner vos coordonnées pour la récupération et livraison de votre linge.</h1>
                </div>
            </div>


            <div style="margin-bottom: 2rem !important;margin: auto;" class="mentorshipStudent__headWrapper">
                <div style="background: #fff;" class="mentorshipStudent__mentorContainer">
                    <h2 id="info" class="mentorshipStudent__title ">
                        Votre pressing habituel est-il partenaire Elavoo ? Si oui, insérez son code et nous livrerons vos vêtements à ce pressing.
                        <br>Sinon, continuez comme si de rien n'était.
                    </h2>
                    <div class="mentorshipStudent__mentorNameWrapper ">
                        <div class="mentorshipStudent__name mentorshipStudent__name--mentor">
                            <a href="/fr/membres/davidarmelyao" class="mentorshipStudent__avatarLink">
                                <i class="avatar" data-image-cdn-background-image="https://lh6.googleusercontent.com/-TZXrlQu6ZW8/AAAAAAAAAAI/AAAAAAAAAQA/8thwWx50N00/photo.jpg?sz=50"
                                  style="background-image: url(&quot;/images/users/{{Auth::user()->image}}&quot;);"></i>
                            </a>
                            <a href="/home">
                                {{Auth::user()->name}}
                            </a>
                        </div>
                    </div>
                    <div class="mentorshipStudent__addMentor">
                        <form name="assign_mentor_to_student" method="post" action="/fr/student/9695465/assign-mentor" class="oc-form--two-col oc-form--crud oc-form js-confirm">
                            <div class="spacer">
                                <span class="searchField">
                                    <span class="searchField__wrapperInput">
                                        <span class="autocomplete  js-autocomplete searchField__input" data-options="multiple: false, source: '/ajax/users/available-users?mentor=1&amp;user_id_not_in%5B0%5D=7220131'"
                                          data-option_data-mapping="{&quot;id&quot;:&quot;id&quot;,&quot;label&quot;:&quot;name&quot;,&quot;image&quot;:&quot;image&quot;}" data-widget="autocomplete">
                                          <input name="code_pressing"
                                              class="js-autocomplete-field  autocomplete__field ui-autocomplete-input" type="text" autocomplete="off">

                                              <select class="js-autocomplete-select" name=""></select>
                                            <ul class="js-autocomplete-multiSelectedList  autocomplete__selectedItems" style="display: none;"></ul>
                                            <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul>
                                        </span>
                                    </span>
                                    <button id="code_pressing_check" class="button button--secondary button--compact searchField__button" type="submit" data-open-on-change="false" data-cancel-button="true">
                                        Vérifier le code
                                    </button>
                                </span>
                            </div>
                            <input type="hidden" id="assign_mentor_to_student__token" name="assign_mentor_to_student[_token]" class=" textInput textInput--hidden" value="zdSfOOeoDbiKnpLbIqFdVsiGjZtB-S5BJhnl-ldglnA">
                        </form>
                    </div>
                </div>
            </div>




            <div class="row">
                <div id="new-customer-address-container">
                    <form action="{{url('envoi')}}" method="post" id="contact-form">
                        @csrf
                        {{--
                        <div class="row">
                            <div class="tablet-offset-by-one tablet-five offset-by-one five columns">
                                <label class="formal--label">Prénom</label>
                                @auth
                                <input value="{{Auth::user()->first_name == 'Prénoms' ? '' : Auth::user()->first_name}}" class="formal--control form-control" name="first_name" value="" placeholder="Votre prénom" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="first_name" value="" placeholder="Votre prénom" type="text">
                                @endauth
                            </div>
                            <div class="tablet-five five columns">
                                <label class="formal--label">Nom</label>
                                @auth
                                <input value="{{Auth::user()->first_name == 'Prénoms' ? '' : Auth::user()->first_name}}" class="formal--control form-control" name="last_name" value="" placeholder="Votre nom" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="last_name" value="" placeholder="Votre nom" type="text">
                                @endauth
                            </div>
                        </div>
                    --}}

                        <div class="row">
                            <div style="display:none;" class="tablet-offset-by-one tablet-ten offset-by-one five columns">
                                <label class="formal--label">Email</label>
                                @auth
                                <input type="text" disabled value="{{Auth::user()->email}}" class="formal--control form-control" name="email" value="" placeholder="Votre email">
                                @else
                                <input value="" class="formal--control form-control" name="email" value="" placeholder="Votre email" type="text">
                                @endauth
                            </div>
                            <div class="tablet-offset-by-one tablet-five offset-by-one five columns">
                                <label class="formal--label">Numéro de téléphone {{Auth::user()->tel ? Auth::user()->tel : ''}}</label>
                                <br>
                                @auth
                                <input value="" class="formal--control form-control" name="tel" placeholder="Numéro mobile" type="tel" id="phone">
                                @else
                                <input value="" id="phone" class="formal--control form-control" name="tel"  placeholder="Numéro mobile" type="tel">
                                @endauth
                            </div>
                            <div class="tablet-five five columns">
                                @auth
                                <input style="display: none;" value="{{Auth::user()->id}}" class="formal--control form-control" name="user_id" placeholder="Numéro mobile" type="tel">
                                @endauth
                            </div>
                            <div class="tablet-five five columns" style="position: relative;">

                                <label for="form-addressLine" class="formal--label">Choisir</label>
                                <a data-toggle="modal" data-target="#myModalAdress" href="#">
                                    <strong style="text-decoration: underline;">
                                        Ou créer une nouvelle adresse
                                    </strong>
                                </a>
                                <select required class="formal--control form-control" id="adress_id" name="adress_id">
                                    @auth
                                    @if(Auth::user()->adresses)
                                      @foreach(Auth::user()->adresses as $adress)
                                      <option value="{{$adress->id}}">{{$adress->city}}-{{$adress->state}}-{{$adress->town}}</option>
                                      @endforeach
                                     @endif
                                     @endauth
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 2rem;">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one five columns map-pin-input-container">
                                <label class="formal--label">Date de récupération du linge</label>
                                <input required value="" class="formal--control form-control" name="date_pickup" type="date" id="date">
                            </div>

                            <script type="text/javascript">
                            var today = new Date().toISOString().split('T')[0];
                            document.getElementsByName("date_pickup")[0].setAttribute('min', today);
                            </script>
                            <div class="tablet-five five columns" style="position: relative;">
                                <label for="form-addressLine" class="formal--label">Choisissez le type de service que vous souhaitez</label>
                                <select class="formal--control form-control" name="service">
                                    <option value="normal">Service Normal (48 H après réception de vos vêtements)</option>
                                    <option value="express">Service Express (24 H après réception de vos vêtements)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tablet-offset-by-one tablet-five offset-by-one five columns" style="position: relative;">
                                <label for="form-addressLine" class="formal--label">Choisissez le mode de paiement</label>
                                <select class="formal--control form-control" name="payment_mode">
                                    <option value="cash">Paiement à la livraison</option>
                                </select>
                            </div>
                            <div class="tablet-five five columns">
                                <label class="formal--label">Code Pressing</label>
                                <input disabled value="" class="formal--control form-control" name="code" type="text">

                            </div>
                        </div>
                        <div class="submit-block">
                            <input id="toSecondStep" type="submit" class="btn-submit" value="Continuer">
                        </div>
                    </form>
                </div>
            </div>


            <!--résumé commande-->

            <div style="margin-top: 2rem;" class="row">

                <div class="trackCard__8xHGI6bpQ9WJ7R25lFquX" style="border-color: rgb(93, 224, 177);">
                    <div class="trackTitleContainer__37fUa9E8KwuwyxEfHjEQTN">
                        <div>
                            <h3 class="trackTitle__3pO4XMgdaEm_gjnxdyImXI" id="track-Code-Foundations:-Introduction">Résumé de votre commande</h3>
                        </div>
                        <div class="btnRow__2UUVsL_4nIEHyVNyLeRJ8N"><a class="basicBtn__3TwUrbvJiSQ1fnlE6tLXUs btn__28utPbbbrFvjM_kBjYubUO btn-brand-purple__2HsGqL74je_Znllj96ANu8 outline__1yTvd7pONcHSrTivdxRTLW resumeBtn__2LWHepDxp-cv3HbdZE_cGy"
                              data-testid="path-syllabus-track-resume" data-btn="true" href="/items">Changer la commande</a></div>
                    </div>
                    <div>
                        <ul class="contentItemList__3Q27iLuye8CH9KDdZgmCJJ">
                            @if(session('orders'))
                            @php
                            $price = 0;
                            @endphp
                            @foreach(session('orders') as $order)
                            @php
                            $price = $price + ($order[2] * $order[1]);
                            @endphp
                            @endforeach
                            <li>
                              <svg class="iconContainer__2FZbaZzuIjiHUhntQin_Lk" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#0274b5"><path d="M135.49479,7.61458l-135.27083,47.47917l21.27604,60.24479v-34.48958l-0.67187,-2.23958l0.67188,-1.34375v-19.93229h10.52604l1.56771,-2.6875l75.69792,-26.65104l5.82292,2.46354c0.08399,0.5599 0.02799,1.23177 0.22396,1.79167c1.56771,4.47917 6.80274,6.63476 11.64583,4.92708c0.58789,-0.19597 1.03581,-0.61588 1.56771,-0.89583l5.82292,2.46354l6.49479,18.58854h12.09375zM120.26563,50.16667c-1.20378,-0.02799 -2.60351,0.02799 -3.80729,0.44792c-3.1914,1.11979 -5.12305,3.83528 -5.82292,6.71875h17.69271c-0.08399,-0.5319 -0.05599,-1.03581 -0.22396,-1.56771c-1.17578,-3.35937 -4.25521,-5.48698 -7.83854,-5.59896zM82.19271,51.73438c-2.01562,0.13997 -4.00326,0.64388 -6.04687,1.34375c-2.85547,1.00781 -5.48698,2.40756 -7.61458,4.25521h29.78646c-4.11524,-3.91927 -10.05013,-5.99088 -16.125,-5.59896zM28.66667,64.5v86h143.33333v-86zM60.24479,75.02604h80.17708l4.70313,4.47917c-0.11198,0.5599 -0.44792,0.97982 -0.44792,1.56771c0,4.73112 4.25521,8.51042 9.40625,8.51042c0.64388,0 1.20378,-0.11198 1.79167,-0.22396l4.70313,4.25521v27.77083l-4.70312,4.25521c-0.58789,-0.11198 -1.14778,-0.22396 -1.79167,-0.22396c-5.15104,0 -9.40625,3.7793 -9.40625,8.51042c0,0.58789 0.33594,1.00781 0.44792,1.56771l-4.70312,4.47917h-80.17708l-4.70312,-4.47917c0.11198,-0.5599 0.44792,-0.97982 0.44792,-1.56771c0,-4.73112 -4.25521,-8.51042 -9.40625,-8.51042c-0.64388,0 -1.20378,0.11198 -1.79167,0.22396l-4.70312,-4.25521v-27.77083l4.70313,-4.25521c0.58789,0.11198 1.14778,0.22396 1.79167,0.22396c5.15104,0 9.40625,-3.7793 9.40625,-8.51042c0,-0.58789 -0.33594,-1.00781 -0.44792,-1.56771zM100.78125,87.56771c-11.86979,0 -21.5,8.98633 -21.5,19.93229c0,10.94597 9.63021,19.93229 21.5,19.93229c11.86979,0 21.5,-8.98633 21.5,-19.93229c0,-10.94597 -9.63021,-19.93229 -21.5,-19.93229zM60.91667,98.98958c-5.15104,0 -9.40625,3.7793 -9.40625,8.51042c0,4.73112 4.25521,8.51042 9.40625,8.51042c5.15104,0 9.40625,-3.7793 9.40625,-8.51042c0,-4.73112 -4.25521,-8.51042 -9.40625,-8.51042zM139.75,98.98958c-5.15104,0 -9.40625,3.7793 -9.40625,8.51042c0,4.73112 4.25521,8.51042 9.40625,8.51042c5.15104,0 9.40625,-3.7793 9.40625,-8.51042c0,-4.73112 -4.25521,-8.51042 -9.40625,-8.51042z"></path></g></g>
                                </svg> Total de la commande: {{$price}}&nbsp;FCFA
                            </li>
                            @endif
                        </ul>
                    </div>


                    <div>
                        <div>
                            <ul class="plainList__3PaDfXGopMtikt5NuezQXb">
                                <li class="moduleContainer__2zWz2ZrsWlyysI9Ex267L0">
                                    <div>

                                        <ul class="contentItemList__7v325J_mQTFaUhdEPf07w">
                                            <a class="syllabusListLink__EzRgJAwbXcvKBoD1-Bc0x">
                                                @if(session('orders'))
                                                    @foreach(session('orders') as $order)
                                                <li class="syllabusListItem__mpY1sGpywSxvQoLGafjhN" data-testid="content-item-video">
                                                    <div class="syllabusRow__3tNiSe12VLQrvtJcPOPMTY">
                                                        <div class="iconContainer__2NxgQpF3yVbdNRHxOZbW2r "><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                          width="24" height="24"
                                                          viewBox="0 0 172 172"
                                                          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#0274b5"><path d="M86,35.83333c-14.33333,0 -21.5,-14.33333 -21.5,-14.33333h-4.4075c-6.493,0 -12.87133,1.763 -18.43983,5.10983l-22.99067,13.78867c-2.59433,1.56233 -3.9345,4.58667 -3.33967,7.55367l5.02383,25.11917c0.67367,3.354 3.612,5.762 7.0305,5.762h8.45667v57.33333c0,7.91917 6.41417,14.33333 14.33333,14.33333h71.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-57.33333h8.45667c3.4185,0 6.35683,-2.408 7.0305,-5.762l5.02383,-25.11917c0.59483,-2.967 -0.74533,-5.99133 -3.33967,-7.55367l-22.99067,-13.79583c-5.57567,-3.33967 -11.94683,-5.10267 -18.43983,-5.10267v0h-4.4075c0,0 -7.16667,14.33333 -21.5,14.33333z"></path></g></g>
                                                          </svg></div>
                                                        <div class="type__102ExoFjjF06J5E3XuOkUj">{{$order[2]}} FCFA</div>
                                                        <div>
                                                            <h5 class="syllabusRowTitle__pRjk5BndGNBNgkZWZzTuB">{{$order[1]}} {{$order[0]}}</h5>
                                                        </div>

                                                    </div>
                                                </li>
                                                    @endforeach
                                                @endif
                                            </a>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>



    <div class="modal fade in" id="myModalAdress" style="display: none; padding-left: 0px;">
                  <div class="modal-dialog">
                  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                  <h4 style="font-size: 24px;" class="modal-title">Ajouter une adresse</h4>
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>

                  <!-- Modal body -->
                  <form id="address_form" class="" action="{{route('adresses.store')}}" method="post">
                        @csrf

                  <div class="modal-body">

                      <input class="formal--control form-control" name="city" value=""placeholder="Ville" type="text"><br><br>
                      <input class="formal--control form-control" name="state" value="" placeholder="Commune" type="text"><br><br>
                      <input class="formal--control form-control" name="town" value="" placeholder="Quartier" type="text"><br><br>
                      @auth
                      <input id="user_id" style="display: none;" class="formal--control form-control" name="user_id" value="{{Auth::user()->id}}" type="text"><br><br>
                      @endauth
                      <textarea class="formal--control form-control" name="infos" placeholder="Rue, étage… Soyez le plus précis possible pour faciliter le travail de nos livreurs" rows="5" required></textarea>
                  </div>

                  <div class="submit-block">
                      <input type="submit" class="btn-submit" value="Continuer">
                  </div>

                  </form>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                  </div>



                  </div>
                  </div>
                  </div>


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput.js"></script>


<script>
    // - Declencher la Redirection automatique sur le dashboard une fois la commande confirmée
    if (localStorage.getItem('commandIsConfirmed') == "true") {
        console.log('Redirection automatique sur le dashboard')
        window.location.replace("{{route('home')}}")
    }
</script>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {

    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js",
    preferredCountries: ["ci", "sn", "cm", "ml"],
    autoPlaceholder: "aggressive",
    hiddenInput: "full",

  });
</script>
<script class="iti-load-utils" async="" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js"></script>

<script type="text/javascript">
$("#code_pressing_check").on('click', function(event) {
    event.preventDefault();
    var token = $("input[name=_token]").val();
    var code_pressing = $("input[name=code_pressing]").val();

    var data = {
        _token:token,
        code_pressing:code_pressing,

    };
    // Ajax Post
    $.ajax({
        type: "post",
        url: "/checkCodePressing",
        data: data,
        cache: false,
        success: function (data)
        {
            if (data == 'ok') {
                $.amaran({'message':'Code Valide !'});
                $("input[name=code]").val($("input[name=code_pressing]").val());
                $('.mentorshipStudent__addMentor').remove();
                $('#info').text("Code Valide ! Remplissez le formulaire ci-dessous pour valider votre commande");
                $('#info').css('color', '#02CD89');

            }
            else {
                $('#info').text("Code Invalide ! Réesayez ou continuez en remplissant le formulaire ci-dessous");
                $('#info').css('color', '#dc4f2f');
            }



        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
    return false;
});
</script>


<script type="text/javascript">

var form = $('#address_form ');

    form.submit(function(e) {

    e.preventDefault();

    $.ajax({
        type: 'post',
        url: '/addAddress',
        data: form.serialize(),
        dataType: 'json',
        cache:false,
        success: function(data) {
        $('#address_form ')[0].reset();

        $('#myModalAdress').modal('toggle');

        $('#adress_id').append("<option selected value='"+ data.id +"'>"+ data.city + "-" + data.state + "-" + data.town + "</option>");

      $.amaran({'message':"Adresse ajoutée avec succès!"});

        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
});

</script>

@endsection
