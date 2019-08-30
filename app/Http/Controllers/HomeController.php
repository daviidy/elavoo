<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Bill;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            $delivers = User::where('type', 'deliver')->where('status', 'available')->orderby('id', 'asc')->paginate(1000);
            $bills = Bill::where('state', 'Validé')->orderby('id','desc')->paginate(30);
            return view('default.dashboard', ['bills' => $bills, 'delivers' => $delivers]);
        }
        elseif (Auth::user()->isDeliver()) {
            $bills = Bill::where('delivery_id', Auth::user()->id)->orderby('id','desc')->paginate(30);
            return view('delivers.dashboard', ['bills' => $bills]);
        }
        return view('default.dashboard');

        /*
        $items = Item::orderby('id','asc')->paginate(30);
        return view('items.index', ['items' => $items]);
        */
    }
}
