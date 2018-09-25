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
	
	public  function get_produk_id($id)
	{
		$this->db->select('merchandise.*,nama_kategori');
		$this->db->from('merchandise');
		$this->db->join('tbl_kategori', 'kategori=tbl_kategori.id','left');
   		$this->db->where('id_merchandise',$id);
        return $this->db->get();
    }	
}
?>