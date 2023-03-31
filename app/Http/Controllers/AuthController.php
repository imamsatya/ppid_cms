<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpCAS;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        auth('web')->logout();
        $request->session()->forget(['simanis_user', 'cas_user']);
        $request->session()->save();
        phpCAS::handleLogoutRequests();
        phpCas::logoutWithRedirectService(config('cas.logout_redirect_url'));
    }
}
