<?php  
	require_once('conexion.php');
	require_once('insertar_consulta.php');
	require_once('cargar.php');
?>


<html>

<meta  charset=utf-8" >

<body>

<h1> Clientes</h1>

<?php  
	cargar();
?>


    <div>
		<a href="formulario.html"> Ingresar nuevo producto </a>
	
	</div>

</body>
</html>
