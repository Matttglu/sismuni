<?php
	require ('conexion.php');

	$se = $_POST['se'];

	$sql = "SELECT * FROM servicioeducativo inner join tipose on servicioeducativo.tipose=tipose.idtipo where tipose.idtipo=".$se."";
	$result = $conn->query($sql);

	$html= "";

	while($row = $result->fetch_assoc())
	{
	echo "<option value='".$row['idse']."'>".$row['Nombre']."</option>";
	}

?>
