<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datos Editados</title>
<style type="text/css">
<!--
.Estilo1 {font-family: "Century Gothic"}
.Estilo4 {font-size: 14px}
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
-->
</style>
</head>

<body>
<div align="center">

    <?php
$Documento = $_POST["Documento"];

include("../conectar.php");
$conexion = conectar();

$eliminar = "DELETE FROM dentimax WHERE Documento = '$Documento'";

if($conexion -> query($eliminar) === TRUE){
	echo '
  <span class="Estilo1">Los datos han sido eliminados correctamente.<br />
  <span class="Estilo4"><a href="../../operaciones.html">Presione aqu&iacute; para regresar a la p&aacute;gina principal.</a></span></span>
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
