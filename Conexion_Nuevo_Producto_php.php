<?php
error_reporting(E_ALL);

//Variables Para la conexion
$servidor = "localhost";//Ips, direcciones, nombres de
$basedatos = "casa_jardin";
$usuario = "nan";
$contrasena = "123456789";
	
//Variable para recuperar los datos
$producto = $_POST["Producto"];
$descripcion = $_POST["Descripcion"];
$costo = $_POST["Costo"];
$stock = $_POST["Stock"];
$ID_Tipo = $_POST["ID_Tipo"];



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

	 	$query = "Insert into producto(Nombre,Informacion,Costo,Stock,Id_tipo_producto) values (
	 		'".$producto."',
	 		'".$descripcion."',
	 		'".$costo."',
	 		'".$stock."',
	 		'".$ID_Tipo."')";
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
           
           <script type="text/javascript">window.alert("DATOS GUARDADOS");</script>

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
	 		<script type="text/javascript">window.alert("Ocurrió un error al registrar el producto");</script>
	 		<?php

	 	}
	 }
} 
catch (Exception $e) {
	throw $e;
	
	
}