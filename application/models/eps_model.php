<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eps_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getEps(){
		$resultados = $this->db->get('eps');
		if ($resultados -> num_rows() > 0) {
		return $resultados;
		}
		else
		{
			return false;
		}
		
	}

	function registrareps ($datoseps){

		$this->db->insert('eps', $datoseps);
		echo "<script>alert('Los datos han sido ingresados.');</script>";
 		redirect('eps', 'refresh');
	}	
}