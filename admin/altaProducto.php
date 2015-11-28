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

				<h1 class="titulo">Alta producto</h1>
				</br>
				

				<form class="form-horizontal">
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
			    	<div class="col-sm-10">
			      	<input type="value="Algo por aqui algo por alla"" class="form-control" id="inputEmail3" placeholder="Nombre">
			    	</div>
				</div>
				<div class="form-group">
				    <label for="inputtext3" class="col-sm-2 control-label">Compuesto:</label>
				    <div class="col-sm-10">
				    	<input type="text" class="form-control" id="inputtext3" placeholder="Conpuesto">
					</div>		
				</div>
				<div class="form-group">
				    <label for="inputtext3" class="col-sm-2 control-label">Precio:</label>
				    <div class="col-sm-10">
				    	<input type="text" class="form-control" id="inputtext3" placeholder="Precio">
					</div>		
				</div>
				<div class="form-group">
				    <label for="inputtext3" class="col-sm-2 control-label">Descripción:</label>
				    <div class="col-sm-10">
				    	<input type="text" class="form-control" id="inputtext3" placeholder="Descripción">
					</div>		
				</div>
				<div class="form-group">
				    <label for="inputtext3" class="col-sm-2 control-label">Control:</label>
				    <div class="col-sm-10">
				    	<div class="checkbox">
						    <label>
						      <input type="checkbox"> 
						    </label>
						  </div>
					</div>		
				</div>
				<div class="form-group">
				    <label for="inputtext3" class="col-sm-2 control-label">Imagen:</label>
				    
				    <div class="col-sm-10">
				    	<img src="img/imagen.png" class="imagenBajaProducto img-rounded " /> 	
				    	<input type="file" id="exampleInputFile">
					</div>
				</div>
				<div class="form-group">
				    <label for="inputtext3" class="col-sm-2 control-label">Categoría:</label>
				    
				    <div class="col-sm-10">
				    	<select class="form-control">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
				</div>



				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
				    	<a href="#" class="btn btn-danger active" role="button">
				    		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				    		Cancelar
				    	</a>
				    	<button type="submit" class="btn btn-success">
				    		<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				    		Aceptar
				    	</button>

				    </div>
				</div>
				</form>




			</div>
		</div>
		
		<?php include("footer.php") ?>
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>