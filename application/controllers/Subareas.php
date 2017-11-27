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
		$data = array('subareas' => $this->Subareas_model->getSubareas());
		
		$resultsubareas= $this ->Subareas_model-> getSubareas(); 


		$dato = array(
			"title_page"=>"Subareas | controltime"
		);

		$resultadosubareas= array ('todasubareas' => $resultsubareas );
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header_principal', $dato);
		/*la visualizacion de la siguiente pantalla,, se agrega la creacion de la visualizacion de l base de datoseps x*/
		$this->load->view('subareas_view', $resultadosubareas ); // );
		
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	
	public function VALIDAR(){
		//fecha
		date_default_timezone_set('America/Bogota');
 	    $dateTime=date('Y/m/d h:i:s', time());

		$datosubareas =array(
			'suba_nombre' => $_POST['suba_nombre'],
			'suba_fecharegistro' => $dateTime,
			'suba_registradopor' => "admin"
		);
		
		$this->Subareas_model->registrarsubareas($datosubareas);
	}

	public function eliminar(){
// revisar porque no esta realizando la funcion de eliminar

		$suba_codigo = $this->uri->segment(3);
		$this->Subareas_model->eliminar($suba_codigo);
		
	}

	public function editar(){
		
		$suba_codigo=$this->input->post('txt_suba_codigo');
		$suba_nombre=$this->input->post('txt_suba_nombre');
		
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$DATOSEDITADOSUBAREAS = array(
			"suba_nombre"=>$suba_nombre,
			"suba_fecharegistro"=>$dateTime,
			"suba_registradopor"=>"admin"

		);
		$this->Subareas_model->actualizarRegistroSUBAREAS($suba_codigo,$DATOSEDITADOSUBAREAS);
	}
}