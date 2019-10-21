<html>
	<head><title>Array con PHP</title></head>
<body>
<?php

$dia = array("domingo","lunes","martes","miercoles",
"jueves","viernes","sábado");

$mes1 = array("Ene","Feb","Mar","abril",
"May","Junio","Julio","Ago","Sep","Oct","Nov","Diciembre");

$dia_numero =date("w");//dia de la semana
$dia2_numero =date("j");//dia
$mes1_mes =date("m")-1; //mes
echo "Hoy es $dia[$dia_numero] $dia2_numero de $mes1[$mes1_mes] ";




?>
</body>
</html>
