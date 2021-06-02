@extends('layouts.menu-dashboard')

@section('title', 'Liste des promotions')


@section('description', 'Liste des promotions')


@section('content')


<div class="content">
    <div class="row">

      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body">
            <div class="stats-title">
              <h4>Liste des promos</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped" id="myDataTable">
                <thead>
                  <tr>
                    <th>
                      Valeur
                    </th>
                    <th>
                      Date d'expiration
                    </th>
                    <th>
                      Catégories concernées
                    </th>
                    <th>
                        Action
                    </th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($promotions as $promotion)
                  <tr>

                      <td>{{$promotion->value}}%</td>
                      <td>{{Carbon\Carbon::parse($promotion->date_exp)->format('d-m-Y')}}</td>
                      <td>
                          @foreach($promotion->categories as $category)
                          @if(!$loop->last)
                          {{$category->name}},
                          @else
                          {{$category->name}}.
                          @endif
                          @endforeach
                      </td>
                      <td style="display: flex; justify-content: space-between;">
                          <a href="{{route('promotions.edit', $promotion)}}">
                              <i class="fa fa-box-open"></i>
                          </a>
                          <form action="{{ route('promotions.destroy', $promotion) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}
                              <button class="fa fa-trash btn btn-danger" type="submit"></button>
                          </form>
                      </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
