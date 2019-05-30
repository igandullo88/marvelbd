<?php
$db = 'mysql:host=localhost;
dbname=prueba;charset=utf8';
$user = 'root';
$pass = '';
$conn = new PDO($db,$user,$pass);
$sql = "SELECT * FROM contactos";
foreach ($conn->query($sql) as $fila){
    echo "<strong>",$fila['nombre'],
         "</strong>&nbsp;";
    echo "<em>",$fila['apellidos'],
"</em><br>";}
$conn = null;
echo "<br><strong> 
Consulta realizada</strong>&nbsp;"; ?>


