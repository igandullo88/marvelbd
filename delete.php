<head>
	<title>Recuperar usuario o contraseña</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilos.css">
	<link rel="stylesheet" href="estilos/estilos2.css">
     <link rel="stylesheet" href="estilos/estilos3.css">
<meta charset="UTF-8">

 
	
</head>

<?php
session_start();
$_SESSION['usuario'];

?>



<body>

<img alt="full screen background image" src="img/descarga.jpg" id="imagen" />
	
	<form id="form" action="usuariodelete.php" method="post">
	
	<p style="font-size:30px;margin:-10px 0;position:relative; top: 30px;" align="center"><strong> ¿Cual es el motivo por el que desea eliminar su cuenta? </strong></p>
	  
	  <span class="p">
	  <p >No me interesa la asignatura</p><br><br>
	  <p >Ya domino estos conocimientos</p><br><br>
	  <p >Me duelen los ojos al ver la página</p></span>
	  
	     <span class="check"> <label><input type="checkbox" name="noa"> </label>

        <label><input type="checkbox" name="nob" > </label>

        <label><input type="checkbox" name="noc"> </label></span>
		
		<br>
		<br>
		  <p class="p1" >Otros motivos</p></span>
		<textarea class="area" name="comentarios" rows="10" cols="40">Escribe aquí</textarea>

   



  
	
	
	 
	 <br>
	 
        <span id="boton">     <a  class="boton" href="pagina1.php" align="left"> cancelar</a>
	            <input class="boton"  type="submit" align="right" value="Eliminar cuenta"> </a>
	  </span>
	</form>
	
</body>