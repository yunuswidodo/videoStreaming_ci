<?php

class Coba extends CI_Controller
{

    public function bismi()
    {
        $this->load->model('Dashboard_model');
        print_r($query['coba']);
    }
}
