
<?php
include_once ('db/utilidades_sql.php');

$result = get_eventos();

while ($datos_eventos=$result->fetch_assoc()) {
	

?>

<html>
<head>
<meta charset="utf-8">
<body>

<table border="1">
	
		<thead>
				<tr>
					<th rowspan="3">
						<img class="PREVIEW"  src="<?php echo $datos_eventos['uploadedpreview']?>"/>
					</th>

					<th colspan="4">
					<strong>Informacion de Eventos Navideños</strong><br>
							Fechas del 7 al 31 Te Esperamos
						
					</th>

					</tr>

					<th>Nombre Evento </th>
					<th>descripcion </th>
					<th>valor evento </th>
					<th>fecha del evento </th>
					</tr>
											
					<th><?php echo $datos_eventos['nombre']?> </th>
					
					<th> <?php echo $datos_eventos['descripcion']?> </th>
					<td> <?php echo $datos_eventos['costo_evento']?> </td>
					<td> <?php echo $datos_eventos['fecha_entrada']?> </td>
	
				</tr>
		</thead>
</table>
</body>
</head>
</html>
<?php } ?>


