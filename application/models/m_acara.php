<?php 

class M_acara extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		return $this->db->get('bikesharing.acara');
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select * from acara limit 10 offset $halaman");
	}

	function post($data){

		$this->db->query('set search_path to bikesharing');
		$this->db->insert('acara',$data);
	}

	function update($id){
		$this->db->query('set search_path to bikesharing');
		
		$param= array('id_acara'=>$id);
		return $this->db->get('acara',$param);

	}

	// function delete(){
		
	// }
}
