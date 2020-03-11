<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Rol extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request)
    {
        if ($request->user()->rol != 1) {
            return redirect('home');
        }
    }
}
