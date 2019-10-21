<html>
   <head><title>TABLA DE MATERIAS</title>
   <meta http-equiv="content_type" content="text/html; charset=iso-8859-1">
   </head>
   <body>
   	   <form action="carta2.php" method="post">
   <br>
   
         Indica tus materias:<br>
<input type="checkbox" name="materia[]" value="Progra1">Progra1<br>
<input type="checkbox" name="materia[]" value="Progra2">Progra2<br>
<input type="checkbox" name="materia[]" value="Progra3">Progra3<br>
<input type="checkbox" name="materia[]" value="Web1">Web1<br>
<input type="checkbox" name="materia[]" value="Web2">Web2<br>
      
      <input type="submit" name="enviar">
   </form>
   <?php
   $calif=array( array(0,0,0,0),array(0,0,0,0),array(0,0,0,0),array(0,0,0,0),array(0,0,0,0));

    if(isset($_POST['materia'])){
      $materias=$_POST['materia'];
     	echo "<table> 
     			<tr> <th>MATERIA</th>
     			<th>P1</th>
     			<th>P2</th>
     			<th>P3</th>
     			<th>PROM</th>
     			</tr>";

      for($i=0;$i<count($materias);$i++)
      {
      	echo "<tr><td>".$materias[$i]."</td>";
      	$calif[$i][3]=0;
      	for($j=0;$j<3;$j++)
      	{
      		$calif[$i][$j]=rand(1,10);
      		echo "<td>".$calif[$i][$j]."</td>";
      		$calif[$i][3]+=$calif[$i][$j];
      	}
      	$calif[$i][3]/=3;
      	echo "<td>".$calif[$i][$j]."</td></tr>";
      }
      echo "</table>";     
      
    }// isset
   ?>
  </body>
</html>