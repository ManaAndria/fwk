<?php 
	define('ROOT', dirname(__DIR__));
	require '../app.php';

	SESSION_START();
	$app = new App();
	$app->load();
	$config = require ROOT . "/app/Config/Database.php";

	$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

	ob_start();
	require ROOT . '/public/Template/Page/' . $page . '.php';
	$content = ob_get_clean();

	require ROOT . '/public/Template/layaout.php';

?>

