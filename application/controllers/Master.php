<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model(array('Master_model'));
    }

    public function index()
    {
        $data['video'] = TRUE; // buat warna hitam (hover)
        $data['videos'] = $this->Master_model->video_read();
        $this->template->load('template', 'master/video_view', $data);
    }

    public function category()
    {
        $data['kategory'] = TRUE; // buat warna hitam (hover)
        // $data['new_user'] = $this->Dashboard_model->user()->row_array(); // dari Dashboard Model
        //$data['new_like'] = $this->Dashboard_model->like()->row_array();
        // memenggil template: library
        $this->template->load('template', 'master/category_view', $data);
    }
}
