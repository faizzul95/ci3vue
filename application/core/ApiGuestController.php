<?php

class ApiGuestController extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        library('form_validation');
    }
}
