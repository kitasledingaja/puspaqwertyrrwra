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
	
	
	function tambah()
	{
		$data_produk= array('id_merchandise' => $this->input->post('id_merchandise'),
							 'product' => $this->input->post('product'),
							 'desc' => $this->input->post('desc'),
							 'price' => $this->input->post('price'),
							 'picture' =>$this->input->post('picture'),
							 'kategori' =>$this->input->post('kategori')
							);
		$this->cart->insert($data_produk);
		redirect('v_marchandise');
	}
}
?>