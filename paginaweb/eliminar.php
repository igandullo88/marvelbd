<head>
	<title>Verificar eliminación de cuenta</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilos.css">
     <link rel="stylesheet" href="estilos/estilos2.css">
<meta charset="UTF-8">

 
	
</head>

<?php
session_start();
$_SESSION['usuario'];
?>

<body>

<img alt="full screen background image" src="img/descarga.jpg" id="imagen" />
	
	<form id="form" method="post">
	
	<p style="font-size:22px;" align="center"> ¿Está seguro que desea eliminar su cuenta?
	 
	 <br>
                <a  class="boton" href="pagina1.php" align="left"> cancelar</a>
	            <a  class="boton" href="delete.php" align="right"> Eliminar cuenta</a>
	  </p>
	</form>
	
</body>