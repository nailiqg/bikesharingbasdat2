<?php 
/**
* 
*/
class Transaksi extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/transaksi/index/';
		$config['total_rows'] = $this->m_transaksi->tampilkan_data()->num_rows();
		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		$data['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;

		// $data['datetime']=$this->m_transaksi->tampilkan_data();
		$data['datetime']=$this->m_transaksi->tampilkan_data_paging($halaman);

		// $this->load->view('t_transaksi',$data);
		$this->template->load('template','t_transaksi',$data);
	}

	function post(){
		if(isset($_POST['submit'])){

		}
		else {

			$data['datetime']=$this->m_transaksi->tampilkan_data()->result();
			$this->load->view('transaksi/form_input',$data);
		}
	}
}