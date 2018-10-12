<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_marchandise extends CI_Model {

	public function get_produk_all()
	{
		$query = $this->db->get('merchandise');
		return $query->result_array();
	}
	
	public function get_produk_kategori($kategori)
	{
		if($kategori>0)
			{
				$this->db->where('kategori',$kategori);
			}
		$query = $this->db->get('merchandise');
		return $query->result_array();
	}
	
	public function get_kategori_all()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	} 
	
	public  function get_produk_id($id)//ambil data berdasarkan id di table merchandise dan kategori
	{
		$this->db->select('merchandise.*,nama_kategori');
		$this->db->from('merchandise');
		$this->db->join('tbl_kategori', 'kategori=tbl_kategori.id','left');
   		$this->db->where('id_merchandise',$id);
        return $this->db->get();
    }	

    public function get_data_all()  //tampilkan semua data artikel di database
      {  
      $this->db->select('*');
      $this->db->from('merchandise');
      $query = $this->db->get();
      $result = $query->result(); 
      return array('data_produk'=>$result); 
      }

	public function deleteMerch($id_merchandise){ // fungsi delete ke database
    $this->db->where('id_merchandise', $id_merchandise);
    $this->db->delete('merchandise');

    }
    public function insert($table,$data) //fungsi masukin data ke database
      {
        $insert = $this->db->insert($table, $data);
        if($insert){
          $this->session->set_flashdata('alert','Data Merchandise Berhasil Dimasukkan');
          redirect('merchandise/datamerchandise');
        }else{
          $this->session->set_flashdata('alert','Gagal Memasukan Data Merchandise');
          redirect('merchandise/datamerchandise');
        }
      }
}
?>