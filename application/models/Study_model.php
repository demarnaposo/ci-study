<?php if(!defined('BASEPATH'))exit("No direct script access allowed");

class Study_model extends CI_MODEL {

    public function get_pelajar() {
        $data = $this->db->get("tbl_pelajar");
        return $data;
    }


    
}