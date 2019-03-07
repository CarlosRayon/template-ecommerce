<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Test extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        echo base_url();
        $this->load_model->view('test_view');
    }

}
