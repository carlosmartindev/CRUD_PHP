<?php

class ControladorTareas{
	static public function ctrListarTareas() {
		// Se llama el modelo
		$respuesta = ModeloTareas::mdlListarTareas();
		// Se retorna la respuesta
		return $respuesta;
	}
}