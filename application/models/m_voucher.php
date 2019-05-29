<?php 
/**
* 
*/
class M_voucher extends CI_Model
{
	
	function tampilkan_data()
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		$this->db->query('set search_path to bikesharing');
		return $this->db->query('select v.id_voucher,v.nama as nama_voucher, v.kategori, v.nilai_poin, v.deskripsi, v.no_kartu_anggota, p.nama as nama_anggota from voucher v, anggota a, person p where v.no_kartu_anggota=a.no_kartu and a.ktp=p.ktp');
	}

	function tampilkan_data_paging($halaman)
	{
		$this->db->query('set search_path to bikesharing');
		return $this->db->query("select v.id_voucher,v.nama as nama_voucher, v.kategori, v.nilai_poin, v.deskripsi, v.no_kartu_anggota, p.nama as nama_anggota from voucher v, anggota a, person p where v.no_kartu_anggota=a.no_kartu and a.ktp=p.ktp limit 10 offset $halaman");
	}

	// function create(){
		
	// }

	function update($id){
		// $this->db->query('set search_path to bikesharing');
		
		$param= array('id_voucher'=>$id);

		$this->db->query('set search_path to bikesharing');
		return $this->db->query('select v.id_voucher,v.nama as nama_voucher, v.kategori, v.nilai_poin, v.deskripsi, v.no_kartu_anggota, p.nama as nama_anggota from voucher v, anggota a, person p where v.no_kartu_anggota=a.no_kartu and a.ktp=p.ktp',$param);
		// return $this->db->get('sepeda',$param);

	}

	// function delete(){
		
	// }
}
