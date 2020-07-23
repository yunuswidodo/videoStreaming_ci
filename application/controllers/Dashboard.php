<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_session(); // mengambil fungsi dari sess_hepler
        $this->load->model(array('Admin_model'));
    }

    public function index()
    {
        // memenggil template: library
        $this->template->load('template', 'dashboard_view');
    }
}
