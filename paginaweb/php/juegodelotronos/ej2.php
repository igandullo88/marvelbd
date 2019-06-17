
<?php
				$user="root";
				$pass= "";
				$host="localhost";
				$db ="porra_juego_de_tronos";
				$conexion= new PDO("mysql:localhost= $host;dbname=$db;charset=utf8", $user , $pass);
				
				
				
				
			        $casas= array();

					$sql1 = "SELECT * FROM casas"; 
					$contador = 0;
					foreach ($conexion->query($sql1) as $fila1){
					  $casas[$contador]=$fila1['NombreCasa'];
					  $contador++;
					};
					
				

				for($i=0; $i<$contador ; $i++){
					
				$sql[$i] ="SELECT NombrePersonaje FROM personajes WHERE NombreCasa='$casas[$i]'";

                $statament[$i]= $conexion->prepare($sql[$i]);
				$statament[$i]->execute();

				   echo "<ul>";
				   echo "<li>"."Casa ".$casas[$i]."</li>";
				   echo "<ul>";
				   
						while($fila=$statament[$i]->fetch()){
						
						echo "<li>"."$fila[NombrePersonaje]"."</li>";
				  
						}  
				   echo "</ul>";
				   echo "</ul>";

				}
				
				
			
				             

?>
