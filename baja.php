<?php
	include('funcionesGil.php');
	$db= conexionBase();
	

	if ($_GET['caso']=="categorias")
	{
		$query = "DELETE FROM categoria WHERE id=".$_GET['id'];
		$db->query($query);
		desconexionBase($db); 
		header('Location: categorias.php');
	}
	/*El codigo de arriba elimina mediante la cosulta $query = "DELETE FROM categoria WHERE id=".$_GET['id']; 
	a una categoria de la base de datos utilizando el identificador id.*/

	if ($_GET['caso']=="promocion")
	{
		$query = "DELETE FROM promocion WHERE id=".$_GET['id'];
		$db->query($query);
		desconexionBase($db); 
		header('Location: promociones.php');
	}

	/*El codigo de arriba elimina mediante la cosulta $query = "DELETE FROM promocion WHERE id=".$_GET['id']; 
	a una promocion de la base de datos utilizando el identificador id.*/

	if ($_GET['caso']=="proveedor")
	{
		$query = "DELETE FROM proveedores WHERE id=".$_GET['id'];
		$db->query($query);
		desconexionBase($db); 
		header('Location: proveedores.php');
	}

	/*El codigo de arriba elimina mediante la cosulta $query = "DELETE FROM proveedores WHERE id=".$_GET['id']; 
	a un proveedor de la base de datos utilizando el identificador id.*/

	if ($_GET['caso']=="lote")
	{
		$query = "DELETE FROM lote WHERE id=".$_GET['id'];
		$db->query($query);
		desconexionBase($db); 
		header('Location: lotes.php');
	}

	/*El codigo de arriba elimina mediante la cosulta $query = "DELETE FROM lote WHERE id=".$_GET['id']; 
	a un lote de la base de datos utilizando el identificador id.*/

	if ($_GET['caso']=="producto")
	{
		$query = "DELETE FROM producto WHERE id=".$_GET['id'];
		$db->query($query);
		desconexionBase($db); 
		header('Location: productos.php');
	}
	
	/*El codigo de arriba elimina mediante la cosulta $query = "DELETE FROM producto WHERE id=".$_GET['id']; 
	a un producto de la base de datos utilizando el identificador id.*/

	if ($_GET['caso']=="sucursal")
	{
		$query = "DELETE FROM sucursal WHERE id=".$_GET['id'];
		$db->query($query);
		desconexionBase($db); 
		header('Location: sucursales.php');
	}

	/*El codigo de arriba elimina mediante la cosulta $query = "DELETE FROM sucursal WHERE id=".$_GET['id']; 
	a una sucursal de la base de datos utilizando el identificador id.*/
	
	if ($_GET['caso']=="usuario")
	{
		$query = "DELETE FROM usuarios WHERE id=".$_GET['id'];
		$db->query($query);
		desconexionBase($db); 
		header('Location: usuarios.php');
	}
	/*El codigo de arriba elimina mediante la cosulta $query = "DELETE FROM usuario WHERE id=".$_GET['id']; 
	a un usuario de la base de datos utilizando el identificador id.*/
?>