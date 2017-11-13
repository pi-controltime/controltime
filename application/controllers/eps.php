<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eps extends CI_Controller {

/*public function __construct(){

	}*/
	public function index()
	{
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header1');
		/*la visualizacion de la siguiente pantalla*/
		$this->load->view('eps_view');
		/*la visualizacion del final de la pantalla*/
		$this->load->view('templates/footer');
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	
}
