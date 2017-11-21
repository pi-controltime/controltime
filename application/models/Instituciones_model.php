<?php 
class Instituciones_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/*All functions*/
	function registrar($codigo,$nombre,$telefono,$jefe,$correo,$factual){
		
		$data = array(
			'insti_codigo'=>$codigo,
			'insti_nombreinstitucion'=>$nombre,
			'insti_jefevoluntariado'=>$jefe,
			'insti_telefono'=>$telefono,
			'insti_celular'=>NULL,
			'insti_correoelectronico'=>$correo,
			'insti_fecharegistro'=>$factual,
			'insti_registradopor'=>"admin"

		);

		$query =  $this->db->insert('instituciones', $data);

		if ($query) {
			return true;
		}
		else
		{
			return false;
		}
		/*$this->db->where('perso_usermail',$email);*/
		
		/*$consul=$this->db->get('personas');

		if ($consul->num_rows()>0) {
			return $consul->row();
		}
		else
		{
			return false;
		}*/
	}

}
?>