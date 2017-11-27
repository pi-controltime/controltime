<?php 
class Personas_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getInstitu(){
		$allInst = $this->db->query("select * from instituciones order by insti_codigo asc");
		if ($allInst->num_rows()>0) {
			return $allInst;
		}
		else
		{
			return false;
		}
	}
	function getEps(){
		$allEPS = $this->db->query("select * from eps order by eps_codigo asc");
		if ($allEPS->num_rows()>0) {
			return $allEPS;
		}
		else
		{
			return false;
		}
	}
	function getSarea(){
		$allSarea = $this->db->query("select * from subareas order by suba_codigo asc");
		if ($allSarea->num_rows()>0) {
			return $allSarea;
		}
		else
		{
			return false;
		}
	}
	function getJefe(){
		$jefe = $this->db->query(
			"select perso_cedula,perso_nombres,perso_apellidos 
				from personas 
			where perso_tipo='Administrador' 
			group by perso_cedula");
		
		if ($jefe->num_rows()>0) {
			return $jefe;
		}
		else
		{
			return false;
		}

	}

	function registrar(){

	}

}
?>