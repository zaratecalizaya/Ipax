<?php

require_once './Modelo/Model.php';

abstract class Controller
{
	private $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function get($columns = [], $id = null)
	{
		return $this->model->select($id, $columns);
	}

	public function create($args)
	{
		return $this->model->create($args);
	}

	public function udpate($id, $args)
	{
		return $this->model->update($id, $args);
	}

	public function delete($id)
	{
		return $this->model->delete($id);
	}
}
