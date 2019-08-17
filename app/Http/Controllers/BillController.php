<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Category;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;
use Auth;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::orderby('id','asc')->paginate(30);
        return view('bills.create', ['categories' => $categories]);


    }


    //recuperation des infos utilisateur a envoyer
    //a la page de paiement

    public function envoi(Request $request)
    {
        //on récupère les infos utiles pour l'acht
      Session::put('nom', Auth::user()->last_name);
      Session::put('prenoms', Auth::user()->first_name);
      Session::put('email', Auth::user()->email);

      $montant = 0;
      foreach (Session::get('orders') as $orders) {
          $montant = $montant + ($orders[2] * $orders[1]);
      }

      Session::put('montant', $montant);


      function postData($params, $url)
          {
           try {
           $curl = curl_init();
           $postfield = '';
           foreach ($params as $index => $value) {
           $postfield .= $index . '=' . $value . "&";
           }
           $postfield = substr($postfield, 0, -1);
           curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 45,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => $postfield,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/x-www-form-urlencoded",
           ),
           ));
           $response = curl_exec($curl);
           $err = curl_error($curl);
           curl_close($curl);
           if ($err) {
           throw new Exception("cURL Error #:" . $err);
           return $err;
           } else {
           return $response;
           }
           } catch (Exception $e) {
           throw new Exception($e);
           }
          }
          $time = Carbon::now();
          $temps = date("YmdHis");
        $params = array('cpm_amount' => Session::get('montant'),
                        'cpm_currency' => 'CFA',
                        'cpm_site_id' => '113043',
                        'cpm_trans_id' => $temps,
                        'cpm_trans_date' => $time,
                        'cpm_payment_config' => 'SINGLE',
                        'cpm_page_action' => 'PAYMENT',
                        'cpm_version' => 'V1',
                        'cpm_language' => 'fr',
                        'cpm_designation' => 'Achat Elavoo',
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $signature = json_decode($resultat, true);


        /*
        Session::put('trans_id', $temps);

        */
        Session::put('signature', str_replace('"',"",$resultat));

        foreach (Session::get('coordonnates') as $coordonnate) {
            $adress = $coordonnate[1];
        }

        //on crée l'achat qui aura un statut en cours par défaut
        $bill=Bill::create([
                          'tel' => Auth::user()->tel,
                          'amount' => $montant,
                          'trans_id' => $temps,
                          'signature' => str_replace('"',"",$resultat),
                          'user_id' => Auth::user()->id,
                          'adress_id' => $adress,
                          'statut_livraison' => 'En cours',
                          'state' => 'En cours',
                          'date_pickup' => $request['date_pickup'],
                          'service' => $request['service'],
                          'payment_mode' => $request['payment_mode'],
                        ]);

        //on retourne la vue récapitulative
        //de la commande
        return view('bills.resume',['signature' => str_replace('"',"",$resultat),
                                     'temps' => $temps,
                                     'time' => $time,
                                     'montant' => Session::get('montant'),
                                     'bill' => $bill,
                                   ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        //
    }
}
