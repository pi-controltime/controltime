<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function registrar($datos){
		$this->db->insert("controlhoras",$datos);
		echo "<script>alert('Hora de entrada registrada.');</script>";

		redirect('index.php/principal', 'refresh');

	}
	function regsalida($doc,$date,$dateTime){
		/*$this->db->where('contro_fecharegistro',$date);
		$this->db->where('perso_cedula',$doc);
		$this->db->update('controlhoras',$datos);*/
		$this->db->query('Update controlhoras set contro_horasalida="'.$dateTime.'" where contro_fecha="'.$date.'" and perso_cedula='.$doc.'');

		echo "<script>alert('Hora de salida registrada.');</script>";

		redirect('index.php/principal', 'refresh');

	}

}
?>