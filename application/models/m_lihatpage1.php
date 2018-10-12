<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class m_lihatpage1 extends CI_Model{

	function getDataArtikel($id_artikel){
		$this->db->select('*');
	  	$this->db->from('artikel');
	  	$this->db->where('id_artikel', $id_artikel);
	  	$query = $this->db->get();
	  	$result = $query->result(); //fetch data
	  	return array('data_artikel'=>$result); //lempar data ke controller
  	}
  }