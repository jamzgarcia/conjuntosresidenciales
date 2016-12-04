
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

	$funcion=isset($_POST['funcion'] ) ? 
	$_POST ['funcion']:'';


	$result = set_formulario_res($_id_apartamento,$nombre,$apellido,$identificacion,$celular,$email,$funcion);

	ob_start();

	header("refresh:3;url=../formulario_res.php");




	

}

?>