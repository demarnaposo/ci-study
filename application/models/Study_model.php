<?php if(!defined('BASEPATH'))exit("No direct script access allowed");

class Study_model extends CI_MODEL {

    public function get_pelajar() {
        $q = $this->db->query("SELECT * FROM tbl_pelajar");
        return $q;
    }


    
}