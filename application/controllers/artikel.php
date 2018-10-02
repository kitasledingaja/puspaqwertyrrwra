<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_artikel', '', TRUE);
    $this->load->helper(array('form', 'url', 'file'));
  }

  public function summernote(){
    $this->load->view('v_artikel');   
  }

  function datasummernote() { //ambil data summernote
    $this->load->model('m_artikel');
    
    $config['upload_path'] = './assets/images/'; //upload file 
    $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
    $config['encrypt_name'] = TRUE;
    $config['quality']= '100%';
    $config['width']= 710;
    $config['height']= 420;

   $this->load->library('upload', $config);
    if(!$this->upload->do_upload('file')){
        $file="";
      }else{
        $file=$this->upload->file_name;
      }       
       $data = array ( //baca field
          'id_artikel' => '',
          'id_admin'   => $this->session->userdata('id_admin'),
          'judul'      => $this->input->post('title'),
          'isi'        => $this->input->post('artikel'),
          'files'      => $file     
        );

    $this->m_artikel->insert_all('artikel',$data);    
    redirect('artikel/alldata');                         
    }

  function alldata(){ // ambil semua data dari database
    $this->load->model('m_artikel');
    $data_artikel = $this->m_artikel->get_all_data();
    $this->load->view('v_data_artikel',$data_artikel);
  }

 function deleteDataArtikel($id_artikel){ // fungsi delete
  $this->load->model('m_artikel');
  $this->m_artikel->deleteArtikel($id_artikel);
  redirect('artikel/alldata'); 
}

function updateDataArtikel($id_artikel){ //fungsi update artikel
  $this->load->model('m_artikel');
  $data['artikel'] = $this->m_artikel->get_all_data($id_artikel);
  $this->load->view('v_artikel_update', $data);
}

function updatetArtikelDb() //update ke database
{
$this->load->model('m_artikel');
    
    $config['upload_path'] = './assets/images/'; //upload file 
    $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
    $config['encrypt_name'] = TRUE;
    $config['quality']= '100%';
    $config['width']= 710;
    $config['height']= 420;

   $this->load->library('upload', $config);
    if(!$this->upload->do_upload('file')){
        $file="";
      }else{
        $file=$this->upload->file_name;
      }     

  $data = array(
     'id_admin'   => $this->session->userdata('id_admin'),
     'judul'      => $this->input->post('title'),
     'isi'        => $this->input->post('artikel'),
     'files'      => $file    
    );
  
$condition['id_artikel'] = $this->input->post('id_artikel'); //test coba diubah, ditandai nanti lupa
$this->m_artikel->updateArtikel($data, $condition); 
redirect('artikel/alldata');
}

  function news($data) //pengecekan fungsi
  {
    $cek = $this->m_artikel->check_all('artikel',array('id'=>$data),1);
    if($cek)
    {
      foreach ($cek as $row)
      {
        $isi['judul'] = $row->title;
        $isi['isi'] = $row->isi;
        $isi['files'] = $row->file;
      }

          $isi['title'] = "Data Artikel";              
          $this->load->view('v_artikel',$isi); 
    }
    else
    {
      show_404();
    }
  }
}