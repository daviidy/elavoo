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
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW{color:#6400e4;background-color:initial;border:1px solid #6400e4;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:focus,.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:hover{background-color:#6400e4;box-shadow:none;color:#fff;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:focus:active,.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:hover:active{background-color:#8333e9;box-shadow:none;}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:hover{box-shadow:0 2px 4px 0 rgba(0,0,0,.3);}
.btn-brand-purple__2HsGqL74je_Znllj96ANu8.outline__1yTvd7pONcHSrTivdxRTLW:focus{box-shadow:0 0 0 2px #fff,0 0 0 4px #6400e4;}
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
.iconContainer__2FZbaZzuIjiHUhntQin_Lk{display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;border:2px solid #6e6e6e;border-radius:50rem;padding:.3rem;margin-right:.75rem;color:#6e6e6e;}
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
body a{color:rgba(0,0,0,.92);text-decoration:underline;}
body a:hover{color:#7451eb;}
h2{color:rgba(0,0,0,.92);margin:10px 0;font-weight:700;}
h2{font-size:1.125rem;line-height:1.75rem;}
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
.button--secondary:hover,.button--secondary:focus{color:#7451eb;background-color:rgba(116,81,235,0.24);border-color:#7451eb;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:active{color:#7451eb;background-color:#fff;border-color:#7451eb;-webkit-box-shadow:none;box-shadow:none;}
.button--secondary:disabled{pointer-events:none;}
.button--secondary:after{content:'';position:absolute;top:50%;left:50%;width:5px;height:5px;background:#7451eb;opacity:0;border-radius:100%;-webkit-transform:scale(1, 1) translate(-50%);transform:scale(1, 1) translate(-50%);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;}
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
                        <br>Sinon continuez comme si de rien n'était.
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
                        <div class="row">
                            <div class="tablet-offset-by-one tablet-five offset-by-one five columns">
                                <label class="formal--label">Prénom</label>
                                @auth
                                <input value="{{Auth::user()->first_name}}" class="formal--control form-control" name="first_name" value="" placeholder="Votre prénom" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="first_name" value="" placeholder="Votre prénom" type="text">
                                @endauth
                            </div>
                            <div class="tablet-five five columns">
                                <label class="formal--label">Nom</label>
                                @auth
                                <input value="{{Auth::user()->last_name}}" class="formal--control form-control" name="last_name" value="" placeholder="Votre nom" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="last_name" value="" placeholder="Votre nom" type="text">
                                @endauth
                            </div>
                        </div>

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one five columns">
                                <label class="formal--label">Email</label>
                                @auth
                                <input disabled value="{{Auth::user()->email}}" class="formal--control form-control" name="email" value="" placeholder="Votre email" type="text">
                                @else
                                <input value="" class="formal--control form-control" name="email" value="" placeholder="Votre email" type="text">
                                @endauth
                            </div>

                            <div class="tablet-five five columns">
                                <label class="formal--label">Numéro de téléphone</label>
                                <br>
                                @auth
                                <input value="{{Auth::user()->tel}}" class="formal--control form-control" name="tel" placeholder="Numéro mobile" type="tel" id="phone">
                                @else
                                <input id="phone" class="formal--control form-control" name="tel" value="" placeholder="Numéro mobile" type="tel">
                                @endauth
                            </div>

                            <div class="tablet-five five columns">
                                @auth
                                <input style="display: none;" value="{{Auth::user()->id}}" class="formal--control form-control" name="user_id" placeholder="Numéro mobile" type="tel">
                                @endauth
                            </div>


                        </div>

                        <div class="row">
                            <div class="tablet-offset-by-one tablet-ten offset-by-one ten columns map-pin-input-container" style="position: relative;">

                                <label for="form-addressLine" class="formal--label">Choisissez une adresse</label>
                                <a data-toggle="modal" data-target="#myModalAdress" href="#">
                                    <strong>
                                        Ou créer une nouvelle adresse
                                    </strong>
                                </a>
                                <select class="formal--control form-control" id="adress_id" name="adress_id">
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
                                <input required value="" class="formal--control form-control" name="date_pickup" type="date">
                            </div>

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

                                      <option value="online">Paiement en ligne</option>

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
                            <li><svg class="iconContainer__2FZbaZzuIjiHUhntQin_Lk" width="32" height="32" fill="currentColor" version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Item Icon</title>
                                    <path
                                      d="M4 7.329C5.302 6.443 6.587 6 7.853 6c1.267 0 2.534.443 3.8 1.329V18c-1.249-.913-2.516-1.369-3.8-1.369-1.284 0-2.568.456-3.853 1.369V7.329zm16 0V18c-1.285-.913-2.57-1.369-3.853-1.369-1.284 0-2.551.456-3.8 1.369V7.329C13.613 6.443 14.88 6 16.147 6c1.266 0 2.551.443 3.853 1.329z">
                                    </path>
                                </svg>Total de la commande: {{$price}}&nbsp;FCFA
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
                                                        <div class="iconContainer__2NxgQpF3yVbdNRHxOZbW2r "><svg aria-label="false" width="20" height="20" fill="currentColor" version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <title>Item Icon</title>
                                                                <path d="M18 12L6 20V4z" fill="currentColor" fill-rule="evenodd"></path>
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
                  <form class="" action="{{route('adresses.store')}}" method="post">
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
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput.js"></script>

                  <script>
                      var input = document.querySelector("#phone");
                      window.intlTelInput(input, {
                      geoIpLookup: function(callback) {
                        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                          var countryCode = (resp && resp.country) ? resp.country : "";
                          callback(countryCode);
                        });
                      },
                      initialCountry: "auto",
                      preferredCountries: ["us","gb",],
                      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js",

                    });
                    </script>
                    <script class="iti-load-utils" async="" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js"></script>


</div>


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



@endsection
