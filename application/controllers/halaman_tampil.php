<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class halaman_tampil extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_tampil');
         show_artikel();
     }

	/*public function tampil() {
     $this->load->view('halaman_awal'); 
 	}*/

 	public function show_artikel(){
 		 
 	}

}