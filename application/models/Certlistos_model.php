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
			"select p.perso_cedula,p.perso_nombres,p.perso_apellidos,MIN(c.contro_fecha) 'Desde',MAX(c.contro_fecha) 'Hasta',SEC_TO_TIME(SUM(TIME_TO_SEC(c.contro_horasalida) - TIME_TO_SEC(c.contro_horaingreso))) 'HorasAcumuladas',p.perso_canthoras 'perso_canthoras' 
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
}
?>