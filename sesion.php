
<?php
error_reporting(0);
session_start();
$daaa = $_SESSION['usuari'];
$var = $daaa;
$da = $_SESSION['usu'];
if ($var == null || $var='') {
echo "Favor de iniciar sesion";
echo '	 <ul class="menuuu">
	<li><a href="index.php">Ingresar</a></li>
</ul>';

  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    Administrador: <?php echo $daaa?>
</head>  
<body>
    
</body>
</html>