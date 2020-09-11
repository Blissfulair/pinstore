<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class MessageAccess
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
        $user = Auth::guard('admin')->user();
        if($user->message != 1){
            return redirect()->route('admin.dashboard')->with('alert', 'You dont administrative right to access this page.');
        }
        return $next($request);
    }
}
