<html>
<head>
<title>TABLA</title>
</head>
<body>
<?php
function presentaDatos($tot,$nombres, $p1, $p2,$p3)
{
	echo "<table border=1>";
	echo "<tr bgcolor=blue>";
	echo "<td>NOMBRE</td> <td>PARCIAL1</td><td>PARCIAL2</td><td>PARCIAL3</td><td>PROMEDIO</td>";
	echo "</tr>";

	for ($i=0; $i<$tot; $i++)
	{
		$prom[$i]=($p1[$i]+$p2[$i]+$p3[$i]) /3;
		if ($i % 2 == 0)
			echo "<tr bgcolor=#bdc3d6>";
		else
			echo "<tr>";
		echo "<td >", $nombres[$i], "</td>";		
		echo "<td >",$p1[$i], "</td>";		
		echo "<td >",$p2[$i], "</td>";		
		echo "<td >",$p3[$i], "</td>";	
		echo "<td >",$prom[$i], "</td>";	

		echo "</tr>";
	}
	echo "</table>";
}

function redondeo($tot,$p)
{
	for ($i=0; $i<$tot; $i++)
	{
		if ($p[$i]>=700)
		{
			$dec=$p[$i]%100;
			if($dec>75)$dec=100;
			else	if($dec>25 && $dec<=75)$dec=50;
				else if($dec<25)$dec=0;
			$p[$i]=($p[$i]-($p[$i]%100)+$dec)/100;
		}
		else{
			$dec=$p[$i]%100;
			if($dec>=50 && $dec<=99)$dec=50;
			if($dec>=0 && $dec<=49)$dec=0;
			$p[$i]=($p[$i]-($p[$i]%100)+$dec)/100;		
		}
	}
	return $p;
}
function leerDatos($nomArch,&$nombres,&$p1,&$p2,&$p3) 
		{ 
			
			$arch=fopen($nomArch,"r");
			$i=0;
			while(!feof($arch) && fscanf($arch,"%[^\t]%d\t%d\t%d\n",$nombres[$i],$p1[$i],$p2[$i],$p3[$i])==4)				
					 
				{
					$i++;	
				}
			fclose($arch);	
			return $i;
		} 
		


$nomArch="calificaciones.txt";


$tot=leerDatos($nomArch,$nombres,$p1,$p2,$p3);

$p1=redondeo($tot,$p1);
$p2=redondeo($tot,$p2);
$p3=redondeo($tot,$p3);


presentaDatos($tot,$nombres,$p1,$p2,$p3);







	

	
?>
</body>
</html>