<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;

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


    public function account_activation()
    {
        return view('auth.activate-account');
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

      $user->update($request->all());

      if ($request->full) {
          $user->tel = $request->full;
          $user->save();
      }

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/images/users/' . $filename));
        $user->image = $filename;
        $user->save();
      }

      return redirect()->back()->with('status', 'Modifications effectuées');
    }

}
