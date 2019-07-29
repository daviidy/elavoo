<?php

namespace App\Http\Controllers;

use App\Adress;
use Auth;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $adresses = Adress::orderby('id','asc')->paginate(30);
            return view('adresses.index', ['adresses' => $adresses]);
        }
        else {
          return redirect('home');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adress = Adress::create($request->all());

        return redirect()->back()->with('status', 'L\'adresse a bien été créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function show(Adress $adress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function edit(Adress $adress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adress $adress)
    {
        $adress->update($request->all());

        return redirect()->back()->with('status', 'L\'adresse a bien été modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adress  $adress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adress $adress)
    {
        //
    }
}
