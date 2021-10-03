<?php

namespace App\Http\Middleware;

use App\Exceptions\UnauthorizedException;
use App\Facades\AccessControl;
use App\Http\Middleware\Checks\IsInstalled;
use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
	private IsInstalled $isInstalled;

	public function __construct(IsInstalled $isInstalled)
	{
		$this->isInstalled = $isInstalled;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 *
	 * @return mixed
	 *
	 * @throws UnauthorizedException
	 */
	public function handle(Request $request, Closure $next)
	{
		if (!$this->isInstalled->assert()) {
			return $next($request);
		}

		if (!AccessControl::is_admin()) {
			throw new UnauthorizedException('Admin privileges required');
		}

		return $next($request);
	}
}
