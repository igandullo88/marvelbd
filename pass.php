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


$conexion=mysqli_connect("localhost","root","","trabajobd");
		$consulta="select * from usuario where email='$email'  ";
		$resultado=mysqli_query($conexion,$consulta);
		$filas=mysqli_num_rows($resultado);
		
		
		
if(	$filas>0){
	
	$cuerpo= '';
	  while($fila= mysqli_fetch_array($resultado)){
						$cuerpo.= "<html>
						<head>
							<meta charset='UTF-8'>
	                         
						</head>
						<body>
						 
						<form>
						<h2> Recuperar contraseña</h2>
						
						 <p>Hola "."$fila[nombre] " ."$fila[apellidos]"." su contraseña es "."<h1><span style='color:blue'>"."$fila[clave]"."</span></h1></p>
						 <p>Puede acceder a su cuenta con esta contraseña en el siguiente enlace http://localhost/trabajobd/Login.html</p>
						 <p>Una vez acceda a su cuenta puede cambiarla en la sesión cambiar contraseña que se encuentra en la pestaña de configuración</p>
						 </form>
						 </body>
						 </html>";
						
			 };
	
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$cabeceras .= 'From: Jardobino<tecnico@marvelbd.com>';

	
	if(mail($email,"Recuperar contraseña",$cuerpo,$cabeceras)){
		
	 
		    	echo "<form>
						<h2>
							 <p><div style='text-align:justify'> Se enviará un email con su contraseña al correo electrónico: <span style='color:black'>$email</span> 
							 en un plazo de 24 horas.</p>
									 
							 </div>
							 <br>
							 <br>
							    <div style='text-align:left'> 
								Sino recibe el email en ese periodo puede contactar con el servicio técnico en el siguiente email: 
								<span style='color:black'>tecnico@marvelbd.com</span> 
								</div>
						</h2>
		             </form>";
		
		}	
		else{
			echo "Error al enviar email";
		}
	
	
}else{
	echo "<form>
			<h2>
				 <div style='text-align:justify'> El email introducido no es correcto.
						<p>Sino puede obtener su contraseña puede contactar con el servicio técnico en el siguiente email: 
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