@extends('layouts.menu-dashboard')

@section('title', 'Mes commandes')

@section('description', 'Regardez en toute sérénité l\'état de vos commandes')
@section('content')

<div class="content">
    <div class="row">

      <div class="col-md-12">
        <div class="hpanel hnavyblue">
          <div class="panel-body">
            <div class="stats-title">
              <h4>Historique</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>
                      Numéro commande
                    </th>
                    <th>
                      Article(s)
                    </th>
                    <th>
                      Date
                    </th>
                    <th>
                      Type
                    </th>
                    <th>
                      Statut
                    </th>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


            <!-- END BOTTOM BAR SECTION -->

        </div>
    </div>
@endsection
