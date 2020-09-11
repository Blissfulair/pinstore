<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class ViewUserAccess
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
        if($user->viewuser != 1){
            return redirect()->route('admin.dashboard')->with('alert', 'You dont administrative right to access this page.');
        }
        return $next($request);
    }
}
