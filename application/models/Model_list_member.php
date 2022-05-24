<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_list_member extends CI_Model{
    function get_list(){
        $this->db->select('id, nama, alamat, jenis_kelamin' );
        return $this->db->get('tb_member');
    }
    function cari_id($id){
        $query = $this->db->get_where('tb_member', array('id' => $id))->num_rows();
        return $query;
    }
    function buat_id()
    {
        $this->db->select_max('id');
        foreach ($this->db->get('tb_member')->result() as $row) {
            $id = $row->id;
        }
        $urutan = (int) substr($id, 4, 4);
        $urutan++;
        $id = "m" . sprintf("%04s", $urutan);
        return $id;
    }
    function simpan($edit,$id,$nama,$alamat,$jk){
        $datestring = '%d%m%y';
        $time = time();
        $password = mdate($datestring, $time).$id;
        if (!$edit) {
            $data = array(
                'id' => $id,
                'nama' => $nama,
                'alamat' => $alamat,
                'jenis_kelamin' => $jk,
                'password' => md5($password)
            );
            $this->db->set($data);
            $this->db->insert('tb_member');
        } else if ($edit) {
            $data = array(
                'nama' => $nama,
                'alamat'=>$alamat,
                'jenis_kelamin' => $jk
            );
            $this->db->where('id', $id);
            $this->db->update('tb_member', $data);
        }
    }
}