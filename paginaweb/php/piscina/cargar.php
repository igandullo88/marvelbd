<?php

	function cargar(){
		
		$consultas = new Consultas();
		$filas = $consultas->consulta();
		
		echo "<table border=1 cellpadding=10 cellspacing=1>
		         <tr>
				    <th> DNI</th>
					<th> Nombre</th>
					<th> Apellido</th>
					<th> Ciudad</th>
				 </tr>";
	    
		foreach($filas as $fila){
			
			echo "<tr>";
			echo "<td>".$fila['dni']."</td>";
		    echo "<td>".$fila['nombre']."</td>";
			echo "<td>".$fila['apellido']."</td>";
		    echo "<td>".$fila['ciudad']."</td>";
			echo "</tr>";
		}
		
		
		echo "</table>";
		
	}

?>