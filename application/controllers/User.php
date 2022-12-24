<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Controller
{
    public function __construct()
    {
        parent::__construct();
        model('User_model', 'userM');
    }

    public function show($userID)
    {
        $dataUser = $this->userM::find($userID);
        jsonApi($dataUser);
    }
}
