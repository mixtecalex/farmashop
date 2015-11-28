<?php
	include("funcionesGil.php");
	$db=conexionBase();
	$query = "SELECT * FROM producto WHERE id=".$_GET['id'];
	$res=$db->query($query);
	/*El codigo de arriba obtiene mediante un id un producto el cual posteriormente se muestra 
	en una tabla.*/
	$var = $res->fetch(PDO::FETCH_ASSOC);

	$query = "SELECT * FROM categoria WHERE id=".$var['Id_categoria'];
	$res=$db->query($query);
	$categoria  = $res->fetch(PDO::FETCH_ASSOC);
	desconexionBase($db); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FarmaShop</title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="img/icono.png" />
		<script src="js/effects.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="css/estilosGil.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	</head>
	<body>
		<header>
			<nav>
				<menu class="menuPrincipal">
				<ul>

					<li class="logo">
						<img src="img/icono.png"/>&nbsp;&nbsp;FarmaShop</li>
					<li class="elementoMenu" onclick="location.href ='index.php'"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</li>
					<li class="elementoMenu" onclick="location.href ='usuarios.php'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios</li>
					<li class="elementoMenuActivo" onclick="location.href ='productos.php'"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Productos</li>
					<li class="elementoMenu" onclick="location.href ='sucursales.php'"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Sucursales</li>
					<li class="elementoMenu" onclick="location.href ='lotes.php'"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Lotes</li>
					<li class="elementoMenu" onclick="location.href ='proveedores.php'"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Proovedores</li>
					<li class="elementoMenu" onclick="location.href ='promociones.php'"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Promociones</li>
					<li class="elementoMenu" onclick="location.href ='categorias.php'"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Categorías</li>
					<li>
						<div class="btn-group login" role="group" >
						<a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></a>
						<a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar sesión</a>
						</div>
					</li>
				</ul>
				
				</menu>
				
			</nav>
		</header>
		
		<div class="contenido">
			<div class="formulario">

				<h1 class="titulo">Baja producto</h1>
				</br>
				<table class="table">
					<tr>
						<td><strong>Nombre: </strong></td>
						<td><?php echo $var["Nombre"];?></td>
					</tr>
					<tr>
						<td><strong>Compuesto: </strong></td>
						<td><?php echo $var["Compuesto"];?></td>
					</tr>
					<tr>
						<td><strong>Precio $: </strong></td>
						<td><?php echo $var["Precio"];?></td>
					</tr>
					<tr>
						<td><strong>Descripción: </strong></td>
						<td><?php echo $var["Descripcion"];?></td>
					</tr>
					<tr>
						<td><strong>Control: </strong></td>
						<td><?php 
								if ($var["Control"]== 0)
									echo "No";
								else 
									echo "Si";?>
						</td>
					</tr>
					<tr>
						<td><strong>Imagen: </strong></td>
						<td><img src=<?php echo '"'.$var["Imagen"].'"';?> alt="..." class="img-rounded imagenBajaProducto"></td>
					</tr>
					<tr>
						<td><strong>Categoría: </strong></td>
						<td><?php echo $categoria["Nombre"];?></td>
					</tr>
					

				</table>

		    	<br/>
				
		    	<a href="productos.php" class="btn btn-danger active" role="button">
		    		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		    		Cancelar
		    	</a>
		    	<button type="button" class="btn btn-success active" data-toggle="modal" data-target="#myModal">
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					 	Borrar
				</button>
				
				
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-body">
				        <div class="alert alert-danger" role="alert">
				        	
				        	<h4>
				        		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				        		¿Realmente deseas eliminar este elemento?</h4>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger active" data-dismiss="modal">Cancelar</button>
				        <?php echo '<button type="button" class="btn btn-success active" onclick="location.href ='."'baja.php?caso=producto&";?>
				        <?php echo 'id='.$_GET['id']."'".'">Aceptar</button>';?>
				      </div>
				    </div>
				  </div>
				</div>
		    	<br/>
		    	<br/>
		    	<br/><br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				




			</div>
		</div>
		
		<?php include("footer.php") ?>
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>