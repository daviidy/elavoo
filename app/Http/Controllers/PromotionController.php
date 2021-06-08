<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Category;
use Auth;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $promotions = Promotion::orderby('id','asc')->paginate(30);
            return view('promotions.index', ['promotions' => $promotions]);
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
        if (Auth::check() && Auth::user()->isAdmin()) {
            $categories = Category::orderby('id','asc')->paginate(30);
            return view('promotions.create', ['categories' => $categories]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion = Promotion::create($request->all());
        if(is_array($request->category_id))
        {
            foreach($request->category_id as $category_id)
            {
                $category_found = Category::find($category_id);
                $promotion->categories()->attach($category_found);
            }
        }

        return back()->with('status', 'Nouvelle promotion ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $categories = Category::orderby('id','asc')->paginate(30);
            return view('promotions.edit', ['categories' => $categories, 'promotion' => $promotion]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        $promotion->update($request->all());
        if(is_array($request->category_id))
        {
            foreach($request->category_id as $category_id)
            {
                $category_found = Category::find($category_id);
                $promotion->categories()->sync($category_found);
            }
        }

        return redirect('promotions')->with('status', 'Promotion modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect('promotions')->with('status', 'Promotion supprimée de la base de données');
    }
}
