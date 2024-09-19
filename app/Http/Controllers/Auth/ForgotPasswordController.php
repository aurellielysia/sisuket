<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    // app/Http/Controllers/Auth/ForgotPasswordController.php
public function showLinkRequestForm()
{
    return view('auth.forgot-password');
}

public function sendResetLinkEmail(Request $request)
{
    // Implementasi pengiriman link reset password
}

}
