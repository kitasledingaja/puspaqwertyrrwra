<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends CI_Controller {

 function __construct()
 {
 parent::__construct();
 $this->load->model('m_artikel', '', TRUE);
 $this->load->helper(array('form', 'url', 'file'));
 }

    public function summernote()
  {
    $this->load->view('v_artikel');   
  }

  function datasummernote() {
      $this->load->model('m_artikel');
      $data = array (
            'id_artikel' => '',
            'id_admin'   => $this->session->userdata('id_admin'),
            'judul'      => $this->input->post('title'),
            'isi'        => $this->input->post('artikel'),
            'files'      => $this->input->post('file')     
          );
      $this->m_artikel->insert_all('artikel',$data);
      //echo $data['id_admin'];
          $config['upload_path'] = base_url('assets/images/');  
          $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
          $config['encrypt_name'] = TRUE;

          $this->upload->initialize($config); 
          if(!empty($_FILES["file"]["name"])){
            if($this->upload->do_upload('file')){

              $gbr = $this->upload->data();
              //Compress Image
              $config['image_library']='gd2';
              $config['source_image']='../assets/images/'.$gbr['file_name'];
              $config['create_thumb']= FALSE;
              $config['maintain_ratio']= FALSE;
              $config['quality']= '60%';
              $config['width']= 710;
              $config['height']= 420;
              $config['new_image']= '../assets/images/'.$gbr['file_name'];
              $this->load->library('image_lib', $config);
              $this->image_lib->resize();

              $this->load->library('upload', $config);  
            
          {  
               $this->upload->display_errors();  
               return FALSE;  
          {  
               $data = $this->upload->data();                 
                echo base_url().'../assets/images/'.$_FILES['file']['name'];                                     
          }  
     } 

  }

    }
    echo json_encode($data);

}
      function alldata(){
      $data = $this->m_artikel->get_all_data();
      $this->load->view('v_data_artikel');
      }


      function news($data)
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