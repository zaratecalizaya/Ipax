
<?php

require_once './config.php';

class DBConnection
{
	public static function query($sql)
	{
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		$result = mysqli_query($link, $sql);
		mysqli_close($link);

		return $result;
	}
}

?>
 