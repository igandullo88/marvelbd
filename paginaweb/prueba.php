<?php

$usuario=$_POST['name'];



$link= mysql_connect("localhost","root","");
		if($link){
			mysql_select_db("trabajobd", $link);
		};
		
		$tabla= mysql_query("select usuario from usuario where usuario='$usuario' ");;
		
		$resul=mysql_num_rows($tabla);
			
		 if($resul>0){
			echo "El usuario ya existe"; 
		 }
		 

?>