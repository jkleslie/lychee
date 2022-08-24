<?php

namespace App\Actions\WebAuth;

use App\Exceptions\UnauthenticatedException;
use Illuminate\Support\Facades\Auth;
use Laragear\WebAuthn\WebAuthn;
use Webauthn\PublicKeyCredentialCreationOptions;

class GenerateRegistration
{
	/**
	 * @throws UnauthenticatedException
	 */
	public function do(): PublicKeyCredentialCreationOptions
	{
		/** @var \App\Models\User */
		$user = Auth::user() ?? throw new UnauthenticatedException();

		return WebAuthn::generateAttestation($user);
	}
}
