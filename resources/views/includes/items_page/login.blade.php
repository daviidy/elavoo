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
          <form name="userSignUpForm" method="POST" id="signin-modal-form" class="margintop-lg">
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
                <input placeholder="Adresse email" id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
                <input placeholder="Mot de passe" id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
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
              <button id="confirm-login" type="submit" class="btn btn-success full_width spinning-loader"><span class="txt">Envoyer</span><i class="fa fa-circle-o-notch fa-spin"></i></button>
            </div>
          </form>

          <a data-toggle="modal" data-target="#connexion">Pas de compte ? Inscrivez-vous</a>

        </div><!-- /.signup-modal-body -->


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal-container -->
</div><!-- /.modal -->

</div>

<script type="text/javascript">
$("#confirm-login").on('click', function(event) {
    event.preventDefault();
    console.log('login button clicked');
    var token    = $("#signin-modal-form input[name=_token]").val();
    var email    = $("#signin-modal-form input[name=email]").val();
    var password = $("#signin-modal-form input[name=password]").val();
    var remember = $("#signin-modal-form input[name=remember]").val();
    var data = {
        _token:token,
        email:email,
        password:password,
        remember:remember
    };
    // Ajax Post
    $.ajax({
        type: "post",
        url: "/login/user",
        data: data,
        cache: false,
        success: function (data)
        {
            $.amaran({'message':'Connexion réussie !'});
            $('#connexion').remove();
            $('#inscription').remove();
            //on change les attributs de #command
            $("#command").removeAttr("data-target");
            $("#command").removeAttr("data-toggle");
            $("#command").attr("id", "orderNowLink");
            $("#command").removeClass("btn-disable");

            //l'utilisateur est maintenant connecté
            //on peut aller à la page de confirmation
            //de la commande
            var items = $('tbody').find('.summary-item');
            var name = $('tbody').find('.name');
            var quantity = $('tbody').find('.item-amount');
            var unitPrice = $('tbody').find('.price');
            var tab = [];

            for (i = 0; i < items.length; i++) {
                tab[i] = [];
                tab[i].push(name[i].textContent);
                tab[i].push(quantity[i].textContent);
                tab[i].push(unitPrice[i].firstElementChild.textContent);

            }
            $.ajax({
                url:'/command',
                type: 'POST',
                contentType: 'json',
                data: JSON.stringify(tab),
                contentType: 'application/json; charset=utf-8',
                beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));},
                success: function() {
                    window.location = '/bills/create';
                },
                error: function(){
                    alert('erreur');
                }
            });
        },
        error: function (xhr, msg) {
          console.log(msg + '\n' + xhr.responseText);
      }
    });
    return false;
});
</script>
