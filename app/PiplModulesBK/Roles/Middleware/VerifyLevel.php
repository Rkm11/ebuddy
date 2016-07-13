<?php

namespace App\PiplModules\Roles\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\PiplModules\Roles\Exceptions\LevelDeniedException;

class VerifyLevel
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
     * @param int $level
     * @return mixed
     * @throws \App\PiplModules\Roles\Exceptions\LevelDeniedException
     */
    public function handle($request, Closure $next, $level)
    {

        if ($this->auth->check() && $this->auth->user()->level() <= $level) {
            return $next($request);
        }
		
        if($this->auth->check())
        {
         abort(403);
        }else
        {
	   return redirect('admin/login');
        }
    }
}
