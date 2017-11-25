<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Areas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Areas_model");

	}	

	public function index()
	{
		
		// creare un array data y ese mismo array es el que trae la informacion de la base de datos
		$data = array('areas' => $this->Areas_model->getAreas());
		
		$resultareas= $this ->Areas_model-> getAreas();
		$dato = array(
			"title_page"=>"Areas | controltime"
		);

		$resultadosareas= array ('todasareas' => $resultareas );
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header_principal', $dato);
		/*la visualizacion de la siguiente pantalla,, se agrega la creacion de la visualizacion de l base de datoseps x*/
		$this->load->view('areas_view', $resultadosareas); // );
		
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	
	public function VALIDAR(){
		//fecha
		date_default_timezone_set('America/Bogota');
 	    $dateTime=date('Y/m/d h:i:s', time());

		$datosareas =array(
			'area_nombre' => $_POST['area_nombre'],
			'area_fecharegistro' => $dateTime,
			'area_registradopor' => "admin"
		);
		
		$this->Areas_model->registrarareas($datosareas);
	}

	public function eliminar(){
// revisar porque no esta realizando la funcion de eliminar

		$areas_codigo = $this->uri->segment(3);
		$this->Areas_model->eliminar($area_codigo);
		
	}

	public function editar(){
		
		$area_codigo=$this->input->post('txt_area_codigo');
		$area_nombre=$this->input->post('txt_area_nombre');
		
		date_default_timezone_set('America/Bogota');
		$dateTime=date('Y/m/d h:i:s', time());

		$DATOSEDITADOSAREAS = array(
			"area_nombre"=>$area_nombre,
			"area_fecharegistro"=>$dateTime,
			"area_registradopor"=>"admin"

		);
		$this->Areas_model->actualizarRegistroAREAS($area_codigo,$DATOSEDITADOSAREAS);
	}
}