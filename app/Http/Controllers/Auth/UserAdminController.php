<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAdminController extends Controller
{
    //
    public function index()
    {
        return view('user.home');
    }

    public function login()
    {
        return view('user.login');
    }

    public function handleLogin(Request $req)
    {
        $credentials = request(['email', 'password']);
        if (Auth::guard('web')->attempt(
            $req->only(['email', 'password'])
        )) {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()
            ->route('index');
    }
}
