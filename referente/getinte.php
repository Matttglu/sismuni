<?php
	require ('conexion.php');


	$select2lista=$_POST['select2lista'];

			$sql="SELECT * from usuarios where idtipousuario=".$select2lista."";

	$result = $conn->query($sql);

	$html= "";

	while($row = $result->fetch_assoc())
	{
	echo "<option value='".$row['idusuario']."'>".$row['apellido']."</option>";
	}

?>
