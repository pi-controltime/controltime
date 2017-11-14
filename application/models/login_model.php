<?php 
class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/*All functions*/
	function login($email,$password){
		$this->db->where('perso_usermail',$email);
		
		$consul=$this->db->get('personas');

		if ($consul->num_rows()>0) {
			return $consul->row();
		}
		else
		{
			return false;
		}
	}

}
?>