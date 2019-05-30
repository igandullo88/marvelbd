<html lang="es">
<head>
	<title>Formulario de Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilos.css">

<meta charset="UTF-8">
	
	
</head>
<body>
<img alt="full screen background image" src="img/avenger2.jpg" id="imagen" />
<?php

$email=$_POST['email'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$nacimiento=$_POST['nacimiento'];
$seguridad=$_POST['seguridad'];

$conexion=mysqli_connect("localhost","root","","trabajobd");
		$consulta="select * from usuario where nombre='$nombre'  and apellidos='$apellidos' and email='$email' and nacimiento='$nacimiento' and seguridad='$seguridad'";
		$resultado=mysqli_query($conexion,$consulta);
		$filas=mysqli_num_rows($resultado);
		
	if(	$filas>0){
	
	echo "<form><h2> <span style='color:blue'>Hola $nombre $apellidos su usuario es </span>";
	
	 
	while($fila= mysqli_fetch_array($resultado)){
		
			echo "<span style='color:red'>"."$fila[usuario]"."</span></h2>"."<br>";
			 
		};
	
	echo "<a href='Login.html'> Acceder a la web </a></form>";
	
	
}else{
	echo "<form>
			<h2>
				 <div style='text-align:left'> Los datos introducidos no son correctos. 
						Sino puede obtener su usuario puede contactar con el servicio técnico en el siguiente email: 
						<span style='color:black'>tecnico@marvelbd.com</span> 
				 </div>
			</h2> ";
	
	echo "<br> 
	
				<a href='recuperar.php'> Volver a introducir los datos</a>
		</form>";
}
	



?>

</body>


</html>