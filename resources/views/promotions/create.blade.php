@extends('layouts.menu-create')
@section('title', 'Ajouter une promo')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">

      <form method="post" enctype="multipart/form-data" action="{{route('promotions.store')}}" class="login100-form validate-form">
        <span class="login100-form-title">
          Créer une promo
        </span>
        {{ csrf_field() }}



        <label for=""> <strong>Valeur de la promo</strong> </label>
        <div class="wrap-input100 validate-input">
          <input class="input100" value="" type="number" name="value" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-money" aria-hidden="true"></i>
          </span>
        </div>

        <label for=""> <strong>Date d'expiration de la promo</strong> </label>
        <div class="wrap-input100">
          <input class="input100" value="" type="date" name="date_exp">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <label for=""> <strong>Catégories concernées</strong> </label>
        <div class="wrap-input100">
          <select id="my-select1" multiple class="" name="category_id[]">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>

        </div>



        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Créer la promo
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="{{url('home')}}">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
