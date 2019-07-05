@extends('layouts.menu-dashboard')

@section('title', 'Accueil')
@section('content')

    <div id="wrapper" style="min-height: 717px;">
        <!-- this is the wrapper for the content -->





        <div id="yield" class="side-bar-change">

            <!-- START CONTACTS SECTION -->


            <div class="normalheader transition animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hpanel">
                            <div class="panel-body">
                                <h2 class="font-normal m-b-xs">
                                    Commander
                                </h2>
                                <p> Collecte, livraison, choisissez le créneau qui vous convient ! Si vous êtes novice, direction notre
                                    <a target="_blank" href="https://cleanio.zendesk.com/hc/fr" class="help font-bold">centre d’aide</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hpanel hnavyblue">
                            <div class="panel-body">
                                <div class="text-center m-b-lg">
                                    <img src="http://res.cloudinary.com/getcleanio/image/upload/v1466683059/statuts/confirmed.png" alt="" class="img-groom">
                                </div>
                                <form method="post" class="form-horizontal col-sm-8 col-sm-offset-2">
                                    <div class="form-group"><label class="col-sm-2 control-label">Adresse</label>
                                        <div class="col-sm-10 m-b-xs">
                                            <select name="choix" id="address" class="form-control">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Collecte</label>
                                        <div class="col-sm-5 m-b-xs">
                                            <select name="choix" id="pickUpDate" class="form-control">

                                                <option value="1562414400">samedi 6 juillet 2019</option>

                                                <option value="1562500800">dimanche 7 juillet 2019</option>

                                                <option value="1562587200">lundi 8 juillet 2019</option>

                                                <option value="1562673600">mardi 9 juillet 2019</option>

                                                <option value="1562760000">mercredi 10 juillet 2019</option>

                                                <option value="1562846400">jeudi 11 juillet 2019</option>

                                                <option value="1562932800">vendredi 12 juillet 2019</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-5 m-b-xs">
                                            <select name="choix" id="pickUpTime" class="form-control">

                                                <option value="1562389200">07:00 - 07:30</option>

                                                <option value="1562391000">07:30 - 08:00</option>

                                                <option value="1562392800">08:00 - 08:30</option>

                                                <option value="1562394600">08:30 - 09:00</option>

                                                <option value="1562432400">19:00 - 19:30</option>

                                                <option value="1562434200">19:30 - 20:00</option>

                                                <option value="1562436000">20:00 - 20:30</option>

                                                <option value="1562437800">20:30 - 21:00</option>

                                                <option value="1562439600">21:00 - 21:30</option>

                                                <option value="1562441400">21:30 - 22:00</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Livraison</label>
                                        <div class="col-sm-5 m-b-xs">
                                            <select name="choix" id="deliveryDate" class="form-control">

                                                <option value="1562673600">mardi 9 juillet 2019</option>

                                                <option value="1562760000">mercredi 10 juillet 2019</option>

                                                <option value="1562846400">jeudi 11 juillet 2019</option>

                                                <option value="1562932800">vendredi 12 juillet 2019</option>

                                                <option value="1563019200">samedi 13 juillet 2019</option>

                                                <option value="1563105600">dimanche 14 juillet 2019</option>

                                                <option value="1563192000">lundi 15 juillet 2019</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-5 m-b-xs">
                                            <select name="choix" id="deliveryTime" class="form-control">

                                                <option value="1562648400">07:00 - 07:30</option>

                                                <option value="1562650200">07:30 - 08:00</option>

                                                <option value="1562652000">08:00 - 08:30</option>

                                                <option value="1562653800">08:30 - 09:00</option>

                                                <option value="1562691600">19:00 - 19:30</option>

                                                <option value="1562693400">19:30 - 20:00</option>

                                                <option value="1562695200">20:00 - 20:30</option>

                                                <option value="1562697000">20:30 - 21:00</option>

                                                <option value="1562698800">21:00 - 21:30</option>

                                                <option value="1562700600">21:30 - 22:00</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group text-center">
                                        <button id="submitOrder" class="btn btn-primary">Commander</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- END BOTTOM BAR SECTION -->

        </div>
    </div>
@endsection
