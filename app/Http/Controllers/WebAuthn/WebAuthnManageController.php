<?php

namespace App\Http\Controllers\WebAuthn;

use App\Actions\WebAuth\Delete as DeleteDevices;
use App\Actions\WebAuth\Lists as ListDevices;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class WebAuthnManageController
{
	private ListDevices $listDevices;
	private DeleteDevices $deleteDevices;

	public function __construct(
		ListDevices $listDevices,
		DeleteDevices $deleteDevices
	) {
		$this->listDevices = $listDevices;
		$this->deleteDevices = $deleteDevices;
	}

	public function list(): Collection
	{
		return $this->listDevices->do();
	}

	public function delete(Request $request): void
	{
		$id = $request->validate(['id' => 'required|string']);
		$this->deleteDevices->do($id);
	}
}
