<html>
<head><title>BAJA DE CLIENTES</title>
</head>
<body>
<h1>Favor de llenar datos</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
RFC:		<input type="text" name="rfc">  <br>
<input type="submit" name="enviar">
</form>
<?php

if(isset($_POST['rfc'])) 
{		
	echo "{$_POST['rfc']}<br>";	
	$conexion = mysqli_connect("localhost","root","") or  die("Error en conexion");
	if($conexion)
	{	
		mysqli_select_db($conexion,"e_facturas") or  die("error en bd");	
		$query= "DELETE FROM clientes WHERE RFC = '$_POST[rfc]';";
		//echo "La consulta generada es:<br>" .$query;
		if(mysqli_query($conexion,$query)) echo "<br> dato eliminado<br>";
		mysqli_close($conexion);
	}
 }
else{
      if(isset($_POST['enviar'])){	 
      	if(isset($_POST['rfc'])==false || $_POST['rfc']=="")		
	echo "Falta definir RFC<br>";	       	
       }
}
?>
</body>
</html>	
