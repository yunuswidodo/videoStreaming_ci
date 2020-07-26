<?php

class Master_model extends CI_Model
{

    function video_read()
    {
        //count menampilkan angka vidio|| sum untuk angka melihat(gambar mata)
        $query = "SELECT v.* , COUNT(l.list_id) AS lst, SUM(l.view) AS view FROM lazday_video AS v JOIN lazday_list AS l ON l.video_id = v.video_id GROUP BY v.video_id ORDER BY v.video_id DESC";
        return $this->db->query($query);
    }
}
