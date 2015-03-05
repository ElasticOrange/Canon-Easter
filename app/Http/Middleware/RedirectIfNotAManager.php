<?php namespace App\Http\Middleware;

use Session;
use Closure;

class RedirectIfNotAManager {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (Session::get('admin'))
		{
			return $next($request);
		}

		return redirect('/admin/login');
	}

}
