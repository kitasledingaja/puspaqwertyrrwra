<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class m_gallery extends CI_Model{
  	 function get_all_gallery()  //tampilkan semua data artikel di database
      {  
      $this->db->select('*');
      $this->db->from('gallery');
      $query = $this->db->get();
      $result = $query->result(); 
      return array('data_gallery'=>$result); 
      }

    function deleteGallery($id_gallery)
    { // fungsi delete ke database
    $this->db->where('id_gallery', $id_gallery);
    $this->db->delete('gallery');
    }
    
    function updateGallery($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function get_Gallery($where, $table)
  {
    return $this->db->get_where($table,$where);
  }

	function insert_gallery($table,$data) //fungski masukin data ke database
      {
        $insert = $this->db->insert($table,$data);
        if($insert){
          $this->session->set_flashdata('alert','Data Gallery Berhasil Dimasukkan');
          redirect('gallery/allgallery');
        }else{
          $this->session->set_flashdata('alert','Gagal Memasukan Gallery');
          redirect('gallery/allgallery');
        }
      }
  }