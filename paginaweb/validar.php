<?php
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","trabajobd");
$consulta="select * from usuario where usuario='$usuario' and clave='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	
	
	header("Location:pagina1.php");
	
}else{
	echo "<script>";
    echo "alert('Error de autentificación');";  
    echo "window.location = 'Login.html';";
    echo "</script>"; 
	
	
};

mysqli_free_result($resultado);
mysqli_close($conexion);


?>