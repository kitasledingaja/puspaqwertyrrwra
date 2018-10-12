<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class profile extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_profile');
     }

	public function profile_admin() {
     $this->load->view('v_profile'); 
 }
}