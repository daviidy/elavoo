<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Order;
use App\Item;
use App\Category;
use App\User;
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
      foreach (Session::get('orders') as $order) {
          $montant = $montant + ($order[2] * $order[1]);
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
                        'cpm_site_id' => '423311',
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
            $adress = $coordonnate[0];
        }

        //on crée l'bill qui aura un statut en cours par défaut
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

        //on crée les différents ordres liés à la facture
        foreach (Session::get('orders') as $order) {
            Order::create([
               'unit_price' => $order[2],
               'name_item' => $order[0],
               'quantity' => $order[1],
               'bill_id' => $bill->id,
            ]);
        }

        $items = Item::orderby('id', 'asc')->paginate(500);



        //on retourne la vue récapitulative
        //de la commande
        if ($bill->payment_mode == 'cash') {
            $bill->state = 'Validé';
            $bill->save();

            //on supprime les données de sessions

            Session::forget('orders');
            Session::forget('montant');

            return view('thank-you',['signature' => str_replace('"',"",$resultat),
                                         'temps' => $temps,
                                         'time' => $time,
                                         'montant' => Session::get('montant'),
                                         'bill' => $bill,

                                       ]);
        }
        else {
            return view('bills.resume',['signature' => str_replace('"',"",$resultat),
                                         'temps' => $temps,
                                         'time' => $time,
                                         'montant' => Session::get('montant'),
                                         'bill' => $bill,
                                         'items' => $items,
                                       ]);
        }


    }






    public function notify(Request $request){

      //cinetpay envoie a l'app des données en post apres le premier api call
      //il faut decoder la reponse et en ressortir les parametres apikey, site i et trans id



    //on récupère la signature stockée dans la bdd et qui correspond au trans_id de l'bill
    //on obtient une collection
    //etant donné qu'on sait que c'est un seul élément qu'on aura dans la collection
    //on peut utiliser la methode first pour le transformer en objet
    $bill = Bill::where('trans_id', $request['cpm_trans_id'])->first();
    if ($bill->state == 'Validé') {
      return;
    }


      //on fait un api call a https://api.cinetpay.com/v1/?method=checkPayStatus avec
      //les donnees recueillies dans $request (trans_id et site_id)
      //et notre apikey etant deja connu

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
        $params = array(
                        'cpm_site_id' => $request['cpm_site_id'],
                        'cpm_trans_id' => $request['cpm_trans_id'],
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=checkPayStatus";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $json = json_decode($resultat, true);

        //apres avoir décodé la reponse de l'apî call on fait les tests

      if ($json['transaction']['cpm_result'] == '00' && $json['transaction']['cpm_amount'] == $bill->amount && $json['transaction']['signature'] == $bill->signature)
      {

                  //on récupère l'id Utilisateur
                  $user = User::find($bill->user_id);

                  //on met le statut de l'bill à jour
                    $bill->state = 'Validé';
                    $bill->save();

                    //on supprime les données de sessions

                    Session::forget('orders');
                    Session::forget('montant');

                  //on ajoute 30 jours à la date actuelle pour déterminer la
                  //date d'expiration de l'abonnement
                  //et on met a jour le statut de l'étudiant
                  $date_paiement = Carbon::now();



                    $items = Item::orderby('id','asc')->paginate(30);

                      //envoi mail utilisateur inscription
                       Mail::send('mailsAchat.mail', ['bill' => $bill, 'items' => $items], function($message) use($user){
                         $message->to($user->email, 'Cher(ère) Client(e) Elavoo')->subject('Votre commande a bien été reçue !');
                         $message->from('eventsoschool@gmail.com', 'Oschool');
                       });

                        $admins = User::where('type', 'admin')->orderby('id', 'asc')->paginate(1000);

                        foreach ($admins as $admin) {
                          //envoi mail admin inscription
                          Mail::send('mailsAchat.mail-admin', ['bill' => $bill], function($message) use($admin){
                            $message->to($admin->email, 'Aux Admins Oschool')->subject('Une commande a été traitée avec succès');
                            $message->from('eventsoschool@gmail.com', 'Oschool');
                          });
                        }



        }


      else {

        $admins = User::where('type', 'admin')->orderby('id', 'asc')->paginate(1000);

        foreach ($admins as $admin) {
        //envoi mail admin pour échec
        Mail::send('mailsAchat.echec', ['bill' => $bill], function($message){
          $message->to($admin->email, 'Aux Admins Oschool')->subject('Echec de paiement pour Elavoo');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });
      }


      }


    } //fin fonction notify





public function merci(){
    $items = Item::orderby('id', 'asc')->paginate(500);
    return view('thank-you', ['items' => $items]);
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
        $items = Item::orderby('id', 'asc')->paginate(500);
        return view('bills.show', ['bill' => $bill, 'items' => $items]);
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
        $bill->update($request->all());
        if ($bill->statut_livraison == 'Livré' || $bill->statut_livraison == 'Annulé') {
            $deliver = User::find($bill->delivery->id);
            $deliver->status = 'available';
            $deliver->save();
        }
        else {
            $deliver = User::find($bill->delivery->id);
            $deliver->status = 'busy';
            $deliver->save();
        }

        return redirect()->back()->with('status', 'La commande n°'.$bill->trans_id.'a bien été modifiée');
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
