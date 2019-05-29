<?php 
	
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->model('m_pengguna');
		}

		function login(){
			if (isset($_POST['submit'])) {
				$ktp = $this->input->post('ktp');
				$email = $this->input->post('email');
				$hasil= $this->m_pengguna->login($ktp,$email);
				if ($hasil==1) {
					$this->session->set_userdata(array('status_login'=>'oke'));
					redirect('dashboard');
				}
				else {
					redirect('auth/login');
				}
			}
			else {
				$this->template->load('template2','form_login');
			}
		}
	
		function logout(){
			$this->session->sess_destroy();
			redirect('auth/login');
		}
	}
