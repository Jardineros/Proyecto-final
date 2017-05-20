function OptenerValores_Nuevo_Usuario()
{
	var url = "Conexion_Nuevo_Usuario_php.php";
	$.post(url,
	{
		Nombre:$("#txtNombre").val(),
		Apellidos:$("#txtApellidos").val(),
		Direccion:$("#txtDireccion").val(),
		Telefono:$("#txtTelefono").val(),
		Contrasena:$("#txtPassword").val(),
		Correo:$("#txtCorreo").val()
	},
    
    function (data)
    {
    	$("#respuesta").html(data);

    }

	);

}