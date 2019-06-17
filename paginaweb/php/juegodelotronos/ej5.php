<html>
<head>
<title>
Ejercicio 5
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
$casas= array();

$sql1 = "SELECT * FROM Personajes"; 

foreach ($conn->query($sql1) as $fila1){
$casas[$fila1['NombrePersonaje']]=$fila1['NombreCasa'];
}

$sql = "SELECT * FROM Apuesta"; 

 
foreach ($conn->query($sql) as $fila){
	
	if(isset($apuestas[$casas[$fila['nombrePersonaje']]])) {
		$apuestas[$casas[$fila['nombrePersonaje']]] += $fila['cantidadApostada'];
	}else {
		$apuestas[$casas[$fila['nombrePersonaje']]] = $fila['cantidadApostada'];
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