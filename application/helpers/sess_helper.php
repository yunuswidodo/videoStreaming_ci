<?php
function check_session()
{
    $CI = &get_instance();
    $session = $CI->session->userdata('logged_in'); // ngambil dari login controller
    if ($session != TRUE) {
        redirect('login');
    }
}


function check_login_session()
{
    $CI = &get_instance();
    $session = $CI->session->userdata('logged_in');
    if ($session == TRUE) {
        redirect('dashboard');
    }
}
