<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<style media="screen">
  /*! CSS Used from: https://auth.udacity.com/css/bundle.484af.css */
div,span,a,i{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
a{color:#02b3e4;text-decoration:none;font-weight:600;}
a:hover{color:#2e3d49;}
body *{box-sizing:border-box;}
.index--text-input--ee5HP{height:44px;box-sizing:border-box;padding-left:15px;padding-right:15px;border:1px solid #dbe2e8;font-size:14px;box-shadow:0 2px 2px 0 rgba(46, 60, 73, 0.05);border-radius:2px;color:#2e3d49;}
.index--text-input--ee5HP:active,.index--text-input--ee5HP:focus{outline:none;border-color:#02b3e4;}
.index--text-input--ee5HP::placeholder{color:#7d97ad;}
.alert--_alert--1gt-I{padding:20px 25px;border-radius:2px;color:#fff;text-align:left;}
.alert--error--3iAkS{background-color:#f04546;}
.alert--hidden--2Mlfp{display:none;}
.index--_btn--9nYKH{border:none;border-radius:4px;box-shadow:12px 15px 20px rgba(0, 0, 0, 0.1);color:#fff;cursor:pointer;display:inline-block;font-family:'Open Sans', sans-serif;font-size:12px;font-weight:600;-webkit-font-smoothing:antialiased;letter-spacing:0.165em;max-width:100%;overflow:hidden;text-align:center;text-overflow:ellipsis;text-transform:uppercase;transition:0.2s box-shadow ease-in-out, 0.2s background-color ease-in-out, 0.2s border-color ease-in-out;white-space:nowrap;}
.index--_btn--9nYKH:focus,.index--_btn--9nYKH:hover{box-shadow:2px 4px 8px 0 rgba(0, 0, 0, 0.1);}
.index--_btn--9nYKH:disabled{background-color:#7d97ad;box-shadow:none;cursor:default;opacity:0.7;}
.index--primary--P14pO{background:#02b3e4;}
.index--standard--3U4zZ{padding:1.2em 4em;}
.ureact-glyph--icon--3AXgN i{display:inline-block;height:0;left:-999em;overflow:hidden;position:absolute;text-indent:-999em;width:0;}
.ureact-glyph--icon--3AXgN:before{display:inline-block;font-family:"glyph-1512510046111";font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;vertical-align:middle;}
.ureact-glyph--icon-close-md--3kh4V:before{content:"\EA26";}
.ReactModal__Overlay{z-index:100;}
.index--close--126Qg{color:#fff;font-size:1.5rem;position:absolute;top:-35px;right:-35px;width:30px;height:30px;}
.index--close--126Qg:focus{outline:none;}
.index--close-bottom--2jiB9{display:block;height:0;overflow:hidden;text-indent:-999em;width:0;}
.index--content--2bKla{-webkit-overflow-scrolling:touch;position:absolute;background:#fff;outline:none;max-width:650px;height:auto;top:10%;bottom:auto;left:40px;right:40px;padding:0;box-shadow:0 0 15px 0 rgba(46, 60, 73, 0.2);border:0;border-radius:6px;margin:0 auto 40px;overflow:visible;}
.index--overlay--1MG2U{position:fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(46, 60, 73, 0.7);overflow-y:auto;}
.reset-password-modal--info--2jvvh{background:#fff;padding:50px;}
.reset-password-modal--header--2i8sd{font-size:34px;font-weight:300;line-height:1.3;color:#2e3d49;text-align:center;}
.reset-password-modal--description--1y9D1{font-size:18px;line-height:1.6;color:#525c65;max-width:460px;margin:20px auto 0;text-align:center;max-width:390px;}
.reset-password-modal--footer--3eC3n{background:#f4f4ef;padding:50px 80px;}
.reset-password-modal--form--3tY3s{display:flex;}
.reset-password-modal--form--3tY3s button{padding:1.2em 0;width:100%;margin-left:20px;min-width:150px;}
.reset-password-modal--input--u1tDr{width:100%;}
.reset-password-modal--alert--3QlYn{margin-bottom:30px;}
@media (max-width: 46.24em){
.reset-password-modal--footer--3eC3n{padding:30px;}
.reset-password-modal--form--3tY3s{flex-direction:column;}
.reset-password-modal--form--3tY3s button{margin-left:0!important;margin-right:0!important;margin-top:20px;}
}
/*! CSS Used fontfaces */
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Udc1UAw.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0ddc1UAw.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Vdc1UAw.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0adc1UAw.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Wdc1UAw.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Xdc1UAw.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v15/mem6YaGs126MiZpBA-UFUK0Zdc0.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOX-hpOqc.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOVuhpOqc.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXuhpOqc.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUehpOqc.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXehpOqc.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOXOhpOqc.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN7rgOUuhp.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:"glyph-1512510046111";src:url(https://auth.udacity.com/images/glyph-1512510046111-04a07.woff2) format("woff2"), url(https://auth.udacity.com/images/glyph-1512510046111-a9a6e.woff) format("woff"), url(https://auth.udacity.com/images/glyph-1512510046111-31be6.ttf) format("truetype"), url(https://auth.udacity.com/images/glyph-1512510046111-fb553.svg#glyph-1512510046111) format("svg");font-weight:normal;font-style:normal;}
</style>



<div id="popupOrange" style="display:none;" data-reactroot="" class="modal ReactModal__Overlay ReactModal__Overlay--after-open index--overlay--1MG2U undefined">
  <div class="ReactModal__Content ReactModal__Content--after-open index--content--2bKla undefined" tabindex="-1" aria-label="Modal">
    <a href="#" class="index--close--126Qg" title="Close Modal">
      <i class="material-icons" style="font-size:36px">close</i>
    </a>
    <div>
      <div>
        <div class="reset-password-modal--info--2jvvh">
          <div class="reset-password-modal--header--2i8sd">Content de te revoir
            @auth
            {{Auth::user()->name}}
            @endauth
            !
          </div>
          <div class="reset-password-modal--description--1y9D1">
            <!-- react-text: 11 -->Choisis maintenant les vêtements que tu veux laver !<br>
            <img width="40%" src="http://code.oschool.ci/img/page-parcours/card.png" alt="">
            <!-- /react-text --><br><br>
            <p>Cliques sur le bouton ci-dessous pour commander.</p>
            <!-- /react-text -->
          </div>

        </div>
        <div class="reset-password-modal--footer--3eC3n">
          <div class="reset-password-modal--alert--3QlYn">
            <div class="alert--error--3iAkS alert--_alert--1gt-I alert--hidden--2Mlfp"></div>
          </div>
          <div class="reset-password-modal--form--3tY3s">
            <a style="color:white; width: 100%;" href="#">
            <button id="achat2" type="button" class="index--primary--P14pO index--_btn--9nYKH  index--standard--3U4zZ" style="cursor: pointer; margin-left: 0;">

                Commander

            </button>
            </a>
          </div>
        </div>
      </div>
    </div><a href="#" class="index--close-bottom--2jiB9">Close Modal</a>
  </div>
</div>
