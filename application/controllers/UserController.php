<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        model('User_model', 'userM');
    }

    public function list()
    {
        $dataUser = $this->userM::all();
        json($dataUser);
    }

    public function show($userID)
    {
        $dataUser = $this->userM::find($userID);
        json($dataUser);
    }

    public function edit($userID)
    {
        $dataUser = $this->userM::find($userID);
        json($dataUser);
    }
}
