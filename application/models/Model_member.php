<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_member extends CI_Model{
    function get_data($id){
        $this->db->select('a.id, DATE_FORMAT(a.tanggal, "%d/%m/%Y") as tgl, b.nama_sampah, a.berat,a.total_harga');
        $this->db->from('tb_timbang_sampah a');
        $this->db->join('tb_kategori_sampah b', 'b.id=a.id_kategori_sampah', 'inner');
        $this->db->where('a.id_member',$id);
        $query = $this->db->get();
        return $query;
    }function get_data_member($id){
        $this->db->select('*');
        $this->db->from('tb_member');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query;
    }
    function get_data_pools($id){
        $this->db->select('sum(berat) as berat, sum(total_harga) as total');
        $this->db->from('tb_timbang_sampah');
        $this->db->where('id_member',$id);
        $query = $this->db->get();
        return $query;
    }
}