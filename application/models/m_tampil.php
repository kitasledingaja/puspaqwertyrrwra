<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class m_tampil extends CI_Model{
  	
  	function get_artikel(){
  		$this->db->select('*');
	  	$this->db->from('artikel');
	  	$query = $this->db->get();
	  	$result = $query->result(); //fetch data
	  	return array('data_artikel'=>$result); //lempar data ke controller
  	}
  }