<?php

class Admin_model extends CI_Model
{
    function login($username, $password)
    {
        $check = $this->db->get_where('lazday_admin', array('username' => $username, 'password' => md5($password)));
        //function num_row berfungsi mengecek ada data atau tidak 
        if ($check->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
