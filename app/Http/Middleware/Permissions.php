<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use function print_r;

class Permissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$permissions)
    {
        foreach ($permissions as $permission) {
            $user_all_permissions = isset($request->user()->role)? $request->user()->role->permission->toArray():[];
            if (in_array($permission, array_column($user_all_permissions, 'slug'))) {
                return $next($request);
            }
        }
        abort(403, 'UNAUTHORIZED ACTION.');
    }
}
