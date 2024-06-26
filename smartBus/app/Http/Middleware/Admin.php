<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Admin
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

            if(Auth::user()->isAdmin()){

                return $next($request);
            }

        Session::flash('restriction', ' You are not an Administrator. Users only roles with Administrator can view the page ');

        return redirect('/');
    }


}
