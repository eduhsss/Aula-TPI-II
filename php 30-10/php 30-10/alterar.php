<?php 
$id=$_GET['id'];
$nomeproduto=$_GET['nomeproduto'];
?>

<html>
<form name='f' method='post' action='up.php'>
<?php
echo "<input type='text' name='id' value='$id'><br>";
echo "<input type='text' name='nomeproduto' value='$nomeproduto'><br>";
?>
<input type="submit" name="btn" value="Enviar">
</form>
</html>




