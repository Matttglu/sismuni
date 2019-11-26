<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');
	require_once('conexion.php');

	$query="SELECT * FROM usuarios inner join tiposdeusuarios on tiposdeusuarios.idtipousuario=usuarios.idtipousuario";
	$result=mysqli_query($conn, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Telefono</th>
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
	?>
</table>
