<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;
use Illuminate\Support\Str;
use App\Mail\SendEmailVerification;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('id', 'asc')->paginate(100);
        return view('users.index', ['users' => $users]);
    }

    public function getNotificationView()
    {
        $notifications = auth()->user()->unreadNotifications()->limit(10)->get()->toArray();
        return view('includes.notifications', compact('notifications'))->render();
    }


    public function account_activation()
    {
        return view('auth.activate-account');
    }

    public function send_account_activation()
    {
        return view('auth.send-activation-code');
    }

    public function send_account_activation_mail(Request $request)
    {
        // - Validation de mail
        $this->validate($request, [
            'email' => ['required', 'string', 'email'],
        ],[
            'email.required' => "L'adresse email est obligatoire",
            'email.string' => "L'adresse email est obligatoire",
            'email.email' => "L'adresse email saisie est invalide",
        ]);
        // - Vérifier l'existence du compte
        $user = User::where(['email' => $request->email])->exists();
        if (!$user) {
            $request->session()->flash('error', "Ce compte est introuvable, veuillez vous réinscrire.");
            return view('auth.send-activation-code');
        }
        // - Create email verification
        $token = $this->getGeneratedUniqueToken();
        // - Send email
        try {
            // - Sending email
            Mail::to( $request->email)->send(new SendEmailVerification(['token' => $token]));
            DB::table('emails_verifications')->where('email', $request->email)->delete();
            DB::table('emails_verifications')->insert([
                'email' =>  $request->email,
                'token' => $token,
            ]);
        } catch (\Exception $e) {
            // - Problem occurs
            $request->session()->flash('error', "Une erreur est survenue lors de l'envoi du mail, veuillez réessayer");
            return redirect()->back()->withInput(['email' => $request->email]);
        }

        $request->session()->flash('success', "Nous avons envoyé un mail d'activation de compte dans votre boîte mail.");

        return view('auth.send-activation-code');
    }

    public function getGeneratedUniqueToken() {
        do {
            $token = Str::random(60);
        } while(
            DB::table('emails_verifications')->where('token',  $token)->exists()
        );
        return $token;
    }

    public function account_activate(Request $request, $token)
    {
        // - Activate account
        $email_verification = DB::table('emails_verifications')->where(['token' => $token])->first();
        $user = User::where('email', $email_verification->email)->first();
        if (!$user) {
            $request->session()->flash('error', "Votre inscription a échoué, veuillez vous recommencer");
        }
        $user->update([
            'email_verified_at' => Carbon::now()
        ]);

        $request->session()->flash('success', "Votre compte a été activé avec succès");
        return redirect()->route('account.activation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Auth::check()) {
            return view('users.show', ['user' => $user]);
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::check()) {
          return view('users.edit', ['user' => $user]);
        }
        else {
          return redirect('home');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'tel' => 'required|numeric',
        ],[
            'first_name.*' => "Le nom est obligatoire",
            'last_name.*' => "Le prénom est obligatoire",
            'tel.*' => "Le téléphone est obligatoire",
        ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->tel = $request->tel;

        if ($request->full) {
            $user->tel = $request->full;
        }

        if($request->hasFile('image')) {
            // - Enregistrer la photo
            $user->image = $this->savePhoto($request, $user);
        }

        $user->save();

        return redirect()->back()->with('status', 'Modifications effectuées');
    }

    public function savePhoto($request, $user) {
        $image = $request->file('image');
        $filename = Str::slug($user->first_name.'_'.$user->last_name).'-'.$user->id.'.'. $image->getClientOriginalExtension();
        $path=$image->move(storage_path("app/public/uploads/users/pictures"),$filename);

        return 'storage/uploads/users/pictures/'.$filename;
    }
}
