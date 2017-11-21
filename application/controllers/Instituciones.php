<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instituciones extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('instituciones_model');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		$dato['title_page'] = "Instituciones | ControlTime"; 
		$this->load->view('templates/header_principal', $dato);
		$this->load->view('instituciones_view');
		$this->load->view('templates/footer_principal');
	}
	public function registrar(){

		$codigo = $this->input->post("txt_codigo");
		$nombre = $this->input->post("txt_nombre");
		$telefono = $this->input->post("txt_tel");
		$jefe = $this->input->post("txt_jefe");
		$correo = $this->input->post("txt_correo");
		
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$this->instituciones_model->registrar($codigo,$nombre,$telefono,$jefe,$correo,$dateTime);

		redirect('index.php/instituciones', 'refresh');

	}
}
