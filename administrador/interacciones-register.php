<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "municipio";

        $idse =$_POST["idse"];
        $tiposinte =$_POST["tiposinte"];
        $responsable =$_POST["idresponsable"];
        $estado=$_POST["estado"];
        $observacion=$_POST["observacion"];
        $fechainteraccion=$_POST["fechainteraccion"];

        // Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO interacciones (idse, idtipodeinteraccion, idresponsable, observacion, fechainteraccion, estado)
        VALUES ('". $idse ."','". $tiposinte . "','". $responsable . "','". $observacion . "','". $fechainteraccion . "','". $estado . "')";
	$resultado = $conn->query($sql);


?>
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
				<div class="row" style="text-align:center">
					<?php if($resultado) {
			  echo'<script type="text/javascript">
						      alert("Creado correctamente");
						      window.location.href="tabla-interacciones.php";
						      </script>';
                        $conn->close();
					 } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
                $conn->close();
} ?>

					<a href="index.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
