<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm($token)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token]
        );
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function reset(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ],[
            'email.required' => "L'adresse email est obligatoire",
            'email.string' => "L'adresse email est obligatoire",
            'email.email' => "L'adresse email saisie est invalide",

            'password.required' => "Le mot de passe est obligatoire",
            'password.min' => "Le mot de passe doit contenir au moins 8 caractères",
            'password.confirmed' => "Les mots de passes ne correspondent pas",
        ]);
        // -Check user
        $validToken = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();
        if (
            !$validToken || Carbon::parse($validToken->created_at)->diffInMinutes(Carbon::now()) > 60
        ) {
            $request->session()->flash('error', "Ce lien de réinitialisation a expiré. Veuillez recommencer l'opération");
            return redirect()->back()->withInput(['email' => $request->email, 'token' => $request->token]);
        }

        $user = User::where('email', $request->email)->first();

        // - Reset password
        $this->resetPassword($user, $request->password);
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('home');
    }
}
