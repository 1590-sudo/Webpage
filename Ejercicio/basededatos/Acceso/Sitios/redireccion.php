<!DOCTYPE html>
<html>
<head>
	<title>Redireccion del Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../acceso.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #0099FF;
}
-->
</style></head>
<body>
<div class="aa">
	<?php
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		include("../conectar.php");
		$conexion = conectar();

		$consultar = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$pass'";

		$resultado = $conexion -> query($consultar);

		if ($resultado -> num_rows > 0) {
			# code...
			while ($row = $resultado -> fetch_assoc()) {
				if ($row['Tipo'] === 'Admin') {
					# code...
					?>
					Te has logueado como Mega Administrador, has clic 
					<a href="../../Operaciones/operaciones.html">AQUÍ</a>
					 para continuar
					<?php
				}
				elseif ($row['Tipo'] === 'Est') {
					# code...
					?>
					Te has logueado como Administrador, has clic 
					<a href="../../Operaciones2/operaciones.html">AQUÍ</a>
					 para continuar
					<?php
				}
				else {
					?>
						No se han encontrado datos, has clic 
						<a href="../acceso.html">AQUÍ</a>
						 para regresar
						<?php
				}
		}
	}
		$conexion -> close();
	?>	
	</div>
</body>
</html>
