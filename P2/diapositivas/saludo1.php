<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<h1>Rellena los campos</h1>
<form action="saludo1.php" method="post">

Nombre: 
<input type="text" name="nombre">
<input type="submit">
</form>

<?php
echo "Hola <b> {$_POST['nombre']}</b>, 
un gusto saludarte";
?>

</body>
</html>