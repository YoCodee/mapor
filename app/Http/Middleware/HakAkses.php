<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = session('role');
        $currentRoute = $request->route()->getName();

        if (!$role) {
            if ($currentRoute == 'add' || $currentRoute == 'dataNews' || $currentRoute == 'editNews' || $currentRoute == 'editFileNews' || $currentRoute == 'deleteNews') {
                return redirect('/');
            }
        } else {
            return $next($request);
        }
    }
}
