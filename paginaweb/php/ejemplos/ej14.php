<!DOCTYPE html>
<html> <body> 
<?php
$dia=date("j");
$ds=date("w");
$dias_cast = array("domingo","lunes",
"martes","mi&eacute;rcoles", "jueves", 
"viernes", "s&aacute;bado");
echo "Hoy es " . $dias_cast[$ds] ." ". $dia;
?> 
</body></html> 
