<?php namespace Oral_Plus\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


	public function handle($request, Closure $next)
	{

        if($this->auth->user()->type != 'admin')
        {
            if($request->ajax())
            {
                return response('Unauthorized.', 401);
            }

            else
            {
                $this->auth->logout();
                return redirect()->guest('auth/login');
            }
        }

		return $next($request);
	}

}
