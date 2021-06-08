<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliverController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function deliver()
  {
    $notifications = auth()->user()->unreadNotifications()->limit(10)->get()->toArray();

      return view('delivers.dashboard', ['notifications' => $notifications]);
  }
}
