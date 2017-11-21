<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/*public function __construct(){

	}*/
	public function index()
	{
		/*La visualizacion de las pantallas header=encabezado*/
		$this->load->view('templates/header');
		/*nombre de la visualizacion de la pantalla */
		$this->load->view('inicio_view');
		/*La visualizacion de las pantallas footer=pie de pagina*/
		$this->load->view('templates/footer');
		//CONEXION BASE DE DATOS PHP
		//$this->load->database('');
		
	}
}
