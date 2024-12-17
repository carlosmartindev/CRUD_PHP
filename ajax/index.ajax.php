<?php

// Se realiza el require al modelo y al controlador
require_once "../controladores/index.controlador.php";
require_once "../modelos/index.modelo.php";

class AjaxTareas{
	// Método para listar tareas
	public function ajaxListarTareas() {
		// Se llama el controlador
		$respuesta = ControladorTareas::ctrListarTareas();
		// Se regresa la respuesta en formato JSON
		echo json_encode($respuesta);
	}
}

// Valido si se está enviando la variable "listarTareas"
if(isset($_POST["listarTareas"])){
	// Si existe se hace el llamado al método "ajaxListarTareas"
	$tareas = new AjaxTareas();
	$tareas -> ajaxListarTareas();
}