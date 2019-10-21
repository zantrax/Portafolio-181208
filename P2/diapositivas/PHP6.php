<html>
	<head><title>Array con PHP</title></head>
<body>
<?php

$dia = array("domingo","lunes","martes","miercoles",
"jueves","viernes","sábado");
$dia_numero =date("w");
echo "Hoy es $dia[$dia_numero]";




?>
</body>
</html>
