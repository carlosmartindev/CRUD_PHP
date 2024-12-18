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

	static public function mdlAgregarTarea($datos) {
		// Recupero la variable con el texto a guardar
		$txtTarea = $datos['txtTarea'];

		$sql = "INSERT INTO tasks (task_name) VALUE (:task_name);";
		$stmt = DB::conectar()->prepare($sql);

		$stmt -> bindParam(':task_name', $txtTarea, PDO::PARAM_STR);

		if ($stmt -> execute()) {
			return json_encode(array('status' => 'ok'));
		} else {
			return json_encode(array('status' => 'failed', 'query' => $sql));
		}
	}

	static public function mdlCargarTarea($datos) {
		$id = $datos['id'];
		
		$sql = "SELECT * FROM tasks WHERE id = ".$id;
		$stmt = DB::conectar()->prepare($sql);
		$stmt -> execute();
		return $stmt -> fetch();
	}

	static public function mdlActualizarTarea($datos) {
		// Recupero la variable con el texto a guardar
		$id = $datos['id'];
		$tarea = $datos['tarea'];

		$sql = "UPDATE tasks SET task_name = :task_name WHERE id = :id";
		$stmt = DB::conectar()->prepare($sql);

		$stmt -> bindParam(':task_name', $tarea, PDO::PARAM_STR);
		$stmt -> bindParam(':id', $id, PDO::PARAM_INT);

		if ($stmt -> execute()) {
			return json_encode(array('status' => 'ok'));
		} else {
			return json_encode(array('status' => 'failed', 'query' => $sql));
		}
	}

	static public function mdlEliminarTarea($datos) {
		// Recupero la variable con el texto a guardar
		$id = $datos['id'];

		$sql = "DELETE FROM tasks WHERE id = :id";
		$stmt = DB::conectar()->prepare($sql);

		$stmt -> bindParam(':id', $id, PDO::PARAM_INT);

		if ($stmt -> execute()) {
			return json_encode(array('status' => 'ok'));
		} else {
			return json_encode(array('status' => 'failed', 'query' => $sql));
		}
	}
}