<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class marchandise extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('m_marchandise');
	}

	public function index() 
	{
		$kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['produk'] = $this->m_marchandise->get_produk_kategori($kategori);
		$data['kategori'] = $this->m_marchandise->get_kategori_all();
		$this->load->view('v_marchandise',$data);
	}
	
	public function detail_merch()
	{
		$id=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['kategori'] = $this->m_marchandise->get_kategori_all();
		$data['detail'] = $this->m_marchandise->get_produk_id($id)->row_array();
		$this->load->view('v_detail_merch',$data);
	}
	
	public function datamerchandise(){
	 $this->load->view('v_merchandise_admin');   
  }

	function tambah(){
	  $this->load->model('m_marchandise');

	  $config['upload_path'] = './assets/images/';
	  $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
	  $config['encrypt_name'] = TRUE;
	  $config['quality']= '100%';
	  $config['width']= 710;
	  $config['height']= 420;

	  $this->load->library('upload', $config);
    	if(!$this->upload->do_upload('file')){
       	 	$picture="";
          }else{
        $picture=$this->upload->file_name;
      }       

		$row = array('id_merchandise' => "",
							'id_admin' => $this->session->userdata('id_admin'),
							 'product' => $this->input->post('product'),
							 'kategori' => $this->input->post('kategori'),
							 'price' => $this->input->post('price'),
							 'desc' => $this->input->post('desc'),
							 'picture' => $picture
							);
		$this->m_marchandise->insert('merchandise',$row);
		redirect('marchandise/dataall');
	}

	function dataall(){ // ambil semua data dari database
    $this->load->model('m_marchandise');
    $data_produk = $this->m_marchandise->get_data_all();
    $this->load->view('v_merchandise_data_admin',$data_produk);
  }

  function deleteDataMerch($id_merchandise){ // fungsi delete
  $this->load->model('m_marchandise');
  $this->m_marchandise->deleteMerch($id_merchandise);
  redirect('marchandise/dataall'); 
  }
 }
?>