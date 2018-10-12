<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class gallery_all extends CI_Controller {
     
     function __construct()
     {
         parent::__construct();
         $this->load->model('m_all_gallery', '', TRUE);
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form','file'));
     }

	public function viewgallery() {
		$this->load->model('m_all_gallery');
		$data_gallery = $this->m_all_gallery->get_data_gallery(); //ambil data artikel
 		$this->load->view('v_gallery',$data_gallery);
 	}
}