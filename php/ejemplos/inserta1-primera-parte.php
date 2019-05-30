<?php
$nom = $_POST['nombre'];
$ape = $_POST['apellidos'];

$db = 'mysql:host=localhost;dbname=prueba;
charset=utf8';
$user = 'root';
$pass = '';

$conn = new PDO($db,$user,$pass);
$sql = "INSERT INTO contactos VALUES (:n,:a)";
$consulta = $conn->prepare($sql);
