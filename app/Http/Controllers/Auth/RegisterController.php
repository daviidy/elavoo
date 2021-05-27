<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct(Request $request)
     {
         $this->middleware('guest')->except('logout');
         $this->request = $request;
     }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     public function redirectTo()
     {
         if ($this->request->has('previous')) {
             $this->redirectTo = $this->request->get('previous');
             return $this->redirectTo. '?msg=success';
         }

         return '/home';
     }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'name.required' => "Le nom d'utilisateur est obligatoire",
            'name.string' => "Le nom d'utilisateur est obligatoire",
            'name.max' => "Le nom d'utilisateur doit contenir au maximum 255 caractères",

            'email.required' => "L'adresse email est obligatoire",
            'email.string' => "L'adresse email est obligatoire",
            'email.email' => "L'adresse email saisie est invalide",
            'email.max' => "L'adresse email doit contenir au maximum 255 caractères",
            'email.unique' => "Cette adresse email existe déjà",

            'password.required' => "Le mot de passe est obligatoire",
            'password.string' => "Le mot de passe est obligatoire",
            'password.min' => "Le mot de passe doit contenir au moins 8 caractères",
            'password.confirmed' => "Les mots de passes ne correspondent pas",
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => User::DEFAULT_TYPE,
        ]);
    }
}
