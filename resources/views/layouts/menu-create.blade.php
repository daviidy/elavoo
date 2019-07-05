<!DOCTYPE html>
<html lang="fr">
<head>
	<title>@yield('title') | Elavoo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/avilon/img/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates/create-template/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates/create-template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates/create-template/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates/create-template/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates/create-template/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/templates/create-template/css/util.css">
	<link rel="stylesheet" type="text/css" href="/templates/create-template/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">









	@if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  @yield('content')

  <!--===============================================================================================-->
  	<script src="/templates/create-template/vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

		<link rel="stylesheet" href="/js/sol/sol.css">
	    <script type="text/javascript" src="/js/sol/sol.js"></script>

  <!--===============================================================================================-->
  	<script src="/templates/create-template/vendor/bootstrap/js/popper.js"></script>
  	<script src="/templates/create-template/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/templates/create-template/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script src="/templates/create-template/vendor/tilt/tilt.jquery.min.js"></script>
  	<script >
  		$('.js-tilt').tilt({
  			scale: 1.1
  		})
  	</script>
		<script type="text/javascript">

		$('#my-select1').searchableOptionList();
		$('#my-select2').searchableOptionList();
		$('#my-select3').searchableOptionList();
		$('#my-select4').searchableOptionList();
		$('#my-select5').searchableOptionList();
		$('#my-select6').searchableOptionList();


		</script>

		<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

  <!--===============================================================================================-->
  	<script src="/templates/create-template/js/main.js"></script>

  </body>
  </html>
