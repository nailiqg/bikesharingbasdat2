<?php 
/**
* 
*/
class Stasiun extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_stasiun');
	}
	
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/stasiun/index/';
		$config['total_rows'] = $this->m_stasiun->tampilkan_data()->num_rows();
		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		$data['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;
		// $ac['judul']=$this->m_acara->tampilkan_data();
		$data['nama']=$this->m_stasiun->tampilkan_data_paging($halaman);

		// $data['nama']=$this->m_stasiun->tampilkan_data();

		// $this->load->view('t_stasiun',$data);
		$this->template->load('template','t_stasiun',$data);

	}

	function post(){
		if(isset($_POST['submit'])){

		}
		else {

			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$this->load->view('stasiun/form_input',$data);
		}
	}

	function update(){
		if(isset($_POST['submit'])){

		}
		else {

			
			$id=$this->uri->segment(3);
			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$data['record']= $this->m_stasiun->update($id)->row_array();
			$this->load->view('stasiun/form_update',$data);
		}
	}
}