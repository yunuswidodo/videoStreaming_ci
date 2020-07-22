<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        // memenggil template: library
        $this->template->load('template', 'dashboard_view');
    }
}
