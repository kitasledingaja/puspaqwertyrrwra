<?php
class Admin extends CI_Controller{
function __construct(){
  parent::__construct();
  
  $this->load->model('m_admin');
  if(empty($this->session->userdata('username'))){
  	redirect(base_url("login"));
  }
 }

function index(){

    $data['user'] = $this->m_admin->get_user();
    $this->load->view('v_admin', $data);
  // $this->load->database();
  // $jumlah=$this->db->get('user')->num_rows();
  // compact('jumlah');
}
}