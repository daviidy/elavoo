<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendForgotPasswordEmail;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

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
     * Validate the email for the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateEmail(Request $request)
    {
        $this->validate($request, [
            'email' => "required|email"
        ],[
            'email.required' => "L'adresse email est obligatoire",
            'email.email' => "L'adresse email saisie est bligatoire",
        ]);
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        // - Validation rules
        $this->validateEmail($request);

        $data['email'] = $request->email;
        $data['token'] = Str::random(50);

        // - Check for user exists
        $user = User::whereEmail($request->email)->exists();
        if (!$user) {
            $request->session()->flash('error', "Vous n'avez pas encore de compte, veuillez vous inscrire !");
            return redirect()->back();
        }
        // - Send email
        try {
            // - Sending email
            Mail::to($request->email)->send(new SendForgotPasswordEmail($data));
            DB::table('password_resets')->where('email', $request->email)->delete();
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $data['token'],
                'created_at' => Carbon::now()
            ]);
        } catch (\Exception $e) {
            // - Problem occurs
            $request->session()->flash('error', "Une erreur est survenue lors de l'envoi du mesage, veuillez réessayer");
            return redirect()->back()->withInput(['email' => $request->email]);
        }

        $request->session()->flash('success', "Un lien de réinitialisation vous a été envoyé!");
        return redirect()->back();

    }
}
