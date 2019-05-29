<?php 

class Acara extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_acara');
		
		
	}
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/acara/index/';
		$config['total_rows'] = $this->m_acara->tampilkan_data()->num_rows();
		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		$ac['paging']=$this->pagination->create_links();

		$halaman=$this->uri->segment(3);
		$halaman=$halaman==''?0:$halaman;
		// $ac['judul']=$this->m_acara->tampilkan_data();
		$ac['judul']=$this->m_acara->tampilkan_data_paging($halaman);
		

		
		$this->template->load ('template','t_acara',$ac);

	}

	function post(){
		if(isset($_POST['submit'])){
			$id_acara = $this->input->post('id_acara');
			$judul = $this->input->post('judul');
			$deskripsi=$this->input->post('deskripsi');
			$tgl_mulai=$this->input->post('tgl_mulai');
			$tgl_akhir=$this->input->post('tgl_akhir');
			$stasiun=$this->input->post('stasiun');
			$data = array('id_acara' => $id_acara,'judul'=>$judul,'deskripsi'=>$deskripsi,'tgl_mulai'=>$tgl_mulai,'tgl_akhir'=>$tgl_akhir, 'id_stasiun'=>$stasiun );
			
			$this->m_acara->post($data);
			redirect('t_acara');
		}
		else{
			// 
			$this->load->model('m_stasiun');
			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$this->load->view('acara/form_input',$data);
		}
	}

	function update(){
		if(isset($_POST['submit'])){

		}
		else {
			$this->load->model('m_stasiun');

			$data['nama']=$this->m_stasiun->tampilkan_data()->result();
			$id=$this->uri->segment(3);
			$data['record']= $this->m_acara->update($id)->row_array();

			$this->load->view('acara/form_update',$data);
		}
	}

}