<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=interacciones.xls');
	require_once('conexion.php');

	$query="SELECT * FROM estadosinteracciones";
	$result=mysqli_query($conn, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Id-estado</th>
		<th>Estado</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['idestado'];?></td>
					<td><?php echo $row['estado'];?></td>
				</tr>

			<?php
		}
	?>
</table>
