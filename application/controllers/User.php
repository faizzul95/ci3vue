<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->users = [
            ['id' => 1, 'name' => 'Nur Muhammad'],
            ['id' => 2, 'name' => 'Nabil Muhammad Firdaus'],
            ['id' => 3, 'name' => 'Resqa Dahmurah'],
            ['id' => 4, 'name' => 'Dian Febrianto'],
        ];
    }

    public function show($id)
    {
        dd($id);
        // $found = array_search($id, array_column($this->users, 'id'));

        // if ($found !== FALSE) {
        //     $user = $this->users[$found];
        //     return send_success_response($user);
        // }

        // return send_response([
        //     'success' => FALSE,
        //     'message' => 'There is no user with the given ID.'
        // ], HTTP_NOT_FOUND);
    }
}
