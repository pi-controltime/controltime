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

	function eliminar($EPS_CODIGO){
		$this->db->where('EPS_CODIGO', $EPS_CODIGO);
		$this->db->delete('eps');
		echo "<script>alert('Los datos han sido eliminados.');</script>";
		redirect('eps', 'refresh');
	}

	function obtenerdatos ($EPS_CODIGO){
		$this->db->where('EPS_CODIGO',$EPS_CODIGO);
		$visual=$this->db->get('eps');
		

	}
}