<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account');
     }
 
     public function regis() {
         $this->form_validation->set_rules('username', 'username','required');
         $this->form_validation->set_rules('email', 'email','required');
         $this->form_validation->set_rules('password','password','required');
         if($this->form_validation->run() == FALSE) {
            $this->load->view('v_register');
         }else{
             $data['username']   =    $this->input->post('username');
             $data['email']      =    $this->input->post('email');
             $data['password']   =    $this->input->post('password');
 
             $this->m_account->daftar($data);
             
             echo $data['message'] = '<div class="alert alert-success" style="margin-top: 3px"> 
             <b><i class="fa fa-check-circle"></i> Selamat</b> Pendaftaran Akun Anda berhasil </div>'; 
             
             $this->load->view('v_login',$data);
         }
     }
 }