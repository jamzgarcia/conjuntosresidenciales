<?php 

/*
establecer la recuperacion en las constantes para la conexion al motor 
de la base de datos y acceso a la base de datos que se necesita,
la funcion "require" recupera la informacion del archivo que esta establecido en los parametros 
*/

require ('credenciales_db.php');

/*
establecemos la conexion utilizando la clase MySqli estableciendo los datos recuperados anteriormente
*/

$MySqli = new MySqli (DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
mysqli_set_charset($MySqli, 'utf8');

/*

Si la conexion genera un error , lo recomendable es matar el proceso saliendo del archivo

*/

if ($MySqli -> connect_errno) {
	echo "No se pudo establecer la conexion";
	exit;
}

function set_registro ( $email, $contrasena, $fec_na,
$nacionalidad, $region , $ciudad , $rol ) {

	global $MySqli,$result;

	$datos_user = get_user_byid($email);

	

	// "!" Niega datos
	if(!$datos_user){

		$sql = "INSERT INTO cliente (email,fec_na,nacionalidad,region,ciudad,rol) VALUES ('{$email}', '{$fec_na}', '{$nacionalidad}', '{$region}', '{$ciudad}', '{$rol}')";

		$MySqli -> query($sql);
		if ($MySqli)
		{
		// Funcion que genera la consulta
		if(!$rol)
		{
			$rol='cliente';
		}
		$result = set_user($email , $contrasena , $rol );
		}
	}
	else
	{
	echo "<SCRIPT language='javascript'>alert('El usuario ya existe');</SCRIPT>";
	}
	return $result;
}

function set_user ($email , $contrasena , $rol){

	global $MySqli;
	$sql = "INSERT INTO user (email , contrasena , rol) VALUES ('{$email}' , '{$contrasena}' , '{$rol}')";
	$MySqli -> query($sql);
}

function get_user_byid($email)
{
	global $MySqli;
	$sql = "SELECT email , contrasena , rol FROM user WHERE email='{$email}' "; 
	$result = $MySqli -> query($sql);
	return $result->fetch_assoc();
}



function set_formulario_pro ($nombre , $apellido , $identificacion , $celular , $email) {

	global $MySqli;

	$sql = "INSERT INTO formulario_pro (nombre ,apellido , identificacion, celular , email ) VALUES ('{$nombre}' , '{$apellido}', '{$identificacion}' ,'{$celular}' , '{$email}'  ) ";

	return $MySqli -> query($sql);
	

}

function set_bloque ($bloque ,$descripcion ) {

	global $MySqli;

	$sql = "INSERT INTO bloque ( nombre ,descripcion  ) VALUES ('{$bloque}'  ,'{$descripcion}'  ) ";

	
	return $MySqli -> query($sql);
	

}
function get_bloque(){
	
	global $MySqli,$result;
	$sql = "SELECT * FROM bloque";
	echo $sql;
	return $MySqli -> query($sql);

}

function set_interior ($_id_bloque , $nombre , $descripcion ) {

	global $MySqli;

	$sql = "INSERT INTO interior (_id_bloque , nombre ,descripcion  ) VALUES ('{$_id_bloque}' , '{$nombre}' ,'{$descripcion}'  ) ";
	return $MySqli -> query($sql);


	

}

function get_apartamento(){
	
	global $MySqli,$result;
	$sql = "SELECT * FROM apartamento";
	echo $sql;
	return $MySqli -> query($sql);

}

function get_interior(){
	
	global $MySqli,$result;
	$sql = "SELECT * FROM interior";
	echo $sql;
	return $MySqli -> query($sql);

}

function get_formulario_pro(){
	
	global $MySqli,$result;
	$sql = "SELECT * FROM formulario_pro";
	echo $sql;
	return $MySqli -> query($sql);

}

function set_formulario_pagos ($_id_apartamento , $nombre , $apellido , $usuario , $concepto , $fecha_cobro , $total_pagar ) {

	global $MySqli;

	$sql = "INSERT INTO formulario_pagos (_id_apartamento , nombre , apellido , usuario , concepto , fecha_cobro , total_pagar  ) VALUES ('{$_id_apartamento}' , '{$nombre}' , '{$apellido}' , '{$usuario}' , '{$concepto}' , '{$fecha_cobro}' , '{$total_pagar}'  ) ";
	echo $sql;
	return $MySqli -> query($sql);



	

}

function set_apartamento ($_id_interior , $_id_formulario_pro , $nombre , $descripcion  ) {

	global $MySqli;

	$sql = "INSERT INTO apartamento (_id_interior , _id_formulario_pro, nombre, descripcion )
	VALUES ('{$_id_interior}' ,'{$_id_formulario_pro}','{$nombre}','{$descripcion}') ";
	echo $sql;
	return $MySqli -> query($sql);

}

function set_formulario_res ($_id_apartamento , $nombre , $apellido , $identificacion , $celular , $email , $funcion  ) {

	global $MySqli;

	$sql = "INSERT INTO formulario_res (_id_apartamento , nombre , apellido, identificacion, celular , email , funcion )
	VALUES ('{$_id_apartamento}','{$nombre}' ,'{$apellido}','{$identificacion}','{$celular}','{$email}','{$funcion}') ";
	echo $sql;
	return $MySqli -> query($sql);

	

}

function set_formulario_vis ($_id_apartamento , $nombre , $apellido , $identificacion , $celular , $email  ) {

	global $MySqli;

	$sql = "INSERT INTO formulario_vis (_id_apartamento , nombre ,apellido , identificacion , celular , email  ) VALUES ('{$_id_apartamento}' , '{$nombre}' ,'{$apellido}' ,'{$identificacion}' ,'{$celular}' ,'{$email}'  ) ";
	echo $sql;	
	return $MySqli -> query($sql);

}
function set_eventos ($nombre , $uploadedpreview , $descripcion , $costo_evento , $fecha_entrada ) {



	global $MySqli;

	$sql = "INSERT INTO eventos (nombre ,uploadedpreview , descripcion , costo_evento , fecha_entrada  ) VALUES ( '{$nombre}' ,'{$uploadedpreview}' ,'{$descripcion}' ,'{$costo_evento}' ,'{$fecha_entrada}'  ) ";
	echo $sql;	
	return $MySqli -> query($sql);

}

function get_eventos(){

	global $MySqli;
	$sql = "SELECT nombre, uploadedpreview , descripcion ,costo_evento ,fecha_entrada  FROM eventos  ORDER BY fecha_entrada DESC LIMIT 3";
	
	return 	$MySqli ->query($sql);

}


function get_pagos(){

	global $MySqli;
	$sql = "SELECT apartamento.nombre, formulario_pro.nombre AS propietario,apellido,valor_administracion FROM apartamento,formulario_pro WHERE apartamento._id_formulario_pro = formulario_pro._id_formulario_pro";
	echo $sql;
	return $MySqli -> query($sql);
}
