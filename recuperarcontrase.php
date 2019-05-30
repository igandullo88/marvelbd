<html>

<head>
	<title>Recuperar usuario o contraseña</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilos.css">
</head>


<body>

<?php
session_start();
$varsesion = $_SESSION['usuario'];

?>


<img alt="full screen background image" src="img/descarga.jpg" id="imagen" />
	
	<form id="form"  action="recupass.php" method="post">
	
	 <h2>Cambiar contraseña</h2>
	 
	 Contraseña:<input id="pass" type="password"  name="pass"  required>
	 
	 Nueva contraseña:<input id="pass" type="password"  name="newpass"  required>
	 
	 Repetir  nueva contraseña:<input id="repass" type="password"  name="renewpass" required>
	 
     
	 <input id="validar" type="submit" value="Validar">
	  
	</form>
	
</body>

</html>