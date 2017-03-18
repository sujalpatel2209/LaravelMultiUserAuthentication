<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class UserLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth = Auth::guard('user');
        if ($auth->check()) {
            return redirect('/user/userDashboard');
        }
        return $next($request);
    }
}
?>
