<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('model')) {
    function model($modelName, $assignName)
    {
        $ci = get_instance();
        return $ci->load->model($modelName, $assignName);
    }
}

if (!function_exists('library')) {
    function library($libName)
    {
        $ci = get_instance();
        return $ci->load->library($libName);
    }
}

if (!function_exists('helper')) {
    function helper($helperName)
    {
        $ci = get_instance();
        return $ci->load->helper($helperName);
    }
}

if (!function_exists('includeHelper')) {
    function includeHelper($params)
    {
        if (!isArray($params)) {
            include_once FCPATH . $params;
        } else {
            foreach ($params as $pathInclude) {
                include_once FCPATH . $pathInclude;
            }
        }
    }
}

if (!function_exists('redirect')) {
    function redirect($path, $permanent = false)
    {
        header('Location: ' . url($path), true, $permanent ? 301 : 302);
        exit();
    }
}

if (!function_exists('asset')) {
    function asset($param, $device = 'browsers', $directUrl = true)
    {
        return $directUrl ? base_url . 'public/' . $device . '/' . $param : base_url . 'public/' . $param;
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

if (!function_exists('jsonApi')) {
    function jsonApi($data = NULL)
    {
        $code = hasData($data) ? 200 : 404;
        http_response_code($code);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT);
        exit;
    }
}

if (!function_exists('json')) {
    function json($data = NULL, $type = NULL)
    {
        header("Content-type:application/json");

        if (empty($type)) {
            echo json_encode($data, JSON_PRETTY_PRINT);
        } else {
            echo json_encode([
                'resCode' => 400,
                'message' => validation_errors(),
                'id' => NULL,
                'data' => [],
            ], JSON_PRETTY_PRINT);
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
        $errorStatus = [400, 404, 500, 422];
        $code = (is_string($resCode)) ? (int)$resCode : $resCode;

        if (in_array($code, $errorStatus)) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('nodata')) {
    function nodata($showText = true, $filesName = '5.png')
    {
        echo "<div id='nodata' class='col-lg-12 mb-4 mt-2'>
          <center>
            <img src='" . url('public/custom/img/nodata/' . $filesName) . "' class='img-fluid mb-3' width='38%'>
            <h4 style='letter-spacing :2px; font-family: Quicksand, sans-serif !important;margin-bottom:15px'> 
             <strong> NO INFORMATION FOUND </strong>
            </h4>";
        if ($showText) {
            echo "<h6 style='letter-spacing :2px; font-family: Quicksand, sans-serif !important;font-size: 13px;'> 
                Here are some action suggestions for you to try :- 
            </h6>";
        }
        echo "</center>";
        if ($showText) {
            echo "<div class='row d-flex justify-content-center w-100'>
            <div class='col-lg m-1 text-left' style='max-width: 350px !important;letter-spacing :1px; font-family: Quicksand, sans-serif !important;font-size: 12px;'>
              1. Try the registrar function (if any).<br>
              2. Change your word or search selection.<br>
              3. Contact the system support immediately.<br>
            </div>
          </div>";
        }
        echo "</div>";
    }
}

if (!function_exists('comingsoon')) {
    function comingsoon($filesName = 'coming.jpg')
    {
        echo "<div id='nodata' class='col-lg-12 mb-4 mt-2'>
          <center>
            <img src='" . url('public/common/images/' . $filesName) . "' class='img-fluid mb-3' width='50%'>";
        echo "</center>";
        echo "</div>";
    }
}

if (!function_exists('nodataAccess')) {
    function nodataAccess($filesName = '403.png')
    {
        echo "<div id='nodata' class='col-lg-12 mb-4 mt-2'>
          <center>
            <img src='" . url('public/custom/img/nodata/' . $filesName) . "' class='img-fluid mb-2' width='30%'>
            <h3 style='letter-spacing :2px; font-family: Quicksand, sans-serif !important;margin-bottom:15px'> 
             <strong> NO ACCESS TO THIS INFORMATION </strong>
            </h3>";
        echo "</center>";
        echo "</div>";
    }
}

function noSelectDataLeft($type = 'Type', $filesName = '5.png')
{
    $uppercaseText = strtoupper($type);
    echo "
        <div id='nodata' class='col-lg-12 mb-2 mt-4' style='margin-top:50px!important;'>
          <center>
            <img src='" . url('public/custom/img/nodata/' . $filesName) . "' class='img-fluid mb-5' width='50%'>
            <h3 style='letter-spacing :2px; font-family: Quicksand, sans-serif !important;margin-bottom:15px'> 
             <strong> NO $uppercaseText SELECTED </strong>
            </h3>
            <h6 style='letter-spacing :2px; font-family: Quicksand, sans-serif !important;font-size: 13px;'> 
                Select any $type on the left
            </h6>
          </center>
        </div>";
}

function cantViewPDF($filesName = '8.png')
{
    return "<div id='nodata' class='col-lg-12 mb-4'>
          <center>
            <img src='" . url('public/custom/img/nodata/' . $filesName) . "' class='img-fluid mb-4' width='80%' style='margin-top:50px'>
            <h6 style='letter-spacing :2px; font-family: Quicksand, sans-serif !important;margin-bottom:50px'>
             <strong> Ops. your device does not appear to be supported to view this file. </strong>
            </h6>
          </center>
        </div>";
}

function loader($status = true)
{
    if ($status) {
        return "<div id='loaderData' class='col-lg-12 mb-4 mt-2'>
                    <center>
                    <img src='" . asset('assets/loader.gif') . "' class='img-fluid mb-3' width='80%'>
                    </center>
                </div>";
    }
}

if (!function_exists('Logs')) {
    function Logs($type = 'view', $message = NULL, $model_name = NULL, $function_name = NULL)
    {
        library('Crud_Logs');
        Crud_Logs::$type($message, $model_name, $function_name);
    }
}
