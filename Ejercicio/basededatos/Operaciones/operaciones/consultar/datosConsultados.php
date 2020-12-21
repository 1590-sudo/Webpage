<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Datos Consultados</title>
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

$consultar = "SELECT * FROM dentimax WHERE Documento = $Documento";

$resultado = $conexion -> query($consultar);

if($resultado -> num_rows > 0){
    ?>

    <table border="0">
      <tr>
        <td class="Estilo1">Nombre</td>
        <td class="Estilo1">&nbsp;&nbsp;&nbsp;</td>
        <td class="Estilo1">Apellido</td>
        <td class="Estilo1">&nbsp;&nbsp;&nbsp;</td>
        <td class="Estilo1">Edad</td>
        <td class="Estilo1">&nbsp;&nbsp;&nbsp;</td>
        <td class="Estilo1">Tel&eacute;fono</td>
        <td class="Estilo1">&nbsp;&nbsp;&nbsp;</td>
        <td class="Estilo1">Documento</td>
        <td class="Estilo1">&nbsp;&nbsp;&nbsp;</td>
        <td class="Estilo1">Eps</td>
        <td class="Estilo1">&nbsp;&nbsp;&nbsp;</td>
        <td class="Estilo1">Direccion</td>
      </tr>

    <?php
	while ($row = $resultado -> fetch_assoc()) {
    ?>

      <tr>
        <td class="Estilo1"><div align="center"><?php echo $row['Nombre'];?></div></td>
        <td class="Estilo1"><div align="center"></div></td>
        <td class="Estilo1"><div align="center"><?php echo $row['Apellido'];?></div></td>
        <td class="Estilo1"><div align="center"></div></td>
        <td class="Estilo1"><div align="center"><?php echo $row['Edad'];?></div></td>
        <td class="Estilo1"><div align="center"></div></td>
        <td class="Estilo1"><div align="center"><?php echo $row['Telefono'];?></div></td>
        <td class="Estilo1"><div align="center"></div></td>
        <td class="Estilo1"><div align="center"><?php echo $row['Documento'];?></div></td>
        <td class="Estilo1"><div align="center"></div></td>
        <td class="Estilo1"><div align="center"><?php echo $row['Eps'];?></div></td>
        <td class="Estilo1"><div align="center"></div></td>
        <td class="Estilo1"><div align="center"><?php echo $row['Direccion'];?></div></td>
    <?php
	}
    ?>

      </tr>
    </table>
	<span class="Estilo4"><a href="../../operaciones.html">Presione aqu&iacute; para regresar a la p&aacute;gina principal.</a></span></span>

    <?php
}
else{
    ?>
<span class="Estilo1">No se encuentran resultados.<br />
<span class="Estilo4"><a href="../../operaciones.html">Presione aqu&iacute; para regresar a la p&aacute;gina principal.</a></span></span>
    <?php
}


$conexion -> close();
	?>

</div>
</body>
</html>
