<?php
	if (PHP_SAPI == 'cli')
	{
		exit();
	}

	if (!file_exists('config.php'))
	{
		die ('Cannot find config file!');
	}

	require_once('config.php');

	if (!file_exists('router/router.class.php'))
	{
		die ('Cannot find router file!');
	}
	
	if (!file_exists('patch/patch_controller.class.php'))
	{
		die ('Cannot find patch controller file!');
	}

	use patch\PatchController;

	$patch = new PatchController();
	$patch->run();

	use router\Router;

	$router = new Router();
	$router->run();