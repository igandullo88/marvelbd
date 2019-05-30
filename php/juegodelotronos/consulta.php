<?php
								

		$nombre=$_POST['nombre'];
		$email=$_POST['email'];
		$pers=$_POST['personaje'];
		$apuesta=$_POST['apuesta'];
		
		$user="root";
		$pass= "";
		$host="localhost";
		$db ="porra_juego_de_tronos";
		$conexion= new PDO("mysql:localhost= $host;dbname=$db;charset=utf8", $user , $pass);
		
		$sql= "insert into apuesta ( nombreJugador, emailJugador, nombrePersonaje,cantidadApostada) 
		values(:nombreJugador, :emailJugador, :nombrePersonaje,:cantidadApostada)";
		$statament= $conexion->prepare($sql);
		
		$statament->bindParam(':nombreJugador',$nombre);
		$statament->bindParam(':emailJugador',$email);
		$statament->bindParam(':nombrePersonaje',$pers);
		$statament->bindParam(':cantidadApostada',$apuesta);
		
		if(!$statament){
		
		echo "error al crear el registro";
		
		}else{
		
			$statament->execute();
			
			echo "Registro ejecutado correctamente".'<br>';
			echo "<a href='ej3.php'> Volver a apostar </a>";
		}
		
		
 ?>