<?php 
/**
* 
*/
class Laporan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan');
	}
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/laporan/index/';
		$config['total_rows'] = $this->m_laporan->tampilkan_data()->num_rows();
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$id['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;
		// $id['id_laporan']=$this->m_laporan->tampilkan_data();
		$id['id_laporan']=$this->m_laporan->tampilkan_data_paging($halaman);

		// $this->load->view('t_laporan',$id);
		$this->template->load('template','t_laporan',$id);

		
	}
}