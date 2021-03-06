@extends('layouts.menu-create')
@section('title', 'Ajouter un article')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img style="display: block;margin-left: auto;margin-right: auto;width: 25%;" src="http://res.freestockphotos.biz/pictures/14/14944-illustration-of-a-blank-blue-t-shirt-pv.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="{{url('items', $item)}}" class="login100-form validate-form">
        <span class="login100-form-title">
          Modifier un article
        </span>
        {{ csrf_field() }}
        {{ method_field('patch') }}



        <div class="wrap-input100 validate-input">
          <input class="input100" value="{{$item->name}}" type="text" name="name" placeholder="Titre de l'article" required>
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100">
          <input class="input100" value="{{$item->price}}" type="number" name="price" placeholder="Prix de l'article (sans espace)">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>

        <label for=""> <strong>Catégorie de l'article</strong> </label>
        <div class="wrap-input100">
          <select class="" name="category_id">
            @foreach($categories as $category)
            @if($category->id == $item->category_id)
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
            @endforeach
          </select>

        </div>


				<label for=""> <strong>Image de l'article</strong> </label>
				<div class="wrap-input100">
          <input class="input100" type="file" name="image">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-laptop" aria-hidden="true"></i>
          </span>
        </div>


        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Modifier l'article
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
