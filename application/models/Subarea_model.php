<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subarea_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getsubarea(){
		$resultados = $this->db->get('subareas');
		if ($resultados -> num_rows() > 0) {
		return $resultados;
		}
		else
		{
			return false;
		}
		
	}

	function registrarsubarea ($datosubarea){

		$this->db->insert('subareas', $datosubarea);
		echo "<script>alert('Los datos han sido ingresados.');</script>";
 		redirect('subareas', 'refresh');
	}	

	function eliminar($suba_CODIGO){
		$this->db->where('suba_CODIGO', $suba_CODIGO);
		$this->db->delete('subareas');
		echo "<script>alert('Los datos han sido eliminados.');</script>";
		redirect('subareas', 'refresh');
	}

// se realiza la actualizacion de los datos 

		function actualizarRegistroarea($suba_CODIGO,$DATOSEDITADOSUBAREA){
		$this->db->where('suba_CODIGO',$suba_CODIGO);
		$this->db->update('subareas',$DATOSEDITADOSUBAREA);
		echo "<script>alert('la Subarea ha sido actualizada con exito!!.');</script>";

		redirect('subareas', 'refresh');

	}

}