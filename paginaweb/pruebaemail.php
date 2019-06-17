<?php

$email=$_POST['campo'];



$link= mysql_connect("localhost","root","");
		if($link){
			mysql_select_db("trabajobd", $link);
		};
		
		$tabla= mysql_query("select clave from usuario where email='$email' ");;
		
		$resul=mysql_num_rows($tabla);
			
		 if($resul>0){
			echo "El email ya esta registrado"; 
		 }
		 

?>