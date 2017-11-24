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

// se realiza la actualizacion de los datos 

		function actualizarRegistroEPS($EPS_CODIGO,$DATOSEDITADOSEPS){
		$this->db->where('EPS_CODIGO',$EPS_CODIGO);
		$this->db->update('eps',$DATOSEDITADOSEPS);
		echo "<script>alert('la Eps ha sido actualizada con exito!!.');</script>";

		redirect('eps', 'refresh');

	}

}