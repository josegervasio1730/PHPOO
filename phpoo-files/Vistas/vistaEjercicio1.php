<?php
    include_once('../clases/ejercicio1/Carro.php');
    include_once('../clases/ejercicio1/Moto.php');
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<title>
		Indice
	</title>
</head>
<body>
	
	<input type="text" class="form-control" value="<?php  echo $mensajeServidor; ?>" readonly>

	<!-- aqui puedes insertar el mesaje del servidor para Moto-->
    <input type="text" class="form-control" value="<?php  echo $mensaje; ?>" readonly>

	<div class="container" style="margin-top: 4em">
	
	<header> <h1>Carro y Moto</h1></header><br>
	<form method="post">
		<div class="form-group row">

			 <label class="col-sm-3" for="CajaTexto1">Color del carro:</label>
			 <div class="col-sm-4">
					<input class="form-control" type="color" name="color" id="CajaTexto1">
			</div>
			<div class="col-sm-4">
			</div>

			<!-- inserta aqui los inputs para recibir los atributos del objeto-->
			<label class="col-sm-3" for="CajaTexto2">Marca Moto</label>
			<div class="col-sm-4">
				<input type="marca" class="form-control" name="marca" id="CajaTexto2">
				</div>
			<div class="col-sm-4">
			</div>

			<label class="col-sm-3" for="CajaTexto3">Modelo Moto</label>
			<div class="col-sm-4">
				<input type="modelo" class="form-control" name="modelo" id="CajaTexto2">
				</div>
			<div class="col-sm-4">
			</div>
						
		</div>
		<button class="btn btn-primary" type="submit" >enviar</button>
		<a class="btn btn-link offset-md-8 offset-lg-9 offset-6" href="../index.php">Regresar</a>
	</form>

	</div>


</body>
</html>



