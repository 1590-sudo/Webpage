<?php
$opcion = $_POST["opcion"];

switch($opcion){
	case 1: header('Location: operaciones/insertar/insertar.html');
	break;
	
	case 2: header('Location: operaciones/consultar/consultar.html');
	break;
	
}
?>