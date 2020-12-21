<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datos Insertados Clinica Odontologica DentiMax</title>
</head>

<body>
<div align="center">

<?php

$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Edad = $_POST["Edad"];
$Telefono = $_POST["Telefono"];
$Documento = $_POST["Documento"];
$Eps = $_POST["Eps"];
$Direccion = $_POST["Direccion"];
include("../conectar.php");
$conexion = conectar();

$insertar = "INSERT INTO dentimax (Nombre, Apellido, Edad, Telefono, Documento, Eps, Direccion) VALUES ('$Nombre', '$Apellido', $Edad, $Telefono, $Documento, '$Eps', '$Direccion')";

if($conexion -> query($insertar) === TRUE){
	echo '
  <span>Los datos han sido guardados correctamente.<br />
  <span><a href="../../operaciones.html">Presione aqu&iacute; para regresar a la p&aacute;gina principal.</a></span></span>
      ';
}
else{
	echo "Error al conectar";
}

$conexion -> close();
?>
</div>
</body>
</html>
