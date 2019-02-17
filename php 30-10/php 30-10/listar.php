<?php
$con = mysqli_connect("localhost","root","","comercio");
$consulta ="select * from produto";
$resultado = mysqli_query($con,$consulta);

echo "<ol>";

while ($var = mysqli_fetch_assoc($resultado))
      {  
      	echo "<li>";
  echo "<a href='editar.php?id=$var[id]&nomeproduto=$var[nomeproduto]'>";
  echo "$var[nomeproduto]";
  echo "</a>";
  		echo "</li>";	  
	   }

echo "</ol>";

?>