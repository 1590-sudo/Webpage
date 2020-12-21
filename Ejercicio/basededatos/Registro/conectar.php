<?php
function conectar(){
	$user = "root";
	$pass = "";
	$server = "localhost";
	$database = "dentimax2";
	
	$conexion = new mysqli($server, $user, $pass, $database);
	
	if($conexion -> connect_error){
		die("Error al conectar: ".$conexion -> connect_error);
	}
	
	return $conexion;
}

?>