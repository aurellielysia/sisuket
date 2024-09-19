<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }
    
    public function register(): View
    {
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => false, // Menetapkan is_admin sebagai false untuk pengguna biasa
        ]);

        Auth::login($user);

        return redirect()->route('user.dashboard');
    }

    public function forgotPassword(): View
    {
        return view('auth.forgot-password');
    }
    public function destroy(Request $request)
{
    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login');
}
}
