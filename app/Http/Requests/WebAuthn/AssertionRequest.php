<?php

namespace App\Http\Requests\WebAuthn;

use Laragear\WebAuthn\Http\Requests\AssertionRequest as RequestsAssertionRequest;

class AssertionRequest extends RequestsAssertionRequest
{
	/**
	 * {@inheritDoc}
	 */
	public function rules(): array
	{
		return ['user_id' => 'sometimes|int'];
	}
}