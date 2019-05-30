<head>
	<title>Recuperar usuario o contraseña</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilos.css">

<meta charset="UTF-8">

 
	
</head>


<body>

<img alt="full screen background image" src="img/descarga.jpg" id="imagen" />

	<form id="form"  action="usuario.php" method="post" style="position:relative; margin:50px 50 80px;  ">
	
     <h2>Introduzca los siguientes datos  para recuperar su usuario</h2>
	 
	 
	 Email:<input id="email" type="email"  name="email"  required>
	 
	 Nombre:<input id="nombre" type="text"   name="nombre"  required>
	 
	 Apellidos:<input id="apellidos" type="text"  name="apellidos" required >
	 
	 Fecha de nacimiento:<input id="nacimiento" type="date" name="nacimiento" required >
	 
	 Nombre de su primera mascota:<input id="seguridad" type="text" name="seguridad" required >
     
	 <input id="validar" type="submit" value="Validar">
	  
	</form>
	
	<form id="form"  action="pass.php" method="post" style="position:relative; margin:0px 850;top: -800;">
	
	 <h2>Introduzca su email para recuperar su contraseña</h2>
	 
	 Email:<input id="email" type="email"  name="email"  required>
	 
     
	 <input id="validar" type="submit" value="Validar">
	  
	</form>
	
</body>


</html>