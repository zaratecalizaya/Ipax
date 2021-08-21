
<?php

require_once './config.php';

class DBConnection
{
	public static function query($sql)
	{
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

		if (!$link) {
			die('⚠️ Connection Error ⚠️' . mysqli_connect_error());
		}

		$result = mysqli_query($link, $sql);

		if (!$result) {
			die('⚠️ No results Available ⚠️' . mysqli_error($link));
		}

		mysqli_close($link);

		return $result;
	}
}

?>
 