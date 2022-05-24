<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori_sampah extends CI_Model{
    function buat_id(){
        $this->db->select_max('id');
        foreach($this->db->get('tb_kategori_sampah')->result() as $row){
            $id = $row->id;
        }
        $urutan = (int) substr($id, 3, 3);
        $urutan++;
        $id= "K".sprintf("%03s", $urutan);
        return $id;
    }
    function cari_id($id){
        $query = $this->db->get_where('tb_kategori_sampah', array('id' => $id))->num_rows();
        return $query;
    }
    function simpan($edit,$id,$nama,$jenis,$harga){
        if(!$edit){
            $data=array(
                'id'=>$id,
                'nama_sampah'=>$nama,
                'jenis_sampah'=>$jenis,
                'harga'=>$harga
            );
            $this->db->set($data);
            $this->db->insert('tb_kategori_sampah');
        }else if($edit){
            $data= array(
                'nama_sampah' => $nama,
                'jenis_sampah' => $jenis,
                'harga' => $harga
            );
            $this->db->where('id',$id);
            $this->db->update('tb_kategori_sampah',$data);
        }
    }
}