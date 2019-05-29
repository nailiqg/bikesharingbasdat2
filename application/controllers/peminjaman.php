<?php 

class Peminjaman extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_peminjaman');
	}
	
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/peminjaman/index/';
		$config['total_rows'] = $this->m_peminjaman->tampilkan_data()->num_rows();
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$du['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;
		$du['no_kartu_anggota']= $this->m_peminjaman->tampilkan_data_paging($halaman);

		// $du['no_kartu_anggota']= $this->m_peminjaman->tampilkan_data();

		// $this->load->view('t_peminjaman',$du);
		$this->template->load('template','t_peminjaman',$du);

	}

	function post(){
		if(isset($_POST['submit'])) {
			
		} 
		else{
			$this->load->model('m_sepeda');
			$this->load->model('m_stasiun');
			$d['nomor']=$this->m_sepeda->tampilkan_data()->result();
			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$this->load->view('peminjaman/form_input',$d,$data);

		}
	}
}