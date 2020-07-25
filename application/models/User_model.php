<?php

class User_model extends CI_Model
{

    function user_read()
    {
        $query = "UPDATE lazday_user SET status='read' WHERE status='unread'";
        return $this->db->query($query);
    }

    function user_like()
    {
        $query = "UPDATE lazday_like SET status='read' WHERE status='unread'";
        return $this->db->query($query);
    }
}
