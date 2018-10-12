<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class reviews extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_reviews');
     }

	public function review() {
		$this->load->model('m_reviews');
		$data_artikel = $this->m_reviews->get_artikel(); //ambil data artikel
 		$this->load->view('v_reviews',$data_artikel); // go to view and sent data
     //$this->load->view('v_reviews'); 
 }
}