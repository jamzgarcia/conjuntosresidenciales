
<?php

include_once ('../db/utilidades_sql.php');

if ($_POST) { 

	$_id_apartamento=isset($_POST['apartamento'] ) ? 
	$_POST ['apartamento']:'';

	$nombre=isset($_POST['nombre'] ) ? 
	$_POST ['nombre']:'';

	$apellido=isset($_POST['apellido'] ) ? 
	$_POST ['apellido']:'';

	$identificacion=isset($_POST['identificacion'] ) ? 
	$_POST ['identificacion']:'';

	$celular=isset($_POST['celular'] ) ? 
	$_POST ['celular']:'';

	$email=isset($_POST['email'] ) ? 
	$_POST ['email']:'';


	$result = set_formulario_vis ($_id_apartamento,$nombre,$apellido,$identificacion,$celular,$email);

	ob_start();

	header("refresh:3;url=formulario_vis.php");




	

}

?>