<?php 
/**
* 
*/
class M_sepeda extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select s.nomor, s.merk, s.jenis, s.status, s.id_stasiun, n.nama as nama_stasiun, s.no_kartu_penyumbang, p.nama as nama_penyumbang from sepeda s, stasiun n, anggota a, person p where s.id_stasiun=n.id_stasiun and s.no_kartu_penyumbang=a.no_kartu and a.ktp=p.ktp");
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select s.nomor, s.merk, s.jenis, s.status, s.id_stasiun, n.nama as nama_stasiun, s.no_kartu_penyumbang, p.nama as nama_penyumbang from sepeda s, stasiun n, anggota a, person p where s.id_stasiun=n.id_stasiun and s.no_kartu_penyumbang=a.no_kartu and a.ktp=p.ktp limit 10 offset $halaman");
	}

	// function create(){
		
	// }

	function update($id){
		// $this->db->query('set search_path to bikesharing');
		
		$param= array('nomor'=>$id);

		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select s.nomor, s.merk, s.jenis, s.status, s.id_stasiun, n.nama as nama_stasiun, s.no_kartu_penyumbang, p.nama as nama_penyumbang from sepeda s, stasiun n, anggota a, person p where s.id_stasiun=n.id_stasiun and s.no_kartu_penyumbang=a.no_kartu and a.ktp=p.ktp",$param);
		// return $this->db->get('sepeda',$param);

	}

	// function delete(){
		
	// }
}
