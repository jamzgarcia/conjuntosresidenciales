
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
	Include_once('php/header.inc');
	Include_once('php/menu.php');
?>

<div>

				<form action="reg_pagos.php" method="post">
					
					<table align="center">


					<tr class="formulario1">
					<h1 class="titulo">Registrar Pago</h1>


							<td>apartamento</td>
							<td><select  name="apartamento">
						<?php  $result=get_apartamento();
							   while ($datos_apartamento=$result->fetch_assoc()){

						?>	  

						   <option value=" <?php echo $datos_apartamento['_id_apartamento']; ?> "><?php echo $datos_apartamento['nombre']; ?> </option>;
                           <?php }
                          ?>   </select></td>
						</tr>

					    <tr class="jhon">
						<td>Nombre</td>
						<td><input type="text"  name="nombre"></td>
						</tr>

						<tr class="jhon2">
						<td>Apellido</td>
						<td><input type="text"  name="apellido"></td>
						</tr>


						<tr class="jhon">
							<td>Usuario</td>
							<td><select  name="usuario">
                             <option value="propietario"> propietario</option>
                             <option value="arrendatario"> arrendatario</option></td>
						</tr>
						

						<tr class="jhon2">
     						<td>Concepto</td>
							<td><select  name="concepto">
                             <option value="administracion"> administracion </option>
                             <option value="salon comunal"> salon comunal </option>
                             <option value="Parquedero"> Parquedero </option>
                             <option value="local"> local </option>
                             <option value="otros"> otros </option>

							 </td>

						<tr class="jhon2">
						<td>Fecha Cobro</td>
						<td><input type="date"  name="fecha_cobro"></td>
						</tr>

						<tr class="jhon2">
						<td>Total_pagar</td>
						<td><input type="text"  name="total_pagar"></td>
						</tr>


						<tr>
							<td><button type="submit">Registrar</button></td>
						</tr>
           
                        



				</table>
				</form>
</div>
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
		include_once('php/footer.inc');
?>
</body>
</html>