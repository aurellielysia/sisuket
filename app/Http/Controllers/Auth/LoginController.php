<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    protected function authenticated(Request $request, $user)
{
    if ($user->is_admin) {
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('user.dashboard');
}
public function login(Request $request)
{
    // Ambil data login
    $credentials = $request->only('email', 'password');

    // Jika autentikasi berhasil
    if (Auth::attempt($credentials)) {
        // Regenerasi session
        $request->session()->regenerate();

        // Panggil fungsi authenticated untuk redirect
        return $this->authenticated($request, Auth::user());
    }

    // Jika gagal login, kembalikan dengan error
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}
public function logout(Request $request)
{
    // Proses logout
    Auth::logout();

    // Invalidasi session
    $request->session()->invalidate();

    // Regenerasi token
    $request->session()->regenerateToken();

    // Redirect ke halaman login
    return redirect()->route('login');
}

}
