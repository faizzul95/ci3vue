<?php

class ApiController extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isLoginCheck()) {
            http_response_code(401);
            json(
                [
                    "code" => 401,
                    "message" => "Unauthorized: Access is denied"
                ]
            );
            exit();
        }
        library('form_validation');
    }
}
