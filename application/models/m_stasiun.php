<?php 
/**
* 
*/
class M_stasiun extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		return $this->db->get('bikesharing.stasiun');
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select * from stasiun limit 10 offset $halaman");
	}

	// function create(){
		
	// }

	function update($id){
		$this->db->query('set search_path to bikesharing');
		
		$param= array('id_stasiun'=>$id);
		return $this->db->get('stasiun',$param);

	}

	// function delete(){
		
	// }
}
