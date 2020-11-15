<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CreateCbtAccess
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
        $user = Auth::guard('cbt')->user();
        if($user){
            return redirect()->route('cbt.dashboard')->with('alert', 'You dont administrative right to access this page.');
         }
        return $next($request);
    }
}
