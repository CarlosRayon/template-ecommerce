<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index($view)
    {
        $this->load_model->view('info/' . $view . '_view');
    }

}
