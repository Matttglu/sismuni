<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=servicios-educativos.xls');
	require_once('conexion.php');

	$query="SELECT * FROM servicioeducativo";
	$result=mysqli_query($conn, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Id-tipo-se</th>
		<th>Autoridad</th>
		<th>Nivel</th>
		<th>Numero</th>
		<th>Nombre</th>
		<th>Id-director</th>
		<th>Id-usuario</th>
		<th>Calle</th>
		<th>Delegación</th>
		<th>Barrio</th>
		<th>Telefono</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['tipo se'];?></td>
					<td><?php echo $row['autoridad'];?></td>
					<td><?php echo $row['nivel'];?></td>
					<td><?php echo $row['numero'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['iddirector'];?></td>
					<td><?php echo $row['ID Usuario'];?></td>
					<td><?php echo $row['direccion'];?></td>
					<td><?php echo $row['iddelegacion'];?></td>
					<td><?php echo $row['idbarrio'];?></td>
					<td><?php echo $row['telefono'];?></td>
				</tr>

			<?php
		}
	?>
</table>
