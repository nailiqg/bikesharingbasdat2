<?php 
/**
* 
*/
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	function index(){

		// $this->load->view('t_dashboard');
		$this->template->load('template','t_dashboard');
	}
}


 ?>