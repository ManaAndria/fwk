<?php 

class Autoloader {

	public static function register () {
		spl_autoload_register(array(__CLASS__, 'charger'));
	}

	public static function charger($class) {
		$class = str_replace('\\', '/', $class);
		require ROOT . '\/app\/' . $class . '.php';
	}

}

?>