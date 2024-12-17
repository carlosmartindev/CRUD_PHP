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
}