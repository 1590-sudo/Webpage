<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proceso de Registrados Clinica Odontologica DentiMax</title>
</head>

<body>
<div align="center">

<?php
$User = $_POST['User'];
$Pass = $_POST['Pass'];
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
include("conectar.php");
$conexion = conectar();

$insertar = "INSERT INTO usuarios (User, Pass, Nombre, Apellido) VALUES ('$User', '$Pass','$Nombre', '$Apellido')";

if($conexion -> query($insertar) === TRUE){
	echo '
  <span>Los datos han sido registrados correctamente.<br />
  <span><a href="../Acceso/acceso.html">Presione aqu&iacute; para regresar a la p&aacute;gina principal.</a></span></span>
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
