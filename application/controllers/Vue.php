<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vue extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('vue/vueTemplate.php');
        // render('vue/layout',  [
        //     'title' => '-',
        //     'currentSidebar' => NULL,
        //     'currentSubSidebar' => NULL,
        //     'permission' => []
        // ]);
    }
}
