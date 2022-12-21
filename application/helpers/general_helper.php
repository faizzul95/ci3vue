<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('currency_format')) {
    function currency_format($amount)
    {
        return number_format((float)$amount, 2, '.', ',');
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

if (!function_exists('isMobileDevice')) {

    function isMobileDevice()
    {
        if (!empty($_SERVER['HTTP_USER_AGENT'])) {
            return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        };

        return false;
    }
}
