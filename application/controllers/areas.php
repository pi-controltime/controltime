<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class areas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Areas_model");

	}	

	public function index()
	{
		
		// creare un array data y ese mismo array es el que trae la informacion de la base de datos
		$data = array('areas' => $this->Areas_model->getarea(),);
		
		$resultarea= $this -> Areas_model -> getarea();
		$resultadosarea= array ('todasarea' => $resultarea );
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header1');
		/*la visualizacion de la siguiente pantalla,, se agrega la creacion de la visualizacion de l base de datosarea x*/
		$this->load->view('areas_view', $resultadosarea); // );
		
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	
	public function VALIDAR(){
		//fecha
		date_default_timezone_set('America/Bogota');
 	    $dateTime=date('Y/m/d h:i:s', time());

		$datosarea =array(
			'area_NOMBRE' => $_POST['area_NOMBRE'],
			'area_FECHAREGISTRO' => $dateTime,
			'area_REGISTRADOPOR' => "admin"
		);
		
		$this->areas_model->registrararea($datosarea);
	}

	public function eliminar(){
// revisar porque no esta realizando la funcion de eliminar

		$area_CODIGO = $this->uri->segment(3);
		$this->Areas_model->eliminar($area_CODIGO);
		
	}

	public function editar(){
		
		$area_CODIGO=$this->input->post('txt_area_CODIGO');
		$area_NOMBRE=$this->input->post('txt_area_NOMBRE');
		
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$DATOSEDITADOSarea = array(
			"area_NOMBRE"=>$area_NOMBRE,
			"area_FECHAREGISTRO"=>$dateTime,
			"area_REGISTRADOPOR"=>"admin"

		);
		$this->Areas_model->actualizarRegistroarea($area_CODIGO,$DATOSEDITADOSarea);
	}
}