<?php
$cat = $_GET['categoria'];
echo ($cat); 
echo "<br>";

$con = mysqli_connect("localhost","root","","comercio");
$consulta ="select * from produto where categoria='$cat'";
$resultado = mysqli_query($con,$consulta);

while ($var = mysqli_fetch_assoc($resultado))
      {  
  echo "Produto: $var[nomeproduto]";
  echo "<br>";
  echo "Valor: $var[preco]";
  echo "<br>";		  
	   }




?>