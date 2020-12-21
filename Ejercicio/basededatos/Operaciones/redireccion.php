<?php
$opcion = $_POST["opcion"];

switch($opcion){
	case 1: header('Location: operaciones/insertar/insertar.html');
	break;
	
	case 2: header('Location: operaciones/consultar/consultar.html');
	break;

	case 3: header('Location: operaciones/editar/editar.html');
	break;
	
	case 4: header('Location: operaciones/eliminar/eliminar.html');
	break;
}
?>