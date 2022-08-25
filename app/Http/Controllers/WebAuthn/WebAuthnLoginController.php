<?php

namespace App\Http\Controllers\WebAuthn;

use App\Http\Requests\WebAuthn\AssertionRequest;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;
use Laragear\WebAuthn\Http\Requests\AssertedRequest;
use function response;

class WebAuthnLoginController
{
	/**
	 * Returns the challenge to assertion.
	 *
	 * @param AssertionRequest $request
	 *
	 * @return \Illuminate\Contracts\Support\Responsable
	 */
	public function options(AssertionRequest $request): Responsable
	{
		return $request->toVerify($request->validated()['user_id']);
	}

	/**
	 * Log the user in.
	 *
	 * @param AssertedRequest $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function login(AssertedRequest $request): Response
	{
		$content = $request->login();

		return response()->noContent($content !== null ? 204 : 422);
	}
}
