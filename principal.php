<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/css.css">
	</head>
	<body class="container">
		<header>
			<h1>Formulario</h1>	
		</header>	
						
		<div class="row borde">
			<div class="col-md-5">
				<form action="validacion.php" method="get">
					<div class="form-group">
						<label form="usuario">Usuario</label>
						<input type="text" name="usuario" class="form-control" placeholder="Usuario">
						<small id="emailHelp" class="form-text text-muted">Escribe el Usuario y la contraseña para validar.</small>
						<br>
						<label form="contraseña">Contraseña</label>
						<input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<input type="submit" value="Validar" class="btn btn-success" name="Validar">
					</div>
				</form>
			</div>				
		</div>			
		

		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/bootstrap.js"></script>
		<!--<script src="js/bootstrap-validate.js"></script> libreria bootstrap de validacion-->
		<!-- <script src="https://unpkg.com/v8n/dist/v8n.min.js"></script> -->
		<!-- <script src="js/bootbox.js"></script> -->
		<!-- <script src="js/js.js"></script> -->
    </body>		
</html>		
