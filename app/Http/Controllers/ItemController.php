<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;
use Image;
use Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::orderby('id','asc')->paginate(30);
      return view('items.index', ['categories' => $categories]);
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
        return view('items.create', ['categories' => $categories]);
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

      $item = Item::create($request->all());
      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/images/items/' . $filename));
        $item->image = $filename;
        $item->save();
      }
      return redirect()->back()->with('status', 'L\'article a bien été crée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $categories = Category::orderby('id','asc')->paginate(30);
        return view('items.edit', ['item' => $item, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->update($request->all());
        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/items/' . $filename));
          $item->image = $filename;
          $item->save();
        }
        return redirect('items')->with('status', 'L\'article a bien été crée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $formation->delete();
        return redirect('items')->with('status', 'Article supprimé de la base de données' );
    }
}
