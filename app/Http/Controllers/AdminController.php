<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin()
  {
    $notifications = auth()->user()->unreadNotifications()->limit(10)->get()->toArray();
      return view('admins.dashboard', ['notifications' => $notifications]);
  }
}
