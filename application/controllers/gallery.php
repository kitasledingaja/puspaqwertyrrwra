<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class gallery extends CI_Controller {
     
     function __construct()
     {
         parent::__construct();
         $this->load->model('m_gallery', '', TRUE);
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form','file'));
     }

	public function allgallery() {
     $this->load->view('v_gallery_admin'); 
 	}
 

  function datagallery() { //ambil data gallery
    $this->load->model('m_gallery');
    
    $config['upload_path'] = './assets/images/'; //upload file 
    $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
    $config['encrypt_name'] = TRUE;
    $config['quality']= '100%';
    $config['width']= 710;
    $config['height']= 420;

   $this->load->library('upload', $config);
    if(!$this->upload->do_upload('photo')){
        $photo="";
      }else{
        $photo=$this->upload->file_name;
      }       
       $data = array ( //baca field
          'id_gallery' => '',
          'username'   => $this->session->userdata('username'),
          'caption'    => $this->input->post('caption'),
          'photo'      => $photo
        );

    $this->m_gallery->insert_gallery('gallery',$data);    
    redirect('gallery/alldata_gallery_admin');                         
   }

    function alldata_gallery_admin(){ // ambil semua data dari database
    $this->load->model('m_gallery');
    $data_gallery = $this->m_gallery->get_all_gallery();
    $this->load->view('v_gallery_data',$data_gallery);
  }

  function deleteDataGallery($id_gallery){ // fungsi delete
  $this->load->model('m_gallery');
  $this->m_gallery->deleteGallery($id_gallery);
  redirect('gallery/alldata_gallery_admin'); 
  }

  function updateGallery($id_gallery){
  $where=array('id_gallery'=>$id_gallery);
  $data['gallery'] = $this->m_gallery->get_Gallery($where,'gallery')->result();
  $this->load->view('v_gallery_update', $data);
}

  function updateGalleryDb()
  {
    $config['upload_path'] = './assets/images/'; //upload file 
    $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
    $config['encrypt_name'] = TRUE;
    $config['quality']= '100%';
    $config['width']= 710;
    $config['height']= 420;

   $this->load->library('upload', $config);
    if(!$this->upload->do_upload('photo')){
        $photo="";
      }else{
        $photo=$this->upload->file_name;
      }   
      
          $id_gallery = $this->input->post('id_gallery'); 
          $username   = $this->session->userdata('username');
          $caption    = $this->input->post('caption');
          $photo      = $photo;

       $data = array ( //baca field
          'caption'    => $caption,
          'photo'      => $photo
        );

  $where=array('id_gallery' => $id_gallery); 
  $this->m_gallery->updateGallery($where, $data,'gallery'); 
  redirect('gallery/alldata_gallery_admin');
 }

  function gallery($data) //pengecekan fungsi
  {
    $cek = $this->m_gallery->check_all('gallery',array('id'=>$data),1);
    if($cek)
    {
      foreach ($cek as $row)
      {
        $isi['photo'] = $row->photo;
      }

          $isi['photo'] = "Data Photo";              
          $this->load->view('v_gallery_admin',$isi); 
    }
    else
    {
      show_404();
    }
  }
}