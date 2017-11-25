<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getAreas(){
		$resultados = $this->db->get('areas');
		if ($resultados -> num_rows() > 0) {
		return $resultados;
		}
		else
		{
			return false;
		}
		
	}

	function registrarareas ($datosareas){

		$this->db->insert('areas', $datosareas);
		echo "<script>alert('Los datos han sido ingresados.');</script>";
 		redirect('index.php/areas', 'refresh');
	}	

	function eliminar($area_codigo){
		$this->db->where('area_codigo', $area_codigo);
		$this->db->delete('areas');
		echo "<script>alert('Los datos han sido eliminados.');</script>";
		redirect('index.php/areas', 'refresh');
	}

// se realiza la actualizacion de los datos 

		function actualizarRegistroAREAS($area_codigo,$DATOSEDITADOSAREAS){
		$this->db->where('area_codigo',$area_codigo);
		$this->db->update('areas',$DATOSEDITADOSAREAS);
		echo "<script>alert('la Area ha sido actualizada con exito!!.');</script>";

		redirect('index.php/areas', 'refresh');

	}

}