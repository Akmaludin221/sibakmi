<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }
    public function index(){
        $data['tittle']="Login SIBAKMI";
        $this->load->view('home_page/login_page',$data);
    }
    function aksi_login(){
        $id = htmlspecialchars($this->input->post('id'),true);
        $password = htmlspecialchars($this->input->post('password'),true);
        $where = array(
            'id'=> $id,
            'password' => md5($password)
        );
        $cari= $this->model_login->cari_data($where);
        $this->form_validation->set_rules('id','ID','require|trim',array(
            'require','\s ID harus diisi'
        ));
        if($cari==="admin"){
            $data_session=array(
                'status'=>'login',
                'rule'=>$cari,
                'id'=>$id
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('admin'));
        }else if($cari === "member"){
            $data_session=array(
                'status'=>'login',
                'rule'=>$cari,
                'id'=>$id
            );
            $this->session->set_userdata($data_session);
            redirect(base_url('member'));
        }else{
            redirect(base_url('login'));
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}