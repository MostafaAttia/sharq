<?php

namespace App\Http\Middleware;

use Closure;

class IsVerified
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
        if (Auth::user() &&  Auth::user()->verified == 1) {
            return $next($request);
        }

//        return $next($request);
        return redirect('/')->with('message', 'لم يتم تأكيد إشتراكك بعد ، رجاء التواصل مع أحد المشرفين');
    }
}
