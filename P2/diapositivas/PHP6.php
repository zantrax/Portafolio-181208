<html>
	<head><title>Array con PHP</title></head>
<body>
<?php

$dia = array("domingo","lunes","martes","miercoles",
"jueves","viernes","s�bado");
$dia_numero =date("w");
echo "Hoy es $dia[$dia_numero]";




?>
</body>
</html>
