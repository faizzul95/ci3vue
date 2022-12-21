<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

$hook['pre_system'] = [
    [
        'class'    => 'environment_hook',
        'function' => 'loadEnv',
        'filename' => 'environment_hook.php',
        'filepath' => 'hooks'
    ],
    [
        'class'    => 'maintenance_hook',
        'function' => 'offline_check',
        'filename' => 'maintenance_hook.php',
        'filepath' => 'hooks'
    ],
    [
        'class'     => '',
        'function'  => 'autoload',
        'filename'  => 'autoload_hook.php',
        'filepath'  => 'hooks',
        'params'    => ''
    ],
    [
        'class'     => '',
        'function'  => 'env',
        'filename'  => 'common_hook.php',
        'filepath'  => 'hooks',
        'params'    => ''
    ],
];

$hook['post_controller_constructor'][] = array(
    'function' => 'redirect_ssl',
    'filename' => 'ssl.php',
    'filepath' => 'hooks'
);

// $hook['pre_system'][] = array(
//     'class'    => 'maintenance_hook',
//     'function' => 'offline_check',
//     'filename' => 'maintenance_hook.php',
//     'filepath' => 'hooks'
// );

// $hook['display_override'][] = array(
//     'class'     => 'Develbar',
//     'function'  => 'debug',
//     'filename'  => 'Develbar.php',
//     'filepath'  => 'third_party/DevelBar/hooks'
// );
