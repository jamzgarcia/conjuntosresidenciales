
<?php
include_once ('../db/utilidades_sql.php');

$result = get_pagos();

while ($datos=$result->fetch_assoc()) {
	

?>
<div class="formulariopagos">
<table>
<h1> Generar Pagos</h1>
<th> Nombre Propietario </th><th> Apellido </th> <th> apartamento</th> <th> Costo Administracion </th>
<br>
<tr>
	
		<td><?php echo $datos['propietario']?> </td>
		<td> <?php echo $datos['apellido']?> </td>
		<td> <?php echo $datos['nombre']?> </td>
		<td> <?php echo $datos['valor_administracion']?> </td>
	
</tr>

</table>
</div>
<?php } 

?>


