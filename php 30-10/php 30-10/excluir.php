<?php
$id = $_GET['id'];
$nomeproduto = $_GET['nomeproduto'];

$con = mysqli_connect("localhost","root","","comercio");
$consulta ="delete from produto where id='$id';";
//$resultado = mysqli_query($con,$consulta);
//header('Location: editar.php');

echo "<input type='text' value='$id'>";  
echo "<br>";
echo "<input type='text' value='$nomeproduto'>";  
echo "<input type='submit' value='Enviar'>";  
?>