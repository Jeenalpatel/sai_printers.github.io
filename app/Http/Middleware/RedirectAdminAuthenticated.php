<?php

namespace App\Http\Middleware;
use Closure;
use Auth;


class RedirectAdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('admin')->check())
        {
            return redirect('/admin/admin_home');

        }
        return $next($request);
    }
}
