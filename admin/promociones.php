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
					<li class="elementoMenu" onclick="location.href ='productos.html'"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Productos</li>
					<li class="elementoMenu" onclick="location.href ='sucursales.html'"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Sucursales</li>
					<li class="elementoMenu" onclick="location.href ='lotes.html'"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Lotes</li>
					<li class="elementoMenu" onclick="location.href ='proveedores.html'"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Proovedores</li>
					<li class="elementoMenuActivo" onclick="location.href ='lotes.html'"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Promociones</li>
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
			<div class="tablas">

				<h1 class="titulo">Promociónes</h1>
				<center>
					<a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar promoción</a>
				</center>
				</br>
				<table class="table">
				<thead>
				    <tr>
				      	<th>N° de Lote</th>
				      	<th>Producto</th>
				     	<th>% de Descuento</th>
				    	<th>Acciones</th>
				    </tr>
				</thead>
				<tbody>
					<tr>
						<td>123</td>
						<td>Producto X</td>
						<td>25%</td>
						<td>
							<div class="btn-group" role="group">
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						    	</a>
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						    	</a>
						    	
						    	<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						    	</a>
					    	</div>
						</td>
					</tr>
					
					<tr>
						<td>123</td>
						<td>Producto X</td>
						<td>25%</td>
						<td>
							<div class="btn-group" role="group">
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						    	</a>
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						    	</a>
						    	
						    	<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						    	</a>
					    	</div>
						</td>
					</tr>
					<tr>
						<td>123</td>
						<td>Producto X</td>
						<td>25%</td>
						<td>
							<div class="btn-group" role="group">
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						    	</a>
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						    	</a>
						    	
						    	<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						    	</a>
					    	</div>
						</td>
					</tr>
					<tr>
						<td>123</td>
						<td>Producto X</td>
						<td>25%</td>
						<td>
							<div class="btn-group" role="group">
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						    	</a>
								<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						    	</a>
						    	
						    	<a href="#" class="btn btn-default active" role="button">
						    		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						    	</a>
					    	</div>
						</td>
					</tr>
						
				</tbody>
				</table>


		    	<br/>
		    	<br/>
		    	<br/>
				
			</div>
			<center>
				<nav class="paginacion">
				  	<ul class="pagination">
				    <li>
				    	<a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      	</a>
				    </li>
				    <li class="active"><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</center>
		</div>
		
		<?php include("footer.php") ?>
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>