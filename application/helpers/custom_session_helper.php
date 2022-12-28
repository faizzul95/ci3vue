<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('currentUserID')) {
    function currentUserID()
    {
        library('session');
        return decodeID(ci()->session->userdata('userID'));
    }
}

if (!function_exists('currentUserAvatar')) {
    function currentUserAvatar()
    {
        library('session');
        return ci()->session->userdata('userAvatar');
    }
}

if (!function_exists('currentUserFullName')) {
    function currentUserFullName()
    {
        library('session');
        return ci()->session->userdata('userFullName');
    }
}

if (!function_exists('currentUserProfileName')) {
    function currentUserProfileName()
    {
        library('session');
        return ci()->session->userdata('profileName');
    }
}

// if (!function_exists('currentUserRoleID')) {
//     function currentUserRoleID()
//     {
//         library('session');
//         return decodeID(ci()->session->userdata('roleID'));
//     }
// }

// if (!function_exists('currentRoleName')) {
//     function currentRoleName()
//     {
//         library('session');
//         return ci()->session->userdata('roleName');
//     }
// }