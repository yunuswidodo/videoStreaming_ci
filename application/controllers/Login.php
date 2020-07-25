<?php
defined('BASEPATH') or exit('No direct script access allowed');


// function construct berfungsi untuk apa yang mau otomatis dijalankan ketika pertama kali controller login dijalankan
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Admin_model'));
    }

    public function index()
    {
        check_login_session();  // sesion || supaya ketika undah masuk tidak bisa akses login
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //die($username); //cek apa yang diinputkan 'username' dari view
            $check = $this->Admin_model->login($username, $password);
            if ($check > 0) {
                //session = nilai password yang dibawa untuk ubah pw
                $this->session->set_userdata(array('logged_in' => TRUE, 'pass_adm' => $password));
                redirect('dashboard');
            } else {
                $this->load->view('login_view');
            }
        }
        $this->load->view('login_view');
    }

    public function logout()
    {
        session_destroy();
        redirect('login');
    }
}
