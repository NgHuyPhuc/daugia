<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // if($request->routeIs('admin.*'))
            // if($request->routeIs('admin.*') || str_starts_with($request->url(), url('admin/')))
            if(str_starts_with($request->url(), url('admin/')))
            {
                return route('admin.login');
            }
            return route('user.login');
            // return route('login');
        }
    }
}
