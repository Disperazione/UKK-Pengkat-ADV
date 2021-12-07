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
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {

            if (Auth::guard('petugas')->check()) {
                   return redirect()->route('petugas.dashboard');
            } else if (Auth::guard('masyarakat')->check()) {
               return redirect()->route('proses.pengaduan');
            }else{
                return redirect()->route('login');


            }
        

        return $next($request);
    }
}
