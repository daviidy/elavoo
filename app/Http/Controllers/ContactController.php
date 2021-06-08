<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function contactUs (Request $request) {
        $this->validate($request, [
            'nom_complet' => 'required',
            'email' => 'required|email',
            // 'contact' => 'required',
            'message' => 'required',
        ],[
            'nom_complet.*' => "Le nom est obligatoire",
            'email.*' => "L'email est obligatoire",
            // 'contact.*' => "Le contact est obligatoire",
            'message.*' => "Le message est obligatoire",
        ]);
        // - On enrégistre les infos du contact
        $contact = [
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'contact' => $request->email,
            'message' => $request->message,
        ];

        // - Save contact info
        $contact = Contact::create($request->all());

        try {
            // - Envoi du mail
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUs($contact));
            // - Si le mail a été envoyé
            $contact->update(['status' => 'envoyé']);
        } catch (\Exception $e) {
            // - Si le mail n'a pas été envoyé
            // return response()->json([
            //     'error' => true,
            //     'message' => "Erreur lors de l'envoi du message",
            // ]);
        }

        return response()->json([
            'error' => false,
            'message' => 'Merci ! Votre message a été envoyé avec succès',
        ]);
    }
}
