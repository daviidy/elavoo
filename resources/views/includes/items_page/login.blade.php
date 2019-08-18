<div id="connexion" class="modal full-page-modal" tabindex="-1" role="dialog" aria-hidden="false">
  <!-- <button type="button" class="modal-action-btn action-left back-to-signin" style="opacity: 0;"><i class="ion-ios-arrow-back"></i></button> -->
  <button type="button" class="modal-action-btn action-right close-modal" data-dismiss="modal"><i class="ion-android-close"></i></button>
  <div class="modal-container">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-center">

        <div class="modal-body signup-modal-body">
          <div style="background: #fff;" class="modal-header">
            <div style="color: black;" class="modal-title">Conntent de vous revoir ! Connectez-vous</div>
            <div class="login-needed-alert"></div>
          <form name="userSignUpForm" method="POST" action="{{ route('login') }}" id="signup-modal-form" class="margintop-lg">
            {{ csrf_field() }}

            <div class="form-group">
                @if (Request::has('previous'))
                    <input type="hidden" name="previous" value="{{ Request::get('previous') }}">
                @else
                    <input type="hidden" name="previous" value="{{ URL::current() }}">
                @endif
            </div>

            <div class="form-group full_name-form-group">
              <div class="input-with-icon">
                <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                <span class="focus-input100"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <i class="input-icon ion-android-mail"></i>
              </div>
            </div>

            <div class="form-group email-form-group">
              <div class="input-with-icon">
                <input id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <span class="focus-input100"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <i class="input-icon ion-person-stalker"></i>
              </div>
              <a class="txt2 bo1 m-l-5" href="{{ route('password.request') }}">
                {{ __('Mot de passe oublié ?') }}
            </a>
            </div>
            <div class="form-group password-form-group">
              <div class="input-with-icon">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Se souvenir de moi') }}
                </label>
              </div>
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-success full_width spinning-loader"><span class="txt">Envoyer</span><i class="fa fa-circle-o-notch fa-spin"></i></button>
            </div>
          </form>

          <a data-toggle="modal" data-target="#connexion">Pas de compte ? Inscrivez-vous</a>

        </div><!-- /.signup-modal-body -->


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal-container -->
</div><!-- /.modal -->

</div>
