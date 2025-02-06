<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function signout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
