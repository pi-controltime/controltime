<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subareas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Subareas_model");

	}	

	public function index()
	{
		
		// creare un array data y ese mismo array es el que trae la informacion de la base de datos
		$data = array('subareas' => $this->subarea_model->getsubarea(),);
		
		$resultsubarea= $this -> Subareas_model -> getsubarea();
		$resultadosubarea= array ('todasubarea' => $resultsubarea );
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header1');
		/*la visualizacion de la siguiente pantalla,, se agrega la creacion de la visualizacion de l base de datossubarea x*/
		$this->load->view('subareas_view', $resultadosubarea); // );
		
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	
	public function VALIDAR(){
		//fecha
		date_default_timezone_set('America/Bogota');
 	    $dateTime=date('Y/m/d h:i:s', time());

		$datosubarea =array(
			'suba_NOMBRE' => $_POST['suba_NOMBRE'],
			'suba_FECHAREGISTRO' => $dateTime,
			'suba_REGISTRADOPOR' => "admin"
		);
		
		$this->subareas_model->registrarsubarea($datosubarea);
	}

	public function eliminar(){
// revisar porque no esta realizando la funcion de eliminar

		$suba_CODIGO = $this->uri->segment(3);
		$this->Subareas_model->eliminar($suba_CODIGO);
		
	}

	public function editar(){
		
		$suba_CODIGO=$this->input->post('txt_suba_CODIGO');
		$suba_NOMBRE=$this->input->post('txt_suba_NOMBRE');
		
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$DATOSEDITADOSUBAREA = array(
			"suba_NOMBRE"=>$suba_NOMBRE,
			"suba_FECHAREGISTRO"=>$dateTime,
			"suba_REGISTRADOPOR"=>"admin"

		);
		$this->Subareas_model->actualizarRegistrosubarea($suba_CODIGO,$DATOSEDITADOSUBAREA);
	}
}