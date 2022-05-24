<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model{
    function cari_data($where){
        $rule='';
        if($this->db->get_where('tb_admin',$where)->num_rows()>0){
            $rule = 'admin'; 
        }else if($this->db->get_where('tb_member', $where)->num_rows()>0){
            $rule = 'member';
        }
        return $rule;
    }
}