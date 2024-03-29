<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // dd('halo redirectIf');
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

            // if (Auth::guard($guard)->check()) {
            //     $user = Auth::user();
            //     // if ($user->hasRole('admin')) {
            //     //     return redirect()->route('admin.dashboard.index');
            //     // }
            //     return redirect()->route('dashboard.index');
            //     if ($user->hasRole('user')) {
            //         return redirect()->route('dashboard.index');
            //     } else {
            //         return redirect()->route('admin.dashboard.index');
            //     }
            //     // return redirect(RouteServiceProvider::HOME);
            // }
            if (Auth::guard($guard)->check()) {

                if ($guard === 'web') {
                    return redirect()->route('admin.dashboard.index');
                }

                if ($guard === 'usersppid') {
<<<<<<< HEAD
                    // dd('halo');
                    // $user = Auth::user();
                    // dd($user);
=======
>>>>>>> origin/main
                    return redirect()->route('dashboard.index');
                }

                return redirect()->route('index');;
            }
        }

        return $next($request);
    }
}
