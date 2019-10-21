<html>
<head>
<title>TABLA</title>
</head>
<body>
<?php
function presentaTabla($nombres,$p1,$p2,$p3)
{
	echo "<table border=1>";
	echo "<tr bgcolor=blue>";
	echo "<td>NOMBRE</td> <td>PARCIAL1</td><td>PARCIAL2</td><td>PARCIAL3</td>";
	echo "</tr>";

	for ($i=0; $i<5; $i++)
	{
		if ($i % 2 == 0)
			echo "<tr bgcolor=#bdc3d6>";
		else
			echo "<tr>";
		echo "<td >", $nombres[$i], "</td>";		
		echo "<td >",$p1[$i], "</td>";		
		echo "<td >",$p2[$i], "</td>";		
		echo "<td >",$p3[$i], "</td>";		
		echo "</tr>";
	}
	echo "</table>";
}

function redondeo($p)
{
	for ($i=0; $i<5; $i++)
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

$nombres= array("Daniel","Luis","Pamela", "Juan","Vanessa");
$p1=array(0,0,0,0,0);
$p1=array(0,0,0,0,0);
$p1=array(0,0,0,0,0);

for ($i=0; $i<5; $i++)
{
	$p1[$i]=rand(100,1000);
	$p2[$i]=rand(100,1000);
	$p3[$i]=rand(100,1000);

}

presentaTabla($nombres,$p1,$p2,$p3);	
$p1=redondeo($p1);
$p2=redondeo($p2);
$p3=redondeo($p3);
presentaTabla($nombres,$p1,$p2,$p3);	
?>
</body>
</html>