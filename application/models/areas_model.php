<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class areas_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getarea(){
		$resultados = $this->db->get('areas');
		if ($resultados -> num_rows() > 0) {
		return $resultados;
		}
		else
		{
			return false;
		}
		
	}

	function registrararea ($datosarea){

		$this->db->insert('areas', $datosarea);
		echo "<script>alert('Los datos han sido ingresados.');</script>";
 		redirect('areas', 'refresh');
	}	

	function eliminar($area_CODIGO){
		$this->db->where('area_CODIGO', $area_codigo);
		$this->db->delete('areas');
		echo "<script>alert('Los datos han sido eliminados.');</script>";
		redirect('areas', 'refresh');
	}

// se realiza la actualizacion de los datos 

		function actualizarRegistroarea($area_CODIGO,$DATOSEDITADOSarea){
		$this->db->where('area_CODIGO',$area_CODIGO);
		$this->db->update('areas',$DATOSEDITADOSarea);
		echo "<script>alert('la area ha sido actualizada con exito!!.');</script>";

		redirect('areas', 'refresh');

	}

}