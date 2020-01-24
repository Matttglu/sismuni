<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');
	require_once('conexion.php');

	$query="SELECT * FROM usuarios inner join tiposdeusuarios on tiposdeusuarios.idtipousuario=usuarios.idtipousuario";
	$result=mysqli_query($conn, $query);
	$sql2 = "SELECT * FROM referentes inner join tiposdeusuarios on tiposdeusuarios.idtipousuario=referentes.idtipousuario";
$result2 = mysqli_query($conn, $sql2);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Rol</th>
		<th>Email</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['apellido'];?></td>
					<td><?php echo $row['rol'];?></td>
					<td><?php echo $row['email'];?></td>
				</tr>

			<?php
		}
			while ($row=mysqli_fetch_assoc($result2)) {
				?>
					<tr>
						<td><?php echo $row['nombre'];?></td>
						<td><?php echo $row['apellido'];?></td>
						<td><?php echo $row['rol'];?></td>
						<td><?php echo $row['email'];?></td>
					</tr>

				<?php
			}
	?>
</table>
