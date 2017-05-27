function OptenerValores_Nuevo_Producto()
{
	var url = "Conexion_Nuevo_Producto_php.php";
	$.post(url,
	{
		Producto:$("#txtNombreProducto").val(),
		Descripcion:$("#txtDescipcionProducto").val(),
		Costo:$("#txtCosto").val(),
		Stock:$("#txtStock").val(),
		ID_Tipo:$("#txtid_tipo_producto").val()		
		
	},
    
    function (data)
    {
    	$("#respuesta").html(data);

    }

	);

}