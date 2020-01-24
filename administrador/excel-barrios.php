<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=barrios.xls');
	require_once('conexion.php');

	$query="SELECT * FROM barrios";
	$result=mysqli_query($conn, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Id-barrio</th>
		<th>Descripcion</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['idbarrio'];?></td>
					<td><?php echo $row['descripcion'];?></td>
				</tr>

			<?php
		}
	?>
</table>
