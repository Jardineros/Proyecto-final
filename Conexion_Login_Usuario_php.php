<?php
error_reporting(E_ALL);

//Variables Para la conexion
$servidor = "localhost";//Ips, direcciones, nombres de
$basedatos = "casa_jardin";
$usuario = "nan";
$contrasena = "123456789";
	
//Variable para recuperar los datos


$password = $_POST["Contrasena"];
$correo = $_POST["Correo"];

try {
	//Se intenta la conexion
	$conexionMySqli = new mysqli($servidor,$usuario,$contrasena,$basedatos);
	if ($conexionMySqli -> connect_errno) {
	 	echo "Fallo la conexion con MySQL: (". $conexionMySqli -> connect_errno . ")" . $conexionMySqli -> connect_error;
	 } 
	 else
	 {
	 	//echo utf8_decode("Conexion Habilitada");



	 	$query = "Select Contrasena from cliente where Correo = '$correo'";
	 	//echo $query;

	 	$ResultadoOperacion = $conexionMySqli -> query($query);

	 	//$ResultadoOperacion->fetch_assoc();
	 	
	 	if($ResultadoOperacion->num_rows > 0)
	 	{
	 		//print_r($ResultadoOperacion);
	 		//echo "Operacion Realizada";

           $fila = $ResultadoOperacion->fetch_assoc(); 
           
           	//echo $fila['Contrasena'];
           

          
          if($fila['Contrasena'] == $password)
          {

          	?>
	 		<!--<div class="text-success">
	 			<p>Operaci&oacute;n Realizada con &eacute;exito</p>

	 		</div>-->
           
          <script type="text/javascript">$("#login").modal("hide");</script>

          
	 		<?php
          }
          else
          {
          	?>
          	<!--
	 		<div class="text-danger text-center">
	 			<p>Operaci&oacute;n <p>NO</p> Realizada</p>
	 		</div>-->

	 		<script type="text/javascript">window.alert("Correo o Contraseña Incorrecta");</script>

	 		<?php
          }

	 		

	 	}
	 	else 
	 	{
	 		//echo "Fallo en Operacion";
	 		?>
	 		<!--
	 		<div class="text-danger text-center">
	 			<p>Operaci&oacute;n <p>NO</p> Realizada</p>
	 		</div>-->
              
            <script type="text/javascript">window.alert("Correo o Contraseña Incorrecta");</script>

	 		<?php

	 	}
	 }
} 
catch (Exception $e) {
	throw $e;
	
	
}