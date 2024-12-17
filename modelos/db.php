<?php

class DB{
	static public function conectar(){
		try {
			$link = new PDO("mysql:host=localhost;port=3306;dbname=tasks", "root", "root");
			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $link;
		} catch (Exception $e) {
			echo "Ocurrió un error con la base de datos: " . $e->getMessage();
		}
	}
}