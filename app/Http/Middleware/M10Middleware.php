<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class M10Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo ('
                <div class="container text-right" style="padding:20px;">
                    Data actual : '.date('d/m/Y H:i:s')).'
                </div>
              ';
        return $next($request);
    }
}