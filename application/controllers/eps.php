<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Eps extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Eps_model");

	}	

	public function index()
	{
		
		// creare un array data y ese mismo array es el que trae la informacion de la base de datos
		$data = array('eps' => $this->Eps_model->getEps(),);
		
		$resulteps= $this -> Eps_model -> getEps();
		$resultadoseps= array ('todaseps' => $resulteps );
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header1');
		/*la visualizacion de la siguiente pantalla,, se agrega la creacion de la visualizacion de l base de datoseps x*/
		$this->load->view('eps_view', $resultadoseps); // );
		
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	
	public function VALIDAR(){
		//fecha
		date_default_timezone_set('America/Bogota');
 	    $dateTime=date('Y/m/d h:i:s', time());

		$datoseps =array(
			'EPS_DESCRIPCION' => $_POST['EPS_DESCRIPCION'],
			'EPS_FECHAREGISTRO' => $dateTime,
			'EPS_REGISTRADOPOR' => "admin"
		);
		
		$this->Eps_model->registrareps($datoseps);
	}

	public function eliminar(){
// revisar porque no esta realizando la funcion de eliminar

		$EPS_CODIGO = $this->uri->segment(3);
		$this->Eps_model->eliminar($EPS_CODIGO);
		
	}

	public function editar(){
		
		$EPS_CODIGO=$this->input->post('txt_EPS_CODIGO');
		$EPS_DESCRIPCION=$this->input->post('txt_EPS_DESCRIPCION');
		
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$DATOSEDITADOSEPS = array(
			"EPS_DESCRIPCION"=>$EPS_DESCRIPCION,
			"EPS_FECHAREGISTRO"=>$dateTime,
			"EPS_REGISTRADOPOR"=>"admin"

		);
		$this->Eps_model->actualizarRegistroEPS($EPS_CODIGO,$DATOSEDITADOSEPS);
	}
}