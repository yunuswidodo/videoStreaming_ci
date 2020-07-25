<?php

class User_model extends CI_Model
{

    function user_read()
    {
        $this->user_unread();
        $query = "SELECT u.*, COUNT(l.android_id) AS likes FROM lazday_user AS u LEFT JOIN lazday_like AS l ON u.android_id = l.android_id GROUP BY u.android_id";
        return $this->db->query($query);
    }

    function user_unread()
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
