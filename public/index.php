<?php 
	define('ROOT', dirname(__DIR__));
	require '../app.php';

	SESSION_START();
	$_SESSION['user'] = '76f57189cd6ef896bd3f5c64e5f242025db4d784';
	$app = new App();
	$app->load();
	$config = require ROOT . "/app/Config/Database.php";

	$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

	ob_start();
	require ROOT . '/public/Template/Page/' . $page . '.php';
	$content = ob_get_clean();

	require ROOT . '/public/Template/layaout.php';

?>

