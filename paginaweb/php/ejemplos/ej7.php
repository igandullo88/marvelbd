<!DOCTYPE html>
<html> <body>
<?php
$x = 5;
$y = 10;
function Prueba() {
    global $x, $y;
    $y = $x + $y;
}
Prueba();
echo "<p> El valor obtenido es $y</p>";
?> 
</body></html> 
