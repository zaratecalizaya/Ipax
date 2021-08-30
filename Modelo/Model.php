
<?php

require_once 'Modelo/Conexion/DBConnection.php';

abstract class Model
{
	protected $TABLE;
	protected $COLUMNS;

	function __construct($TABLE, $COLUMNS = [])
	{
		$this->TABLE = $TABLE;
		$this->COLUMNS = $COLUMNS;
	}

	public function create($args)
	{
		$cols = "";
		$values	= "";

		$index = 0;
		$length = count($args);

		foreach ($args as $col => $value) {
			if (!in_array($col, $this->COLUMNS)) {
				throw new Exception("Not Valid Column", 1);
			}

			if (!is_numeric($value)) {
				$value = "'$value'";
			}

			$cols .= $col;
			$values .= $value;

			if ($index < $length - 1) {
				$cols .= ", ";
				$values .= ", ";
			}

			$index++;
		}

		$query = "INSERT INTO {$this->TABLE} ($cols) VALUES ($values)";

		return DBConnection::query($query);
	}

	public function update($id, $args)
	{
		$values = "";

		$index = 0;
		$length = count($args);

		foreach ($args as $col => $value) {
			if (!in_array($col, $this->COLUMNS)) {
				throw new Exception("Not Valid Column", 1);
			}

			if (!is_numeric($value)) {
				$value = "'$value'";
			}

			$values .= "$col = $value";

			if ($index < $length - 1) {
				$values .= ", ";
			}

			$index++;
		}

		$sql = "UPDATE {$this->TABLE} SET $values WHERE id = $id";

		return DBConnection::query($sql);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM {$this->TABLE} WHERE id = $id";

		return DBConnection::query($sql);
	}

	public function select($id = null, $columns = [])
	{
		$cols = "";

		$length = count($columns);
		
		if ($length > 0) {
			for ($i = 0; $i < $length; $i++) {
				$cols .= "{$columns[$i]}";
				if ($i < $length - 1) {
					$cols .= ", ";
				}
			}
		} else {
			$cols = "*";
		}

		$sql = "SELECT $cols FROM {$this->TABLE}";

		if ($id != null) {
			$sql .= " WHERE id = $id";
		}

		return DBConnection::query($sql);
	}

	public function query($sql)
	{
		return DBConnection::query($sql);
	}
}

?>
 