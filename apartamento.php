
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
	Include_once('header.php');
	Include_once('php/menu.php');
?>



			<div id="cssapartamento">
				<form action="php/reg_apar.php" method="post">
					
					<table align="center">
					
						<tr class="formulario_apartamento">
						
							<td>interior</td>
							<h1 class="titulo">Ingreso de Apartamentos</h1>
								<td><select  name="interior">
										<?php  $result=get_interior();
							   	while ($datos_interior=$result->fetch_assoc()){
							?>	  
						  <option value=" <?php echo $datos_interior['_id_interior']; ?> "><?php echo $datos_interior['nombre']; ?> </option>;
                           <?php }
                          ?>   	    </select>
							 	</td>
						</tr>


						<tr class="formulario_apartamento2">


							<td>propietario</td>
							<td><select  name="formulario_pro">
						<?php  $result=get_formulario_pro();
							   while ($datos_formulario_pro=$result->fetch_assoc()){

						?>	  

						   <option value=" <?php echo $datos_formulario_pro
						   ['_id_formulario_pro']; ?> "><?php echo $datos_formulario_pro
						   ['nombre']; ?> </option>;
                           <?php }
                          ?>   </select></td>
						</tr>


						<tr class="formulario_apartamento">
							<td>nombre</td>
							<td><input type="text"  name="nombre"></td>
							
						</tr>

						<tr class="formulario_apartamento2">
							<td>descripcion</td>
							<td><input type="text"  name="descripcion"></td>

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

