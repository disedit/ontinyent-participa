<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Redirect;
/**
 * Class PreferredDomain
 * @package App\Http\Middleware
 */
class HttpsProtocol
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
        if (!$request->secure()) {
            return redirect()->secure('/');
        }

        return $next($request);
    }
}