<?php
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
					<li class="elementoMenu" onclick="location.href ='index.html'"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</li>
					<li class="elementoMenu" onclick="location.href ='usuarios.html'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios</li>
					<li class="elementoMenuActivo" onclick="location.href ='productos.html'"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Productos</li>
					<li class="elementoMenu" onclick="location.href ='sucursales.html'"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Sucursales</li>
					<li class="elementoMenu" onclick="location.href ='lotes.html'"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Lotes</li>
					<li class="elementoMenu" onclick="location.href ='proveedores.html'"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Proovedores</li>
					<li class="elementoMenu" onclick="location.href ='lotes.html'"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Promociones</li>
					<li class="elementoMenu" onclick="location.href ='lotes.html'"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Categorías</li>
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

				<h1 class="titulo">Mostrar producto</h1>
				</br>
				<table class="table">
					<tr>
						<td><strong>Nombre: </strong></td>
						<td>Compañia X</td>
					</tr>
					<tr>
						<td><strong>Compuesto: </strong></td>
						<td>Annnna</td>
					</tr>
					<tr>
						<td><strong>Precio $: </strong></td>
						<td>777</td>
					</tr>
					<tr>
						<td><strong>Descripción: </strong></td>
						<td>Juan X Y</td>
					</tr>
					<tr>
						<td><strong>Control: </strong></td>
						<td>Controlado</td>
					</tr>
					<tr>
						<td><strong>Imagen: </strong></td>
						<td><img src="img/aspirina.png" alt="..." class="img-rounded imagenBajaProducto"></td>
					</tr>
					<tr>
						<td><strong>Categoría: </strong></td>
						<td>Bebes</td>
					</tr>
					

				</table>

				<br/>
		    	<a href="#" class="btn btn-primary active" role="button">
		    		<span class="glyphicon glyphicon-level-up" aria-hidden="true"></span>
		    		Regresar
		    	</a>
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