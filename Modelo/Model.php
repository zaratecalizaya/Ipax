
<?php

require_once './Conexion/DBConnection.php';

abstract class Model
{
	protected $TABLE;
	protected $COLUMNS;

	function __construct($TABLE, $COLUMNS = [])
	{
		$this->TABLE = $TABLE;
		$this->COLUMNS = $COLUMNS;
	}

	function create($args)
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

	function update($id, $args)
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

	function delete($id)
	{
		$sql = "DELETE FROM {$this->TABLE} WHERE id = $id";

		return DBConnection::query($sql);
	}

	function select($id = null)
	{
		$sql = "SELECT * FROM {$this->TABLE}";
		if ($id != null) {
			$sql .= " WHERE id = $id";
		}

		return DBConnection::query($sql);
	}

	function query($sql)
	{
		return DBConnection::query($sql);
	}
}

?>
 