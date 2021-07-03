<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DefaultModel;

class DefaultController extends Controller
{
	public function __construct() {
		$this->DefaultModel = new DefaultModel();
	}
	public function login() {
		return view('v_login');
	}
	public function register() {
		$data = [
			'classes' => $this->DefaultModel->getData()
		];
		return view('v_register', $data);
	}
	public function reset() {
		return view('v_reset');
	}
	public function reset_password() {

	}
	public function home() {
		return view('v_home');
	}
	public function account() {
		return view('v_account');
	}
}
