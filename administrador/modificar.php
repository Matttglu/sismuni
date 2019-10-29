<?php
require 'conexion.php';

$idusuario = $_GET['idusuario'];

$sql = "SELECT * FROM usuarios inner join tiposdeusuarios on tiposdeusuarios.idtipousuario=usuarios.idtipousuario WHERE idusuario = '$idusuario'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<html lang="es">
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>

      <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">

         <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $row['idusuario'];?>" />

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>



				<div class="form-group">
					<label for="apellido" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
										<div class="radio">
												<label>
														<input type="radio" name="rol" value="1" required> 1 (administrador)
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="rol" value="2" required> 2 (coordinador)
												</label>
										</div>
										<div class="radio">
												<label>
														<input type="radio" name="rol" value="3" required> 3 (referente)
												</label>
										</div>
								</div>

        <div class="form-group">
        					<label for="email" class="col-sm-2 control-label">Email</label>
        					<div class="col-sm-10">
        						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"  required>
        					</div>
        				</div>

								<div class="form-group">
				        					<label for="password" class="col-sm-2 control-label">Contraseña</label>
				        					<div class="col-sm-10">
														<button type='hidden' id='boton' onclick='ocultar()'>Cambiar la contraseña</button>
				        						<input type="hidden" class="form-control" id="password" name="password" placeholder="Contraseña" value="<?php echo $row['password']; ?>"  required>
				        					</div>
				        				</div>

        <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="tabla-usuarios.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
<script>
function ocultar(){
	idpass=document.getElementById('password');
	idboton=document.getElementById('boton');
 if (idpass.type=='hidden') {
	  idpass.type='password';
		idpass.value="";
		idboton.style.display = 'none';
	}
}
</script>
