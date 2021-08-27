<?php

require_once 'Modelo/Category.php';
require_once 'Controlador/Controller.php';

class CategoryController extends Controller
{
	private static $instance = null;

	private function __construct()
	{
		parent::__construct(new Category());
	}

	public static function getInstance(): CategoryController
	{
		if (self::$instance == null) {
			self::$instance = new CategoryController();
		}

		return  self::$instance;
	}
}
