<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model(array('User_model')); // panggil dulu modelnya
    }
    public function index()
    {
        $data['pengguna'] = TRUE; // hover sidebar ketika diklik
        $data['user'] = $this->User_model->user_read();

        $this->template->load('template', 'user_view', $data);
    }

    function like()
    {
        $data['suka'] = TRUE;
        $data['likes'] = $this->User_model->user_like();
        $this->template->load('template', 'like_view', $data);
    }
}
