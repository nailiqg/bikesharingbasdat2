<?php 
/**
* 
*/
class Voucher extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_voucher');
	}
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/voucher/index/';
		$config['total_rows'] = $this->m_voucher->tampilkan_data()->num_rows();
		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		$data['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;

		// $data['nama']=$this->m_voucher->tampilkan_data();
		$data['nama']=$this->m_voucher->tampilkan_data_paging($halaman);

		// $this->load->view('t_voucher',$data);
		$this->template->load('template','t_voucher',$data);

	}

	function post(){
		if(isset($_POST['submit'])){

		}
		else {

			$data['nama']=$this->m_voucher->tampilkan_data()->result();
			$this->load->view('voucher/form_input',$data);
		}
	}

	function update(){
		if(isset($_POST['submit'])){

		}
		else {

			$id=$this->uri->segment(3);
			$data['nama']=$this->m_voucher->tampilkan_data()->result();
			$data['record']= $this->m_voucher->update($id)->row_array();
			$this->load->view('voucher/form_update',$data);
		}
	}
}