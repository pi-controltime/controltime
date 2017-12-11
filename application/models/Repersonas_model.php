<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repersonas_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function listar(){
		$obtener = $this->db->query("
				SELECT p.perso_cedula,p.perso_nombres,p.perso_apellidos,p.perso_telefonofijo,p.perso_celular,p.perso_usermail,p.perso_modalidad,e.eps_nombre,i.insti_nombreinstitucion
				FROM personas p, eps e, instituciones i 
				WHERE p.eps_codigo = e.eps_codigo
				and p.insti_codigo = i.insti_codigo
			");
		
		if ($obtener) {
			return $obtener;
		}
		else
		{
			return false;
		}
	}
	function elimina($id){
		try {
			$this->db->where('perso_cedula',$id);
			$this->db->delete('personas');
			echo "<script>alert('Persona eliminada con exito.');</script>";

			redirect('index.php/instituciones', 'refresh');	
		} catch (Exception $e) {
			
			var_dump($e);
		}
		
	}

}