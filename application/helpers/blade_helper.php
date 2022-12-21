<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

use eftec\bladeone\BladeOne;

// reff : https://github.com/EFTEC/BladeOne
if (!function_exists('render')) {
	function render($fileName, $data = NULL, $bladeName = 'templates/main_blade')
	{
		// $bladeName = isMobileDevice() ? 'templates/pwa_blade' : $bladeName;
		$controllerName = segment(1);

		$views = APPPATH . 'views';
		$cache = isMobileDevice() ? APPPATH . 'cache' . DIRECTORY_SEPARATOR . 'blade_cache/mobile/' : APPPATH . 'cache' . DIRECTORY_SEPARATOR . 'blade_cache/browser/';

		$fileName = $fileName . '.php';

		if (file_exists($views . DIRECTORY_SEPARATOR . $fileName)) {

			if (!file_exists($cache)) {
				mkdir($cache, 0777, true);
			}

			loadBladeTemplate($views, $cache, $fileName, $data);

			// if (checkMaintenance() and !in_array($controllerName, specialController())) {
			// 	if (currentUserRoleID() != 1)
			// 		errorpage('maintenance');
			// 	else
			// 		loadBladeTemplate($views, $cache, $fileName, $data);
			// } else {
			// 	loadBladeTemplate($views, $cache, $fileName, $data);
			// }
		} else {
			errorpage('err404');
		}
	}
}

if (!function_exists('loadBladeTemplate')) {
	function loadBladeTemplate($views, $cache = NULL, $fileName = NULL, $data = NULL)
	{
		# Please use this settings :
		# 0 - MODE_AUTO : BladeOne reads if the compiled file has changed. If has changed,then the file is replaced.
		# 1 - MODE_SLOW : Then compiled file is always replaced. It's slow and it's useful for development.
		# 2 - MODE_FAST : The compiled file is never replaced. It's fast and it's useful for production.
		# 5 - MODE_DEBUG :  DEBUG MODE, the file is always compiled and the filename is identifiable.
		try {
			$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
			$blade->setAuth(currentUserID(), currentUserRoleID(), permission());
			$blade->setBaseUrl(base_url . 'public/'); // with or without trail slash
			echo $blade->run($fileName, $data);
		} catch (Exception $e) {
			echo "<b> ERROR FOUND : </b> <br><br>" . $e->getMessage() . "<br><br><br>" . $e->getTraceAsString();
		}
	}
}

if (!function_exists('view')) {
	function view($fileName, $data = NULL, $bladeName = 'templates/desktop_blade')
	{
		$ci = get_instance();
		$bladeName = isMobileDevice() ? 'templates/pwa_blade' : $bladeName;
		$controllerName = segment(1);

		if (file_exists(APPPATH . 'views' . DIRECTORY_SEPARATOR . $fileName . '.php')) {
			if (checkMaintenance() and !in_array($controllerName, specialController())) {
				if (currentUserRoleID() != 1)
					errorpage('maintenance');
				else
					$ci->load->view($fileName, $data);
			} else {
				$ci->load->view($fileName, $data);
			}
		} else {
			errorpage('err404');
		}
	}
}

if (!function_exists('error')) {
	function error($code = NULL)
	{
		$ci = get_instance();
		$ci->load->view('errors/custom/error_' . $code);
	}
}

if (!function_exists('errorpage')) {
	function errorpage($code = NULL)
	{
		redirect('errorpage/' . $code);
	}
}

if (!function_exists('checkMaintenance')) {
	function checkMaintenance()
	{
		return filter_var(env('MAINTENANCE_MODE'), FILTER_VALIDATE_BOOLEAN);
	}
}

if (!function_exists('specialController')) {
	function specialController()
	{
		return ['sysadmin'];
	}
}
