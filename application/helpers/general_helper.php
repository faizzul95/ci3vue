<?php

use Luthier\Debug;

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

// DATE & TIME HELPERS SECTION

if (!function_exists('currentDate')) {
	function currentDate($format = 'Y-m-d')
	{
		date_default_timezone_set('Asia/Kuala_Lumpur');
		return date($format);
	}
}

if (!function_exists('currentTime')) {
	function currentTime($format = 'H:i:s')
	{
		date_default_timezone_set('Asia/Kuala_Lumpur');
		return date($format);
	}
}

if (!function_exists('formatDate')) {
	function formatDate($date, $format = "d.m.Y")
	{
		return date($format, strtotime($date));
	}
}

if (!function_exists('timestamp')) {
	function timestamp($format = 'Y-m-d H:i:s')
	{
		date_default_timezone_set('Asia/Kuala_Lumpur');
		return date($format);
	}
}

if (!function_exists('dateDiff')) {
	function dateDiff($d1, $d2)
	{
		return round(abs(strtotime($d1) - strtotime($d2)) / 86400);
	}
}

if (!function_exists('timeDiff')) {
	function timeDiff($t1, $t2)
	{
		return round(abs(strtotime($t1) - strtotime($t2)) / 60);
	}
}

// CURRENCY & MONEY HELPERS SECTION

if (!function_exists('currency_format')) {
	function currency_format($amount)
	{
		return number_format((float)$amount, 2, '.', ',');
	}
}

// ENCODE & DECODE HELPERS SECTION

if (!function_exists('encode_base64')) {
	function encode_base64($sData = NULL)
	{
		if (!empty($sData)) {
			$sBase64 = base64_encode($sData);
			return strtr($sBase64, '+/', '-_');
		} else {
			return '';
		}
	}
}

if (!function_exists('decode_base64')) {
	function decode_base64($sData = NULL)
	{
		if (!empty($sData)) {
			$sBase64 = strtr($sData, '-_', '+/');
			return base64_decode($sBase64);
		} else {
			return '';
		}
	}
}

if (!function_exists('encodeID')) {
	function encodeID($id = NULL, $count = 25)
	{
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$uniqueURL = substr(str_shuffle($permitted_chars), 0, $count) . '' . $id . '' . substr(str_shuffle($permitted_chars), 0, $count);
		return encode_base64($uniqueURL);
	}
}

if (!function_exists('decodeID')) {
	function decodeID($id = NULL, $count = 25)
	{
		$id = decode_base64($id);
		return substr($id, $count, -$count);
	}
}

// GENERAL HELPERS SECTION

if (!function_exists('asset')) {
	function asset($param)
	{
		return base_url . 'public/' . $param;
	}
}

if (!function_exists('redirect')) {
	function redirect($path, $permanent = false)
	{
		header('Location: ' . url($path), true, $permanent ? 301 : 302);
		exit();
	}
}

if (!function_exists('url')) {
	function url($param)
	{
		$param = htmlspecialchars($param, ENT_NOQUOTES, 'UTF-8');
		$param = filter_var($param, FILTER_SANITIZE_URL);
		return base_url . $param;
	}
}

if (!function_exists('isAjax')) {
	function isAjax()
	{
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			return true;
		} else {
			return false;
		}
	}
}

if (!function_exists('message')) {
	function message($code, $text = 'create')
	{
		if (isSuccess($code)) {
			return ucfirst($text) . ' successfully';
		} else {
			return 'Please consult the system administrator';
		}
	}
}

if (!function_exists('isSuccess')) {
	function isSuccess($resCode = 200)
	{
		$successStatus = [200, 201, 302];
		$code = (is_string($resCode)) ? (int)$resCode : $resCode;

		if (in_array($code, $successStatus)) {
			return true;
		} else {
			return false;
		}
	}
}

if (!function_exists('isError')) {
	function isError($resCode = 400)
	{
		$errorStatus = [400, 404, 422, 500];
		$code = (is_string($resCode)) ? (int)$resCode : $resCode;

		if (in_array($code, $errorStatus)) {
			return true;
		} else {
			return false;
		}
	}
}

if (!function_exists('hasData')) {
	function hasData($data = NULL)
	{
		if (isset($data) && ($data != '' || $data != NULL)) {
			return true;
		} else {
			return false;
		}
	}
}

if (!function_exists('json')) {
	function json($data = NULL, $code = 200)
	{
		http_response_code($code);
		header('Content-Type: application/json');
		echo json_encode($data, JSON_PRETTY_PRINT);
		exit;
	}
}

if (!function_exists('isMobileDevice')) {
	function isMobileDevice()
	{
		if (!empty($_SERVER['HTTP_USER_AGENT'])) {
			return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
		};

		return false;
	}
}

if (!function_exists('Logs')) {
	function Logs($type = 'view', $message = NULL, $model_name = NULL, $function_name = NULL)
	{
		Crud_Logs::$type($message, $model_name, $function_name);
	}
}

if (!function_exists('logDebug')) {
	function logDebug($logMessage = NULL, $logType = 'info', $type = 'log')
	{
		//$type = 'log', 'logFlash'
		//$logType = 'info', 'warning', 'error'
		Debug::$type($logMessage, $logType);
	}
}

if (!function_exists('isMaintenance')) {
	function isMaintenance($redirect = true, $path = 'maintenance')
	{
		if (filter_var(env('MAINTENANCE_MODE'), FILTER_VALIDATE_BOOLEAN)) {
			if ($redirect) {
				// if (currentUserRoleID() != 1) // superadmin always can login
				// 	errorpage($path);
				// else
				// 	return true;
			}
		} else {
			return false;
		}
	}
}
