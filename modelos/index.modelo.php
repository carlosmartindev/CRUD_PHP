<?php

// Se realiza el require a la conexión
require_once "../modelos/db.php";

class ModeloTareas{
	static public function mdlListarTareas() {
		$sql = "SELECT * FROM tasks ORDER BY 1 DESC";
		$stmt = DB::conectar()->prepare($sql);
		$stmt -> execute();
		return $stmt -> fetchAll();
	}
}