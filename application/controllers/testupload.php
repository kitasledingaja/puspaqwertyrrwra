<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class testupload extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index(){
		$this->load->view('testupload');
	}

	public function upload_kuy(){
		$config = array(
		'upload_path' => "./assets/gambar/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' => TRUE,
		'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'max_height' => "768",
		'max_width' => "1024"
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('file'))
		{
			//$data = array('upload_data' => $this->upload->data());
			//$this->load->view('upload_success',$data);
			echo 'berhasil!!! <br> file terupload di assets/gambar/';
		}
		else
		{
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('custom_view', $error);
			echo 'error';
		}
	}
}
?>