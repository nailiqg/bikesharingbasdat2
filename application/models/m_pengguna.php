<?php 
/**
* 
*/
class M_pengguna extends CI_Model
{
	
	function login($ktp,$email)
	{
		// return $this->db->query('select * from bikesharing.stasiun');
		// $this->db->get('bikesharing.person');
		// $check=$this->db->query('select * from person', array('$ktp' =>$ktp ,'$email'=>$email ) );
		$check=$this->db->get('bikesharing.person', array('$ktp' =>$ktp ,'$email'=>$email ));

		if ($check->num_rows()>0) {
			return 1;
		}
		else {
			return 0;
		}
	}

	// function create(){
		
	// }

	// function update(){

	// }

	// function delete(){
		
	// }
}
