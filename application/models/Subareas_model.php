<?php

class Subareas_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getSubareas(){
		$resultados = $this->db->get('subareas');
		if ($resultados -> num_rows() > 0) {
		return $resultados;
		}
		else
		{
			return false;
		}
		
	}


	function registrarsubareas ($datosubareas){

		$this->db->insert('subareas', $datosubareas);
		echo "<script>alert('Los datos han sido ingresados.');</script>";
 		redirect('index.php/subareas', 'refresh');
	}	

	function eliminar($suba_codigo){
		$this->db->where('suba_codigo', $suba_codigo);
		$this->db->delete('subareas');
		echo "<script>alert('Los datos han sido eliminados.');</script>";
		redirect('index.php/subareas', 'refresh');
	}

// se realiza la actualizacion de los datos 

		function actualizarRegistroSUBAREAS($suba_codigo,$DATOSEDITADOSUBAREAS){
		$this->db->where('suba_codigo',$suba_codigo);
		$this->db->update('subareas',$DATOSEDITADOSUBAREAS);
		echo "<script>alert('la Subarea ha sido actualizada con exito!!.');</script>";

		redirect('index.php/subareas', 'refresh');

	}

}