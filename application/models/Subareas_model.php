<?php
class Subareas_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}
 
 	function getSubareas(){
		$resultados = $this->db->query(
			'Select sa.suba_codigo,sa.suba_nombre,a.area_nombre 
			from subareas sa, areas a 
			where sa.area_codigo = a.area_codigo
			group by sa.suba_codigo');
		if ($resultados -> num_rows() > 0) {
		return $resultados;
		}
		else
		{
			return false;
		}
		
	}
 
 	function getAreas(){
		$resultarea = $this->db->get('areas');
		if ($resultarea -> num_rows() > 0) {
		return $resultarea;
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