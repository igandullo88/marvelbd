<html>
<head>
<title>
Ejercicio 4
</title>
</head>
<body>
<ul>

<?php
		$user="root";
		$pass= "";
		$host="localhost";
		$db ="porra_juego_de_tronos";
		$conn= new PDO("mysql:localhost= $host;dbname=$db;charset=utf8", $user , $pass); 


$apuestas= array(); 

$sql = "SELECT * FROM Apuesta"; 
 
foreach ($conn->query($sql) as $fila) {
	
	if(isset($apuestas[$fila['nombrePersonaje']])) {
		$apuestas[$fila['nombrePersonaje']] += $fila['cantidadApostada'];
	}else {
		$apuestas[$fila['nombrePersonaje']] = $fila['cantidadApostada'];
	}
	
}

arsort($apuestas);

foreach($apuestas as $clave => $valor ){
	echo "<li>",$clave," ", $valor,"</li>";
}


$conn = null;
?>


</ul>
</body>
</html>