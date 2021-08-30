<?php

require_once './Controller.php';
require_once './Modelo/Usuario.php';

class UserController extends Controller
{
	public function __construct()
	{
		parent::__construct(new Usuario());
	}

	public function getModel(): Usuario
	{
		return $this->getModel();
	}

	public function signIn()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			return json_encode($this->getModel()->signIn());
		}

		return json_encode([
			'auth' => false
		]);
	}

	public function signUp()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			return json_encode($this->getModel()->signUp());
		}

		return json_encode([
			'auth' => false
		]);
	}
}
