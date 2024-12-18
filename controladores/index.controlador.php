<?php

class ControladorTareas{
	static public function ctrListarTareas() {
		// Se llama el modelo
		$respuesta = ModeloTareas::mdlListarTareas();
		// Se retorna la respuesta
		return $respuesta;
	}

	static public function ctrAgregarTarea() {
		// Se obtiene la variabe con el texto a guardar
		$datos = array('txtTarea' => $_POST['txtTarea']);
		// Se llama el modelo y se envía la variable
		$respuesta = ModeloTareas::mdlAgregarTarea($datos);
		// Se retorna la respuesta
		return $respuesta;
	}

	static public function ctrCargarTarea() {
		// Se obtiene la variabe con el id a cargar
		$datos = array('id' => $_POST['id']);
		// Se llama el modelo y se envía la variable
		$respuesta = ModeloTareas::mdlCargarTarea($datos);
		// Se retorna la respuesta
		return $respuesta;
	}

	static public function ctrActualizarTarea() {
		// Se obtiene la variabe con el id a cargar
		$datos = array('id' => $_POST['id'], 'tarea' => $_POST['tarea']);
		// Se llama el modelo y se envía la variable
		$respuesta = ModeloTareas::mdlActualizarTarea($datos);
		// Se retorna la respuesta
		return $respuesta;
	}

	static public function ctrEliminarTarea() {
		// Se obtiene la variabe con el id a eliminar
		$datos = array('id' => $_POST['id']);
		// Se llama el modelo y se envía la variable
		$respuesta = ModeloTareas::mdlEliminarTarea($datos);
		// Se retorna la respuesta
		return $respuesta;
	}
}