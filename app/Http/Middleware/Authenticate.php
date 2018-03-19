<?php
/**
 * Created by PhpStorm.
 * User: Donneh de beest
 * Date: 19-3-2018
 * Time: 14:31
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                Session::put('oldUrl', $request->url());
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}