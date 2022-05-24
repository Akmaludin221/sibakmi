<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller{
    function __construct()
    {
        parent ::__construct();
        $this->load->model('model_kategori_sampah');
        $this->load->model('model_list_member');
        $this->load->model('model_timbang_sampah');
        $this->load->helper('date');
        $this->load->library('encryption');
        if($this->session->userdata('status')!='login'){
            redirect(base_url('login'));
            if($this->session->userdata('rule')!="admin"){
                redirect(base_url('login'));
            }
        }
    }
    public function index(){
        $data['tittle']="Riwayat Penimbangan";
        $data['get_list']=$this->model_timbang_sampah->get_list();
        $this->load->view("admin/template/header",$data);
        $this->load->view("admin/home_page_admin",$data);
        $this->load->view("admin/template/footer");
    }
    public function timbang(){
        $id = $this->input->get('id');
        $data['tittle'] = "Timbang Sampah";
        $data['kategori'] = $this->db->get('tb_kategori_sampah');
        if(isset($id)){
            $data['get_data'] = $this->model_timbang_sampah->get_data($id);
            $this->load->view("admin/template/header", $data);
            $this->load->view("admin/timbang_sampah_page",$data);
            $this->load->view("admin/template/footer");    
        }else{
            $data['get_data'] = null;
        $this->load->view("admin/template/header", $data);
        $this->load->view("admin/timbang_sampah_page");
        $this->load->view("admin/template/footer");
        }
    }
    public function list_member(){
        $data['tittle'] = "Member";
        $data['get_data'] = $this->model_list_member->get_list();
        $this->load->view("admin/template/header", $data);
        $this->load->view("admin/list_member_page");
        $this->load->view("admin/template/footer");
    }
    public function kategori_sampah(){
        $data['tittle']= "Kategori Sampah";
        $data['get_data']= $this->db->get('tb_kategori_sampah');
        $this->load->view("admin/template/header", $data);
        $this->load->view("admin/kategori_sampah_page",$data);
        $this->load->view("admin/template/footer");
    }
    function delete(){
        $page = htmlspecialchars($this->input->get('page'),true);
        $id = htmlspecialchars($this->input->get('id'),true);
        $d_id=$this->encryption->decrypt($id);
        if($page==="kategori_sampah"){
            $this->db->where('id',$d_id);
            $this->db->delete('tb_kategori_sampah');
            redirect(base_url('admin/kategori_sampah'));
        }elseif($page==="riwayat"){
            $this->db->where('id', $id);
            $this->db->delete('tb_timbang_sampah');
            redirect(base_url('admin'));
        }elseif($page==="list_member"){
            $this->db->where('id', $d_id);
            $this->db->delete('tb_member');
            redirect(base_url('admin/list_member'));
        }
    }
    
    function input_kategori(){
        $id = htmlspecialchars($this->input->post('id'),true);
        $nama = htmlspecialchars($this->input->post('nama'),true);
        $jenis = htmlspecialchars($this->input->post('jenis'),true);
        $harga = htmlspecialchars($this->input->post('harga'),true);
        
        $cari = $this->model_kategori_sampah->cari_id($id);
        $buat_id = $this->model_kategori_sampah->buat_id();
        if($cari>0){
            $edit = true;
            $this->model_kategori_sampah->simpan($edit, $id, $nama, $jenis, $harga);
            redirect(base_url('admin/kategori_sampah'));
        }else{
            $edit = false;
            $id=$buat_id;
            $this->model_kategori_sampah->simpan($edit, $id ,$nama, $jenis, $harga);
            redirect(base_url('admin/kategori_sampah'));
        }

    }
    function input_timbang(){
        $id = htmlspecialchars($this->input->post('id'),true);
        $id_member = htmlspecialchars($this->input->post('id_member'),true);
        $kategori_sampah = htmlspecialchars($this->input->post('kategori_sampah'),true);
        $berat= htmlspecialchars($this->input->post('berat'),true);
        $total= htmlspecialchars($this->input->post('total'),true);

        $cari = $this->model_timbang_sampah->cari_id($id);
        $buat_id = $this->model_timbang_sampah->buat_id();
        if ($cari > 0) {
            $edit = true;
            $this->model_timbang_sampah->simpan($edit, $id, $id_member, $kategori_sampah, $berat,$total);
            redirect(base_url('admin'));
        } else {
            $edit = false;
            $id = $buat_id;
            $this->model_timbang_sampah->simpan($edit, $id, $id_member, $kategori_sampah, $berat, $total);
            redirect(base_url('admin'));
        }
    }
    function input_member(){
        $id = htmlspecialchars($this->input->post('id'),true);
        $nama = htmlspecialchars($this->input->post('nama'),true);
        $alamat = htmlspecialchars($this->input->post('alamat'),true);
        $jk = htmlspecialchars($this->input->post('jenis_kelamin'),true);

        $cari  = $this->model_list_member->cari_id($id);
        $buat_id = $this->model_list_member->buat_id();

        if ($cari > 0) {
            $edit = true;
            $this->model_list_member->simpan($edit, $id, $nama, $alamat, $jk);
            redirect(base_url('admin/list_member'));
        } else {
            $edit = false;
            $id = $buat_id;
            $this->model_list_member->simpan($edit, $id, $nama, $alamat, $jk);
            redirect(base_url('admin/list_member'));
        }
    }
}