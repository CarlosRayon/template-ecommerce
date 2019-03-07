<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Load_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        //Carga Modelos

    }

    /*
    Función que carga la vistas
    @param String $view Vista que queremos cargar
    @param Array $data  Datos que queramos en la vista
     */

    public function view($view = 'home_view', $data = null)
    {

        //Data

        $this->load->view('includes/head_view');
        $this->load->view($view, $data['main']);
        $this->load->view('includes/footer_view');

    }

}
