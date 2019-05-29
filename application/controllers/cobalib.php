<?php 
	/**
	* 
	*/
	class Cobalib extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->library('libk');
		}


		function index(){
			echo $this->libk->coba();
		}
	}


 ?>