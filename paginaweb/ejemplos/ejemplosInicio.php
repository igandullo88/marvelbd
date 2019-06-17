<html lang="es">
<head>
	<title>Ejemplos Introducción</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../estilos/estilos.css">
	<link rel="stylesheet" href="../estilos/estilos2.css">
	
</head>
<body>

<img alt="full screen background image" src="../img/descarga.jpg" id="imagen" />

	<form>
	<br>
	
	<h1> Introducción</h1>
	
	<div style="text-align: center;">
	
	<table style="HEIGHT:50%;WIDTH:30%; position:relative; margin:20px 200;" border="1" align="center">
	
	<th> <h3>Ejemplos</h3></th>
	
	
	<?php 
	
	for($i=1; $i<=4;$i++){
	
	echo  "<tr>
	
	         <td><a href='ejemplosini/ejemplo".$i.".html' class='boton'> <img  id='iconos' src='../img/html.png' align='center' />   Ejemplo ".$i."</a></td></tr>
	
	";
	};
	
	?>
	

	
	
    </table>
    </div>
	 
	 
	</form>
</body>

</html>