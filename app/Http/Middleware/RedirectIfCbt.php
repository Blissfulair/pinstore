<?php
class RedirectIfCbt
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'cbt')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('cbt/dashboard');
	    }

	    return $next($request);
	}
}