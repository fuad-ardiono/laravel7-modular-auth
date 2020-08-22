<?php
namespace App\Module\Auth;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use App\Module\Auth\Contract as AuthService;

class Controller extends BaseController {
	private $auth_service;

	public function __construct(AuthService $service) {
		$this->auth_service = $service;
	}

	public function index() {

	}

	public function store(Request $request) {

	}

	public function update($id) {

	}

	public function destroy($id) {

	}
}
