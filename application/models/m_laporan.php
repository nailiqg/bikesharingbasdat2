<?php 
/**
* 
*/
class M_laporan extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		$this->db->query('set search_path to bikesharing');
		return $this->db->query('select * from laporan l, anggota a, person p where l.no_kartu_anggota=a.no_kartu and a.ktp=p.ktp');
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select * from laporan l, anggota a, person p where l.no_kartu_anggota=a.no_kartu and a.ktp=p.ktp limit 10 offset $halaman");
	}

	// function create(){
		
	// }

	// function update(){

	// }

	// function delete(){
		
	// }
}
