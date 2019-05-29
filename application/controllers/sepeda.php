<?php 
/**
* 
*/
class Sepeda extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sepeda');
	}
	public function index()
	{
		
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/sepeda/index/';
		$config['total_rows'] = $this->m_sepeda->tampilkan_data()->num_rows();
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$d['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;

		// $d['nomor']= $this->m_sepeda->tampilkan_data();
		$d['nomor']= $this->m_sepeda->tampilkan_data_paging($halaman);

		// $this->load->view('t_sepeda',$d);
		$this->template->load('template','t_sepeda',$d);
	}

	function post(){
		if(isset($_POST['submit'])){

		}
		else {

			$this->load->model('m_stasiun');
			$data['nomor']=$this->m_sepeda->tampilkan_data()->result();
			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$this->load->view('sepeda/form_input',$data);
		}
	}

	function update(){
		if(isset($_POST['submit'])){

		}
		else {

			$this->load->model('m_stasiun');
			$id=$this->uri->segment(3);
			$data['nomor']=$this->m_sepeda->tampilkan_data()->result();
			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$data['record']= $this->m_sepeda->update($id)->row_array();
			$this->load->view('sepeda/form_update',$data);
		}
	}
}