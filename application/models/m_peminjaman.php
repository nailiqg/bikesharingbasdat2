<?php 
/**
* 
*/
class M_peminjaman extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		$this->db->query('set search_path to bikesharing');
		return $this->db->query('select m.no_kartu_anggota,p.nama as nama_anggota, m.datetime_pinjam, m.nomor_sepeda, m.id_stasiun, s.nama as nama_stasiun, m.datetime_kembali, m.biaya, m.denda from peminjaman m, stasiun s, anggota a, person p where m.id_stasiun=s.id_stasiun and m.no_kartu_anggota=a.no_kartu and a.ktp=p.ktp');
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select m.no_kartu_anggota,p.nama as nama_anggota, m.datetime_pinjam, m.nomor_sepeda, m.id_stasiun, s.nama as nama_stasiun, m.datetime_kembali, m.biaya, m.denda from peminjaman m, stasiun s, anggota a, person p where m.id_stasiun=s.id_stasiun and m.no_kartu_anggota=a.no_kartu and a.ktp=p.ktp limit 10 offset $halaman");
	}

	// function create(){
		
	// }

	// function update(){

	// }

	// function delete(){
		
	// }
}
