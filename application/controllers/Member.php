<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_member');
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
            if ($this->session->userdata('rule') != "member") {
                redirect(base_url('login'));
            }
        }
    }
    public function index(){
        $id = $this->session->userdata('id');
        $data['get_data']=$this->model_member->get_data($id);
        $data['get_user_data']=$this->model_member->get_data_member($id);
        $data['get_data_pools']=$this->model_member->get_data_pools($id);
        $this->load->view('home_page/member_page',$data);
    }
}