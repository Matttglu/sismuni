<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=directivos.xls');
	require_once('conexion.php');

	$query="SELECT * FROM director";
	$result=mysqli_query($conn, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>ID director</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Telefono-1</th>
		<th>Telefono-2</th>
		<th>Email</th>
		<th>Fecha-inicio</th>
		<th>Observaciones</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['iddirector'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['apellido'];?></td>
					<td><?php echo $row['celular1'];?></td>
					<td><?php echo $row['celular2'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['fechadesde'];?></td>
					<td><?php echo $row['observaciones'];?></td>
				</tr>

			<?php
		}
	?>
</table>
