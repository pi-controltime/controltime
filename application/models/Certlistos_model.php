<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certlistos_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getData(){
		/*$data = $this->db->query(
			"select p.perso_cedula,p.perso_nombres,p.perso_apellidos,c.contro_fecha,c.contro_horaingreso,c.contro_horasalida,TIMEDIFF(c.contro_horasalida,c.contro_horaingreso) 'cant_horas',p.perso_canthoras 
			from personas p, controlhoras c
			where c.perso_cedula = p.perso_cedula;");*/

		$data=$this->db->query(
			"select p.perso_cedula,p.perso_nombres,p.perso_apellidos,MIN(c.contro_fecha) 'Desde',MAX(c.contro_fecha) 'Hasta',HOUR(SEC_TO_TIME(SUM(TIME_TO_SEC(c.contro_horasalida) - TIME_TO_SEC(c.contro_horaingreso)))) 'HorasAcumuladas',p.perso_canthoras 'perso_canthoras', p.estcertificado_persona,p.perso_usermail  
			from personas p, controlhoras c 
			where c.perso_cedula = p.perso_cedula 
			GROUP BY p.perso_cedula"
		);
		if ($data->num_rows()>0) {
			return $data;
		}
		else
		{
			return false;
		}
	}
	function obtenerData($id){
		$data=$this->db->query(
			"select p.perso_cedula,p.perso_nombres,p.perso_apellidos,MIN(c.contro_fecha) 'Desde',MAX(c.contro_fecha) 'Hasta',HOUR(SEC_TO_TIME(SUM(TIME_TO_SEC(c.contro_horasalida) - TIME_TO_SEC(c.contro_horaingreso)))) 'HorasAcumuladas',p.perso_canthoras 'perso_canthoras', p.estcertificado_persona,p.perso_usermail  
			from personas p, controlhoras c 
			where c.perso_cedula = $id 
			and  p.perso_cedula = c.perso_cedula 
			GROUP BY p.perso_cedula"
		);
		if ($data->num_rows()>0) {
			return $data->result();
		}
		else
		{
			return false;
		}
	}
	function getDataFechas($id){
		$data=$this->db->query(
			"select MIN(c.contro_fecha) 'Desde',MAX(c.contro_fecha) 'Hasta'
			from personas p, controlhoras c 
			where c.perso_cedula = p.perso_cedula
			and p.perso_cedula = $id 
			GROUP BY p.perso_cedula"
		);
		if ($data->num_rows()>0) {
			return $data;
		}
		else
		{
			return false;
		}
	}
	function solicitaCertificar($cod,$data){

		$this->db->where('perso_cedula',$cod);
		$this->db->update('personas',$data);
	}
	function certificar($cod,$data){
		$this->db->where('perso_cedula',$cod);
		$this->db->update('personas',$data);
	}
	function getDataPersona($id){
		$this->db->where('perso_cedula',$id);
		$obtener = $this->db->get('personas');

		if ($obtener) {
			return $obtener->result();
		}
		else
		{
			return false;
		}

	}
}
?>