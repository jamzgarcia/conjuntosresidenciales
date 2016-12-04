
<?php

include_once ('../db/utilidades_sql.php');

if ($_POST) { 


	$_id_interior=isset($_POST['interior'] ) ? 
	$_POST ['interior']:'';

	$_id_formulario_pro=isset($_POST['formulario_pro'] ) ? 
	$_POST ['formulario_pro']:'';


	$nombre=isset($_POST['nombre'] ) ? 
	$_POST ['nombre']:'';


	$descripcion=isset($_POST['descripcion'] ) ? 
	$_POST ['descripcion']:'';


	$result = set_apartamento($_id_interior,$_id_formulario_pro,$nombre,$descripcion);

	ob_start();

	header("refresh:3;url=../apartamento.php");




	

}

?>

