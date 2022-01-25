<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
  public function index() {
      if (Auth::user()->hasRole('customer')) {
          return view('customerdashboard');
      }
      else if (Auth::user()->hasRole('supplier')) {
          return view('supplierdashboard');
      }
      else if (Auth::user()->hasRole('admin')) {
          return view('admindashboard');
      }
  }

  public function orders(){
    return view('customer.orders');
  }
}
