<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if ($_POST['genero'] == 0)
{echo "Hola Sr.  ";
}
else
{
echo "Hola Sra.  ";
}
echo " <b> {$_POST['apellido']}</b>, un gusto saludarte";
?>


<br>
	<form action="saludo2.php" method="post">
Indica tu género: 
<input type="radio" name="genero" value="0">Sr.<br>
<input type="radio" name="genero" value="1">Sra.<br>
Escribe tu apellido:<br>
<input type="text" name="apellido"><br>
<input type="submit"><br>
</form>


</body>
</html>