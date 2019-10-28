<?php
	require 'conexion.php';
	$idusuario = $_GET['idusuario'];
	$sql = "DELETE FROM usuarios WHERE idusuario = '$idusuario'";
	$resultado = $conn->query($sql);
	header('Location: tabla-usuarios.php');
?>
