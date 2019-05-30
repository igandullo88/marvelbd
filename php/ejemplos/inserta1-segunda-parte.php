$consulta->bindParam(':n',$nom,PDO::PARAM_STR);
$consulta->bindParam(':a',$ape,PDO::PARAM_STR);

$consulta->execute();

$conn = null;
echo "<strong> Dato insertado</strong>&nbsp;";


