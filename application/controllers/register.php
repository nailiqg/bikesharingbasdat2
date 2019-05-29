<?php 
 class Register extends CI_Controller{

 	function __construct(){
 		parent::__construct();
 		$this->load->model('m_pengguna');
 	}

 	function regis(){
 		if(isset($_POST['submit'])) {
			// redirect('auth/login');
		} 
		else{
			$this->template->load('template2','form_register');

		}
 	}
 }






