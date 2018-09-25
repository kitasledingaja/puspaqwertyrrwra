<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class lihatpage1 extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_lihatpage1');
     }

	public function lihatisipage() {
     $this->load->view('v_lihatpage1'); 
 }
}