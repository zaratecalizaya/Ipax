
<?php

require_once './Model.php';

class Usuario extends Model
{
	static $errors = [
		'500' => 'Error de conexión',
		'401' => 'Usuario o contraseña incorrectos',
	];

	function __construct()
	{
		parent::__construct(
			'Usuarios',
			[
				'Nombre',
				'Apellidos',

				'Genero',
				'FechaNatal',

				'Correo',
				'Telefono',

				'Usuario',
				'Clave',

				'Estado',
				'EstadoSuscrito'
			]
		);
	}

	public function signIn()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$sql = "SELECT * FROM {$this->TABLE} WHERE Correo = {$_POST['email']}";
			$result = DBConnection::query($sql);

			if (mysqli_num_rows($result) < 1) {
				return json_encode(self::$errors['401']);
			}

			$line = mysqli_fetch_array($result, MYSQLI_ASSOC);

			if (!$line) {
				return json_encode(self::$errors['500']);
			}

			if ($line['Clave'] != md5($_POST['password'])) {
				return json_encode(self::$errors['401']);
			}

			return json_encode($line);
		}
	}

	public function signUp()
	{
	}
}

?>
 