<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Bill;
use App\Models\User;
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
        $notifications = auth()->user()->unreadNotifications()->limit(10)->get()->toArray();

        // foreach($notifications as $notif) {
        //     dd($notif['data']);
        // }
        if (Auth::user()->isAdmin()) {
            $delivers = User::where('type', 'deliver')->where('status', 'available')->orderby('id', 'asc')->paginate(1000);
            $pressings = User::where('type', 'pressing')->orderby('id', 'asc')->paginate(1000);
            $bills = Bill::where('state', 'Validé')->orderby('created_at','desc')->paginate(1000);
            return view('default.dashboard', ['bills' => $bills, 'delivers' => $delivers, 'pressings' => $pressings, 'notifications' => $notifications]);
        }
        elseif (Auth::user()->isDeliver()) {
            $bills = Bill::where('delivery_id', Auth::user()->id)->orderby('created_at','desc')->paginate(1000);
            return view('delivers.dashboard', ['bills' => $bills, 'notifications' => $notifications]);
        }
        elseif (Auth::user()->isPressing()) {
            $bills = Bill::where('pressing_id', Auth::user()->id)->orderby('created_at','desc')->paginate(1000);
            return view('pressings.dashboard', ['bills' => $bills, 'notifications' => $notifications]);
        }
        else {
            return view('default.dashboard', ['notifications' => $notifications]);
        }


        /*
        $items = Item::orderby('id','asc')->paginate(30);
        return view('items.index', ['items' => $items]);
        */
    }
}
