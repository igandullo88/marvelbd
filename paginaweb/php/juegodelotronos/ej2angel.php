<html>
<head>
<title>
Ejercicio 2
</title>
</head>
<body>
<ul>
<?php
$db= 'mysql=localhost;
dbname=porra_juego_tronos; charset=utf8'; 
$user = 'root';
$pass = ' ';   
$conn = new PDO($db,$user,$pass);
$sql = "SELECT * FROM Casas";  
foreach ($conn->query($sql) as $fila) {
    echo "<li>", $fila['NombreCasa'],"</li>";
    $sql1 = "SELECT * FROM Personajes WHERE NombreCasa='" . $fila['NombreCasa'] . "'"; 
    echo "<ul>";
foreach ($conn->query($sql1) as $fila1) {
    echo "<li>", $fila1['NombrePersonaje'],"</li>";
}
    echo "<ul>";
}
$conn = null;
?>
</ul>
</body>
</html>