<?php
	require_once('conexion.php');
	require_once('insertar_consulta.php');
	
	$mensaje= null;
	
	$dni= $_POST['dni'];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$ciudad= $_POST['ciudad'];
	
	$consultas = new Consultas();
	$mensaje = $consultas->insertar($dni,$nombre,$apellido,$ciudad);
		
	echo $mensaje.'<br>';
	
	echo "<a href='formulario.html'> Ingresar nuevo producto </a>";
?>