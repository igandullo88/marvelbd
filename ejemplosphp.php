<html lang="es">
<head>
	<title>Formulario de Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilos.css">
	<link rel="stylesheet" href="estilos/estilos2.css">
	
</head>
<body>

<img alt="full screen background image" src="img/descarga.jpg" id="imagen" />

	<form>
	<br>
	
	<h1> jQuery</h1>
	
	<div style="text-align: center;">
	
	<table style="HEIGHT:50%;WIDTH:30%; position:relative; margin:20px 200;" border="1" align="center">
	
	<th> <h3>Ejemplos</h3></th>
	
	
	<?php 
	
	for($i=1; $i<=9;$i++){
	
	echo  "<tr>
	
	         <td><a href='php/ejemplos/ej".$i.".php' class='boton'> <img  id='iconos' src='img/php.png' align='center' />   Ejemplo ".$i."</a></td></tr>
	         
	";
	};
	
	         
	
	
	
	
	?>
	        <td><a href='php/ejemplos/ej10.html' class='boton'> <img  id='iconos' src='img/html.png' align='center' />   Ejemplo 10</a></td></tr>
			<td><a href='php/ejemplos/ej11.html' class='boton'> <img  id='iconos' src='img/html.png' align='center' />   Ejemplo 11</a></td></tr>

	
	
    </table>
    </div>
	 
	 
	</form>
</body>

</html>