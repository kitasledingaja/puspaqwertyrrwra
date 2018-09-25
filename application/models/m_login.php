<?php
class m_login extends CI_Model{ 
  function cek_login($table,$where){ 
  	$this->db->select('*');
  	$this->db->from($table);
  	$this->db->where($where);
  	$query = $this->db->get();
    $cek = $query->num_rows();
  	$user = $query->row();

    if($cek > 0){
      $data = array(
        'id_admin'  => $user->id_admin,
        'username'  => $user->username,
        'email'   => $user->email,
        'hal_akses' => $user->hak_akses
      );
      $this->session->set_userdata($data);
      return $data;
    }else{
      return 0;
    }
   
  } 

  function get_data_user($table,$where){ 
  	$this->db->select('*');
  	$this->db->from($table);
  	$this->db->where($where);
  	$query = $this->db->get();
  	$user = $query->row();

  	$data = array(
  		'id_admin' 	=> $user->id_admin,
  		'username' 	=> $user->username,
  		'email' 	=> $user->email,
  		'hal_akses' => $user->hak_akses
  	);
  		
  	
  	//$queryku = $this->db->last_query(); 
  	
   return $data;
  } 
}