<?php

namespace App\Http\Middleware;

use App\Models\MiddlewareKbumn;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use phpCAS;

class DMUser
{
    private $middlewareKbumn;

    public function __construct()
    {
        $this->middlewareKbumn = new MiddlewareKbumn();
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         // kalau sudah login, langsung next
        if(auth('web')->check()){
            return $next($request);
        }

        // klo di MW belum aktif, nggak boleh masuk!
        $mwUser = $this->middlewareKbumn->getMwUser(session('cas_user'));
        if($mwUser->data && !$mwUser->data->activated){
            $this->notAllowed($request);
        }

        // klo nggak punya akses portal, nggak boleh masuk!
        if(!$mwUser->access_portal){
            $this->notAllowed($request);
        }

        // klo di tabel usernya belum ada, nggak boleh masuk!
        $user = User::where('username', $mwUser->data->username)->first();
        if(!$user){
            $this->notAllowed($request);
        }

        //selain itu, lanjut
        auth('web')->login($user);
        return $next($request);
    }

    private function notAllowed($request)
    {
        $request->session()->forget(['cas_user']);
        $request->session()->save();
        phpCAS::handleLogoutRequests();
        phpCas::logoutWithRedirectService(url('forbidden'));
    }
}
