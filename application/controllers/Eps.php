<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Eps extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Eps_model");

	}	

	public function index()
	{
				
		$resulteps= $this->Eps_model->getEps();
		$dato = array(
			"title_page"=>"Eps | controltime"
		);

		$resultadoseps= array ('todaseps' => $resulteps );
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header_principal', $dato);
		/*la visualizacion de la siguiente pantalla,, se agrega la creacion de la visualizacion de l base de datoseps x*/
		$this->load->view('eps_view', $resultadoseps); // );
		
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	
	public function VALIDAR()
	{
		//fecha
		date_default_timezone_set('America/Bogota');
 	    $dateTime=date('Y/m/d h:i:s', time());

		$datoseps =array(
			'eps_nombre' => $_POST['eps_nombre'],
			'eps_fecharegistro' => $dateTime,
			'eps_registradopor' => "admin"
		);
		
		$this->Eps_model->registrareps($datoseps);
	}

	public function eliminar(){
// revisar porque no esta realizando la funcion de eliminar

		$eps_codigo = $this->uri->segment(3);
		$this->Eps_model->eliminar($eps_codigo);
		
	}

	public function editar(){
		
		$eps_codigo=$this->input->post('txt_eps_codigo');
		$eps_nombre=$this->input->post('txt_eps_nombre');
		
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$DATOSEDITADOSEPS = array(
			"eps_nombre"=>$eps_nombre,
			"eps_fecharegistro"=>$dateTime,
			"eps_registradopor"=>"admin"

		);
		$this->Eps_model->actualizarRegistroEPS($eps_codigo,$DATOSEDITADOSEPS);
	}
}