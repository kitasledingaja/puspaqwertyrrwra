 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class m_admin extends CI_Model{
  	function get_user(){
  		$count = $this->db->count_all('user');
  		return $count;
  	}
  }