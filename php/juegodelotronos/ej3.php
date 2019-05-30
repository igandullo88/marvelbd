<!DOCTYPE html>
<html><head>
<title>Formulario</title>

<script src="jquery-3.4.0.min.js" type="text/javascript"></script>	

<meta charset="UTF-8">

<script>



$(document).ready(function(){

	 
	 
     $('#validar').click(function(){
	 
		var nombre = $('#nombre').val();
		var email = $('#email').val();
		var remail = $('#remail').val();
		var apuesta = $('#apuesta').val();
		var pers= $('#pers').val();
		
		
		
		if( nombre == 0 |  email == 0 | remail == 0 | apuesta == 0){

				alert("Debe introducir todos los campos");
				

		}else{
		
		
		
			if(email==remail){
					if(apuesta>1){
					
                    $('#form').attr('action', 'consulta.php');
					
                    }else{
					alert("La cantidad apostada debe ser mayor que 1");
					 
				    };
			}else{
				alert("introduzca emails identicos");
				 
			}
		
		}

		 
		 
		 
     });
});



</script>







</head>

<body>
 
 <form id="form" method="post" >
	<table border=1 cellpadding=10 cellspacing=1>

            <tr>
				<td> Usuario:</td>
				<td><input id="nombre" type="text" name="nombre" size= "9"></td>
			</tr>
			
			<tr>
				<td> Email del usuario:</td>
				<td><input id="email" type="email" name="email" size= "9"></td>
			</tr>

			<tr>
			
			<tr>
				<td> Repetir email del usuario:</td>
				<td><input id="remail" type="email" name="remail" size= "9"></td>
			</tr>
			
			<tr>
				<td> Cantidad apostada:</td>
				<td><input id="apuesta" type="number" name="apuesta" min="0" value="0"></td>
			</tr>


			
			
			
			<tr>
						
				<td> Personaje por el que apuesta:</td>
						
						
						
				<td>
				       <select name='personaje'>
								
										<?php
										$user="root";
										$pass= "";
										$host="localhost";
										$db ="porra_juego_de_tronos";
										$conexion= new PDO("mysql:localhost= $host;dbname=$db;charset=utf8", $user , $pass);
										$sql = "SELECT * FROM Personajes";
										foreach ($conexion->query($sql) as $fila){
											echo "<option>",$fila['NombrePersonaje'],"</option>";  
										}
										?>

    
						</select>
						
				</td>
								
			</tr>
			
			
			<tr>	
				<td><td><input id="validar" type="submit" value="Apostar"></td></td>
			</tr>


			
    </table>
	

	
 </form>


</body></html>