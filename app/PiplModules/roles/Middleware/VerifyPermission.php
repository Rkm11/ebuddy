<?php

namespace App\PiplModules\roles\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\PiplModules\Roles\Exceptions\PermissionDeniedException;

class VerifyPermission
{
    /**
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
		
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param int|string $permission
     * @return mixed
     * @throws \App\PiplModules\Roles\Exceptions\PermissionDeniedException
     */
    public function handle($request, Closure $next, $permission)
    {
        if ($this->auth->check() && ($this->auth->user()->can($permission) || $this->auth->user()->isSuperadmin())) {
            return $next($request);
        }

            if(!$this->auth->check())
            {
		   return redirect("admin/login");   
            }
            else
            {
                    abort(403);
            }
    }
}
