<?php 
/**
* 
*/
class M_penugasan extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.penugasan');
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select p.ktp, start_datetime, end_datetime, e.nama, p.id_stasiun, s.nama as nama_stasiun from penugasan p,stasiun s, person e where p.id_stasiun=s.id_stasiun and p.ktp=e.ktp");
		// return $this->db->get('bikesharing.penugasan');
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select p.ktp, start_datetime, end_datetime, e.nama, p.id_stasiun, s.nama as nama_stasiun from penugasan p,stasiun s, person e where p.id_stasiun=s.id_stasiun and p.ktp=e.ktp limit 10 offset $halaman");
	}

	function create(){
		
	}

	function update($id){
		// $this->db->get('bikesharing.penugasan');

		$this->db->query('set search_path to bikesharing');
		
		
		$param= array('p.ktp'=>$id);
		return $this->db->query("select p.ktp, start_datetime, end_datetime, e.nama, p.id_stasiun, s.nama as nama_stasiun from penugasan p,stasiun s, person e where p.id_stasiun=s.id_stasiun and p.ktp=e.ktp",$param);
		// return $this->db->get('penugasan',$param);

	}

	function delete(){
		
	}
}
