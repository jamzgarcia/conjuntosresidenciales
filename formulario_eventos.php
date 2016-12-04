<?php

include_once ('php/utilidades.php');
include_once ('db/utilidades_sql.php');

if(isset($_SESSION['email'])){



	if ($_SESSION['rol']=='cliente'){

		header('location:index.php');
		die();
	}
}


if($_FILES){
	$directorio_preview='img/preview/';


	$ruta1=$directorio_preview.basename ($_FILES['uploadedpreview']['name']);
	move_uploaded_file($_FILES['uploadedpreview']['tmp_name'], $ruta1);
	

		if($_POST){


		$nombre=isset($_POST ['nombre'])?
			 $_POST['nombre']:'' ;

		$uploadedpreview=$ruta1;	 

		$descripcion=isset($_POST ['descripcion'])?
			 $_POST['descripcion']:'' ;

		$costo_evento=isset($_POST ['costo_evento'])?
			 $_POST['costo_evento']:'' ;

		$fecha_entrada=isset($_POST ['fecha_entrada'])?
			 $_POST['fecha_entrada']:'' ;

 
 			$result = set_eventos($nombre,$uploadedpreview, $descripcion,  $costo_evento, $fecha_entrada);
				
			
}
}

?>
	<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('header.php');

				?>

				<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('php/menu.php');
					
				?>

		<div id="cssfor_eventos">															
			
			<section class="clear">

				<form enctype="multipart/form-data"  method="POST">
					<table>
						<tr>
							<td>Nombre</td>
							<td><input type="text" name="nombre"></td>
						</tr>
						<tr>
							<td>Examinar(imagen)</td>
							<td>
							<input name="uploadedpreview" type="file" />
						
						</td>
						</tr>
						<tr>
							<td>Descricpcion</td>
							<td><input type="text" name="descripcion"></td>
						</tr>

						<tr>
							<td>Costo</td>
							<td><input type="number" name="costo_evento"></td>
						</tr>

						<tr>
							<td>fecha de entrada</td>
							<td><input type="text" name="fecha_entrada" value="<?php echo date('y/m/d') ?>"></td>
						</tr>


						<tr>
							<td><button type="submit">Enviar</button></td>
						</tr>
					
						
					</table>
				</form>
				
			</section>
			</div>
		
		<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('php/footer.inc');
				?>
