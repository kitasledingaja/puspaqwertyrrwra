<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class m_all_gallery extends CI_Model{
    
  	function get_data_gallery()
    {
  		$this->db->select('*');
	  	$this->db->from('gallery');
	  	$query = $this->db->get();
	  	$result = $query->result(); //fetch data
	  	return array('data_gallery'=>$result); //lempar data ke controller
  	}
  }