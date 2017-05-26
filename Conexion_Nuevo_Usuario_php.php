<?php
error_reporting(E_ALL);

//Variables Para la conexion
$servidor = "localhost";//Ips, direcciones, nombres de
$basedatos = "casa_jardin";
$usuario = "nan";
$contrasena = "123456789";
	
//Variable para recuperar los datos
$nombre = $_POST["Nombre"];
$apellidos = $_POST["Apellidos"];
$direccion = $_POST["Direccion"];
$telefono = $_POST["Telefono"];
$password = $_POST["Contrasena"];
$correo = $_POST["Correo"];


try {
	//Se intenta la conexion
	$conexionMySqli = new mysqli($servidor,$usuario,$contrasena,$basedatos);
	if ($conexionMySqli -> connect_errno) {
	 	//echo "Fallo la conexion con MySQL: (". $conexionMySqli -> connect_errno . ")" . $conexionMySqli -> connect_error;
	 	?>
        <script type="text/javascript">window.alert("OCURRIÓ UN ERROR EN LA CONEXIÓN");</script>
	 	<?php
	 } 
	 else
	 {
	 	//echo utf8_decode("Conexion Habilitada");

	 	$query = "Insert into cliente(Nombre,Apellidos,Direccion,Telefono,Contrasena,Correo) values (
	 		'".$nombre."',
	 		'".$apellidos."',
	 		'".$direccion."',
	 		'".$telefono."',
	 		'".$password."',
	 		'".$correo."')";
	 	//echo $query;
	 	$ResultadoOperacion = $conexionMySqli -> query($query);
	 	
	 	if($ResultadoOperacion)
	 	{
	 		//echo "Operacion Realizada";
	 		?>
	 		<!--
	 		<div class="text-success">
	 			<p>Operaci&oacute;n Realizada con &eacute;exito</p>
	 		</div>-->
           
           <script type="text/javascript">$("#login").modal("hide");</script>

	 		<?php

	 	}
	 	else 
	 	{
	 		//echo "Fallo en Operacion";
	 		?>
	 		<!--
	 		<div class="text-danger text-center">
	 			<p>Operaci&oacute;n <p>NO</p> Realizada</p>
	 		</div>-->
	 		<script type="text/javascript">window.alert("Ocurrió un error en el proceso de registro");</script>
	 		<?php

	 	}
	 }
} 
catch (Exception $e) {
	throw $e;
	
	
}