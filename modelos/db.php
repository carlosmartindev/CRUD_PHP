<?php

class DB{
	private static $host = 'localhost'; 
	private static $port = '3306'; 
	private static $dbname = 'tasks'; 
	private static $user = 'root'; 
	private static $pass = 'root';

	static public function conectar(){
		try {
			$link = new PDO("mysql:host=".self::$host.";port=".self::$port.";dbname=".self::$dbname, self::$user, self::$pass);
			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $link;
		} catch (Exception $e) {
			echo "Ocurrió un error con la base de datos: " . $e->getMessage();
		}
	}
}