<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('principal_model');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{

		if ($this->session->userdata('user_logueado')) {
			$dato['title_page'] = "Principal | ControlTime"; 
		
			$this->load->view('templates/header_principal', $dato);
			$this->load->view('principal_view');
			$this->load->view('templates/footer');
		}
		else
		{
			echo "<script>alert('No iniciaste sesion, no puedes ingresar a este lugar.');</script>";
			redirect('index.php/login', 'refresh');
		}
		
	}
	public function registrar(){
		$doc = $this->input->get('txt_doc');
		$opt = $this->input->get('options');
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());
		$date = date('Y/m/d');

		$usuario=$this->session->userdata('name_usuario');

		switch ($opt) {
			case '1':
				$datos = array(
					"contro_fecha"=>$date,
					"contro_horaingreso"=>$dateTime,
					"contro_horasalida"=>$dateTime,
					"contro_fecharegistro"=>$dateTime,
					"contro_registradopor"=>$usuario,
					"perso_cedula"=>$doc

				);
				$this->principal_model->registrar($datos);
			break;
					
			case '2':
				$datos = array(
					"contro_horasalida"=>$dateTime,
					

				);
				//print_r($datos);
				//echo $date;
				$this->principal_model->regSalida($doc,$date,$dateTime);
			break;
		}		
	}
	
}