<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class AdminLoginMiddleware
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
        $auth = Auth::guard('admin');
        if ($auth->check()) {
            return redirect('/admin/adminDashboard');
        }
        return $next($request);
    }
}
?>
