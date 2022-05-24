<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_timbang_sampah extends CI_Model{
    function buat_id()
    {
        $this->db->select_max('id');
        foreach ($this->db->get('tb_timbang_sampah')->result() as $row) {
            $id = $row->id;
        }
        $urutan = (int) substr($id, 3, 3);
        $urutan++;
        $id = "TS" . sprintf("%03s", $urutan);
        return $id;
    }
    function cari_id($id)
    {
        $query = $this->db->get_where('tb_timbang_sampah', array('id' => $id))->num_rows();
        return $query;
    }
    function get_harga(){
        $this->db->select('harga');
        $query = $this->db->get('tb_timbang_sampah');
        foreach ($query->result() as $row){
            echo $row->harga;
        }
    }
    function simpan($edit, $id, $id_member, $kateogri, $berat, $total)
    {
        $datestring = '%Y-%m-%d';
        $time = time();

        if (!$edit) {
            $data = array(
                'id' => $id,
                'tanggal' => mdate($datestring, $time),
                'id_member' => $id_member,
                'id_kategori_sampah' => $kateogri,
                'berat'=>$berat,
                'total_harga'=>$total
            );
            $this->db->set($data);
            $this->db->insert('tb_timbang_sampah');
        } else if ($edit) {
            $data = array(
                'id_member' => $id_member,
                'id_kategori_sampah' => $kateogri,
                'berat' => $berat,
                'total_harga' => $total
            );
            $this->db->where('id', $id);
            $this->db->update('tb_timbang_sampah', $data);
        }
    }
    function get_list(){
        $this->db->select('a.id, DATE_FORMAT(a.tanggal, "%d/%m/%Y") as tgl,a.id_member,b.nama,a.id_kategori_sampah,c.nama_sampah,c.harga,a.berat,a.total_harga');
        $this->db->from('tb_timbang_sampah a');
        $this->db->join('tb_member b','b.id=a.id_member','inner');
        $this->db->join('tb_kategori_sampah c','c.id=a.id_kategori_sampah','inner');
        $query = $this->db->get();
        return $query;
    }
    function get_data($id){
        $this->db->where('id',$id);
        return $this->db->get('tb_timbang_sampah');
    }
}