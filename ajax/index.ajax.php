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

	// Método para guardar tareas
	public function ajaxAgregarTarea() {
		// Se llama el controlador
		$respuesta = ControladorTareas::ctrAgregarTarea();
		// Se regresa la respuesta en formato JSON
		echo json_encode($respuesta);
	}

	// Método para eliminar tareas
	public function ajaxCargarTarea() {
		// Se llama el controlador
		$respuesta = ControladorTareas::ctrCargarTarea();
		// Se regresa la respuesta en formato JSON
		echo json_encode($respuesta);
	}

	// Método para actualizar tareas
	public function ajaxActualizarTarea() {
		// Se llama el controlador
		$respuesta = ControladorTareas::ctrActualizarTarea();
		// Se regresa la respuesta en formato JSON
		echo json_encode($respuesta);
	}

	// Método para eliminar tareas
	public function ajaxEliminarTarea() {
		// Se llama el controlador
		$respuesta = ControladorTareas::ctrEliminarTarea();
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

// Valido si se está enviando la variable "agregarTarea"
if(isset($_POST["agregarTarea"])){
	// Si existe se hace el llamado al método "ajaxAgregarTarea"
	$tareas = new AjaxTareas();
	$tareas -> ajaxAgregarTarea();
}

// Valido si se está enviando la variable "cargarTarea"
if(isset($_POST["cargarTarea"])){
	// Si existe se hace el llamado al método "ajaxCargarTarea"
	$tareas = new AjaxTareas();
	$tareas -> ajaxCargarTarea();
}

// Valido si se está enviando la variable "actualizarTarea"
if(isset($_POST["actualizarTarea"])){
	// Si existe se hace el llamado al método "ajaxActualizarTarea"
	$tareas = new AjaxTareas();
	$tareas -> ajaxActualizarTarea();
}

// Valido si se está enviando la variable "agregarTarea"
if(isset($_POST["eliminarTarea"])){
	// Si existe se hace el llamado al método "ajaxEliminarTarea"
	$tareas = new AjaxTareas();
	$tareas -> ajaxEliminarTarea();
}