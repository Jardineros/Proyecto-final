<?php
function conectarse()
{
	$mysqli = new mysqli("localhost", "nan", "123456789", "casa_jardin");	
	if ($mysqli->connect_errno)
	{
		echo "Fallo la conexion MySQL:
		(". $mysqli->connect_errno .")
		" . $mysqli->connect_error;
		exit();
	}
	return $mysqli;
}
conectarse();
?>
