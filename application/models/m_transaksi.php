<?php 
/**
* 
*/
class M_transaksi extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		return $this->db->get('bikesharing.transaksi');
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select * from transaksi limit 10 offset $halaman");
	}

	// function create(){
		
	// }

	// function update(){

	// }

	// function delete(){
		
	// }
}
