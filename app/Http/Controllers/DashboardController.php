<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ktp;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
   
   public function index()
   {

         $totalKtp = Ktp::count();
         return view('admin.dashboard', compact('totalKtp'));
   }
}
