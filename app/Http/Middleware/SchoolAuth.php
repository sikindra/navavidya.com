<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SchoolAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('SCHOOL_LOGIN')){
           }else{
                 $request->session()->flash('error','Access Denied');
                 return redirect('http://127.0.0.1:8000/');
             }
        return $next($request);
    }
}
 