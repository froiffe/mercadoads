<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AdminAuth
{
    protected $auth;

    /**
     * Creates a new instance of the middleware.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ipsAllowed = explode(',', env('IPS_ADMIN'));
        $clientIp = \Request::ip();

        if( in_array($clientIp, $ipsAllowed) || env('APP_ENV') == 'local' ) {
            if ( $this->auth->guest() ) {
                return redirect()->route('login');
            }

            return $next($request);
        }
        else {
            return redirect('/');
        }
    }
}
