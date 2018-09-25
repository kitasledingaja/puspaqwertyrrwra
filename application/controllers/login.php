<?php
class login extends CI_Controller{

function __construct()
{
  parent::__construct(); 
  $this->load->model('m_login');
  $this->load->library('form_validation');
}

function index(){
  $this->load->view('v_login');
}

function aksi_login(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $where = array(
  'username' => $username,
  'password' => $password
   );

   $data = $this->m_login->cek_login("user",$where);
   
   

if (isset($session_set_value['remember_me']) && $session_set_value['remember_me'] == "1") {
$this->load->view('v_admin');

}

   if($data < 1){
       $this->session->set_flashdata('alert', 'Maaf, Username atau Password anda salah!');
       redirect("login");
   }else{
        redirect("admin");
    //echo $cek;
  
  }
}

function logout(){
  $this->session->sess_destroy();
  redirect(base_url('v_login'));
 }
}

