<?php

error_reporting(0);

session_start();
$usuario = $_SESSION['usuario'];


$pass=$_POST['pass'];
$newpass=$_POST['newpass'];
$renewpass=$_POST['renewpass'];




$link= mysql_connect("localhost","root","");
		if($link){
			mysql_select_db("trabajobd", $link);
		};
		
		$tabla= mysql_query("select clave from usuario where usuario='$usuario' ");;
		
		while($fila= mysql_fetch_array($tabla)){
			$antipass= $fila[clave];
		 
		};
			



if($antipass==$pass){

		if($newpass==$renewpass){

		mysql_query("UPDATE usuario SET clave = '$newpass' WHERE usuario = '$usuario'");
		
		echo "<script>";
		echo "alert('Su contraseña ha sido modificada');";  
		echo "window.location = 'Login.html';";
		echo "</script>";
		 
		}else{

								echo "<script>";
								echo "alert('Las contraseñas no coinciden');";  
								echo "window.location = 'recuperarcontrase.php';";
								echo "</script>";

		};
}else{
	echo "<script>";
	echo "alert('La contraseña antigua es incorrecta');";  
	echo "window.location = 'recuperarcontrase.php';";
	echo "</script>"; 

};


?>