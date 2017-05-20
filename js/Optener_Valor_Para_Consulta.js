function OptenerValoresDireccion_ConsultaUsuario()
{
	var url = "Conexion_Login_Usuario_php.php";
	$.post(url,
	{
		Contrasena:$("#txtPassword").val(),
		Correo:$("#txtCorreo").val()
		
	},
    
    function (data)
    {
    	$("#respuesta").html(data);

    }

	);

}