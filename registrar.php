<?php
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$email=$_POST['email'];
$remail=$_POST['remail'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$nacimiento=$_POST['nacimiento'];
$seguridad=$_POST['seguridad'];


$pais=$_POST['pais'];
$telefono=$_POST['telefono'];
$direccion=$_POST['domicilio'];
$municipio=$_POST['localidad'];
$provincia=$_POST['provincia'];
$cp=$_POST['cp'];
$sexo= $_POST['radio'];
 







if (isset($_POST['check']) && $_POST['check'] == '1'){
  if($pass==$repass){


    if($email==$remail){

		$conexion=mysqli_connect("localhost","root","","trabajobd");
		mysqli_set_charset($conexion, "utf8");
		$consulta="select * from usuario where usuario='$usuario'";
		$resultado=mysqli_query($conexion,$consulta);
		$filas=mysqli_num_rows($resultado);

		$consulta2="select * from usuario where email='$email'";
		$resultado2=mysqli_query($conexion,$consulta2);
		$filas2=mysqli_num_rows($resultado2);
		

		$inserta= "insert into usuario values('$usuario','$pass','$email','$apellidos','$nombre','$nacimiento','$seguridad')";
		$inserta2= "insert into datoscomplementarios values('$usuario','$pais','$sexo','$telefono','$direccion','$municipio','$provincia','$cp')";
		
		if($filas>0){
				
			echo "<script>";
			echo "alert('El usuario ya existe')</script>";	
	
			echo "<html><head></head>
			<body onload=\"javascript:history.back()\">
			</body></html>";
				
			
		}else{
			
			if($filas2>0){
				
			echo "<script>";
			echo "alert('El email ya esta registrado')</script>";	
	
			echo "<html><head></head>
			<body onload=\"javascript:history.back()\">
			</body></html>";
				
			
			}else{
					
				
			
					    mysqli_query($conexion,$inserta);
					    mysqli_query($conexion,$inserta2);
						echo "<script>";
						echo "alert('Usuario registrado correctamente');";  
						echo "window.location = 'Login.html';";
						echo "</script>"; 
						
						
			    };
			
			
		};

	   
	  }else{
		    echo "<script>";
			echo "alert('Las emails tienen que ser iguales')</script>";	
	
			echo "<html><head></head>
			<body onload=\"javascript:history.back()\">
			</body></html>";
	  };
    }else{
			echo "<script> alert('Las contraseñas tienen que coincidir')</script>";	
			echo "<html><head></head>
			<body onload=\"javascript:history.back()\">
			</body></html>";
	
     };
}else{
	echo "<script>";
			echo "alert('Debe leer las condiciones de seguridad y marcar la casilla de leido')</script>";	
			echo "<html><head></head>
			<body onload=\"javascript:history.back()\">
			</body></html>";
			
	
};

 
				
?>