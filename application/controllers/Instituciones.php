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

		$all = $this->instituciones_model->getAll();

		$data = array(
			'resInst'=>$all
		);

		$this->load->view('templates/header_principal', $dato);
		$this->load->view('instituciones_view',$data);


	}
	public function registrar(){

		$codigo = $_POST["txt_codigo"];
		$nombre = $_POST["txt_nombre"];
		$telefono = $_POST["txt_tel"];
		$jefe = $_POST["txt_jefe"];
		$correo = $_POST["txt_correo"];

		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$data = array(
			"insti_codigo"=>$codigo,
			"insti_nombreinstitucion"=>$nombre,
			"insti_jefevoluntariado"=>$jefe,
			"insti_telefono"=>$telefono,
			"insti_celular"=>NULL,
			"insti_correoelectronico"=>$correo,
			"insti_fecharegistro"=>$dateTime,
			"insti_registradopor"=>"admin"

		);
		


		$this->instituciones_model->registrarInsti($data);



	}

	public function editar(){
		
		$id=$this->input->post('txt_uid');
		$nom=$this->input->post('txt_unom');
		$tel=$this->input->post('txt_utel');
		$jefe=$this->input->post('txt_ujefe');
		$correo=$this->input->post('txt_ucorreo');

		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$datos = array(
			"insti_nombreinstitucion"=>$nom,
			"insti_telefono"=>$tel,
			"insti_jefevoluntariado"=>$jefe,
			"insti_correoelectronico"=>$correo,
			"insti_fecharegistro"=>$dateTime,
			"insti_registradopor"=>"admin"

		);
		$this->instituciones_model->actualizarReg($id,$datos);
	}

	public function eliminar(){
		$mivar = $this->uri->segment(3);
		/*envio mivar al modelo*/
		$this->instituciones_model->eliminaReg($mivar);

	}
}
