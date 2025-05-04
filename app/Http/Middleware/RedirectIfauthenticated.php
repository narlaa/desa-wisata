<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ?string ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();
                
                // Redirect khusus untuk karyawan
                if ($guard === 'karyawan') {
                    switch ($user->jabatan) {
                        case 'admin': return redirect()->route('admin.dashboard');
                        case 'bendahara': return redirect()->route('bendahara.dashboard');
                        case 'pemilik': return redirect()->route('pemilik.dashboard');
                    }
                }
                
                // Default untuk pelanggan
                return redirect('/');
            }
        }

        return $next($request);
    }
}