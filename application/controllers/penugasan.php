<?php 

class Penugasan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_penugasan');
	}
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/penugasan/index/';
		$config['total_rows'] = $this->m_penugasan->tampilkan_data()->num_rows();
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$data['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;


		// $this->load->model('m_stasiun');
		
		// $data['ktp']=$this->m_penugasan->tampilkan_data();
		$data['ktp']=$this->m_penugasan->tampilkan_data_paging($halaman);
		// $data['nama']=$this->m_stasiun->tampilkan_data_paging($halaman);

		// $this->load->view('t_penugasan',$data);
		$this->template->load('template','t_penugasan',$data);

		
	}
	function post(){
		if(isset($_POST['submit'])){

		}
		else {

			$this->load->model('m_stasiun');
			$data['ktp']=$this->m_penugasan->tampilkan_data()->result();
			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$this->load->view('penugasan/form_input',$data);
		}
	}

	function update(){
		if(isset($_POST['submit'])){

		}
		else {

			
			$this->load->model('m_stasiun');
			$data['ktp']=$this->m_penugasan->tampilkan_data()->result();
			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$id=$this->uri->segment(3);
			$data['record']= $this->m_penugasan->update($id)->row_array();
			
			$this->load->view('penugasan/form_update',$data);
		}
	}
}