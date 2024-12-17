<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador de tareas</title>
	<meta name="author" content="Carlos Martin" />
	<meta name="description" content="Sistema desarrollado para la administración de tareas del usuario"/>
	<meta http-equiv="cache-control" content="no-cache"/>

	<!-- CSS -->
	<link href="vistas/assets/css/styles.css" rel="stylesheet" />
	<?php
		if(isset($_GET["ruta"]) && file_exists('vistas/assets/css/'.$_GET["ruta"].'_styles.css')){
			echo '<link href="vistas/assets/css/'.$_GET["ruta"].'_styles.css" rel="stylesheet" />';
		} elseif (!isset($_GET["ruta"])) {
			echo '<link href="vistas/assets/css/index_styles.css" rel="stylesheet" />';
		}
	?>

	<!-- JS -->
	<script src="https://kit.fontawesome.com/83819efe74.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
	<h1 class="h1_principal">Administrador de tareas</h1>
	<?php
		require_once("modelos/db.php");

		if(isset($_GET["ruta"])){
			if (file_exists(__DIR__."/modulos/".$_GET["ruta"].".php"))
				include "modulos/".$_GET["ruta"].".php";
			else
				include "modulos/404.php";
		} else {
			include "modulos/index.php";
		}
	?>

</body>
</html>
