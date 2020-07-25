<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_session(); // mengambil fungsi dari sess_hepler
        $this->load->model(array('Dashboard_model'));
    }

    public function index()
    {
        $data['dashboard'] = TRUE; // buat warna hitam (hover)
        $data['new_user'] = $this->Dashboard_model->user()->row_array(); // dari Dashboard Model
        $data['new_like'] = $this->Dashboard_model->like()->row_array();
        // memenggil template: library
        $this->template->load('template', 'dashboard_view', $data);
    }
}
