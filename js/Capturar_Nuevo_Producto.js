function OptenerValores_Nuevo_Usuario()
{
	var url = "Conexion_Nuevo_Producto_php.php";
	$.post(url,
	{
		Producto:$("#txtNombreProducto").val(),
		Descripcion:$("#txtDescipcionProducto").val(),
		Costo:$("#txtCosto").val(),
		Stock:$("#txtStock").val(),
		ID_Tipo:$("#txtID_Tipo").val()
	},
    
    function (data)
    {
    	$("#respuesta").html(data);

    }

	);

}