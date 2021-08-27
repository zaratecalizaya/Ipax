
<?php

require 'Modelo/Model.php';

class Category extends Model
{
	public function __construct()
	{
		parent::__construct(
			'Categoria',
			[
				'id',
				'Nombre',
				'idImagen',
				'create_time',
				'update_time',
			]
		);
	}
}
?>