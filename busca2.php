<?php
 error_reporting(0);
  ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <script src="jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
<p>
<?php
require 'conexion.php';

    $salida = "";

    if (isset($_POST['consulta'])) {
    	$q = $link->real_escape_string($_POST['consulta']);
$query = "SELECT * FROM datos a INNER JOIN registro b on a . id = b . 2idd WHERE nombre LIKE '%".$q."%' OR paterno LIKE '%".$q."%' OR materno LIKE '%".$q."%' OR domicilio LIKE '%".$q."%' OR numero LIKE '%".$q."%' OR costo LIKE '%".$q."%' ORDER By 2id DESC";
	}

	if ($q == null || $q='') {

	}else {
	
$a = 'href="Inicio.php"';
    $resultado = $link -> query($query);
 
    if ($resultado->num_rows > 0) { 
    	$salida.="<table border=0 class='tabla_datos'>
    			<thead>
    				<tr>
                        <th>Cobrado</th>
    					<th>Nombre</th>
    					<th>Paterno</th>
    					<th>Materno</th>
    					<th>Domicilio</th>
    					<th>Servicio</th>
    					<th>Costo</th>
    					<th>Cobrado</th>
    					<th>Cortes</th>
                        <th>Ver recibo</th>

    				</tr>
    			</thead>
    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {

    		$salida.="<tr>
                        <td>".$fila['ida']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['paterno']."</td>
    					<td>".$fila['materno']."</td>
    					<td>".$fila['domicilio']."</td>
    					<td>"."Pospago"."</td>
    					<td>".$fila['costo']."</td>
    					<td>".$fila['cost']."</td>
    					<td>".$fila['periodo']."</td>
	 <td>".'<form name ="formulario" action="imprimir2.php" method="post" target="_blank"> 
	 <input name="dani" id="dani" type="tex" readonly= "readonly" value= '.$fila["id"].'> 
	 <input name="dan" id="dan" type="tex" readonly= "readonly" value= '.$fila["cost"].'> 
	 <input name="aaaa" id="aaaa" type="tex" readonly= "readonly" value= '.$fila["periodo"].'> 
	 <input type="Submit" name="envia" value="Ver"></form>'."</td>

    				</tr>";

		}
		
     	$salida.="</tbody></table>";
    }else{
    	$salida.="No se encontro el cliente";
	}

    echo $salida;
    $link->close();

	}

?>

</p>
</body>
</html>