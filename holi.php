<html>
<body>
<from action="holi.php" method="post">
<input type="text" name="persona">Indica el nombre de la persona que vas agregar :D
<input type="submit" value="Agregar :D">
</form>


<?php

$persona = $_POST['persona'];

if (isset($persona)){
  echo "Se ha agregado a: ".$persona." Al repositorio";
}else{echo "Ha ocurrido un error xD";}


?>

</body>
</html>
