<?php

session_start();

$usuario=$_SESSION['usuario'];


$conexion=mysqli_connect("localhost","root","","trabajobd");
		  mysqli_set_charset($conexion, "utf8");
		  
$consulta="delete from usuario where usuario='$usuario'";
$consulta2="delete from datoscomplementarios where usuario='$usuario'";



if(!mysqli_query($conexion,$consulta)){
			
			echo "error al borrar usuario";
			
			}else{
				
				mysqli_query($conexion,$consulta);
				mysqli_query($conexion,$consulta2);
				session_destroy();
			
				        echo "<script>";
						echo "alert('Usuario eliminado correctamente');";  
						echo "window.location = 'Login.html';";
						echo "</script>"; 
				
				
			}




?>