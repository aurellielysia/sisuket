<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }

        return view('dashboard.user');
    }
    public function index()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }
}
