<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*public function __construct(){

	}*/
	public function index()
	{
		/*la visualizacion del encabezado de la pantalla*/
		$this->load->view('templates/header');
		/*la visualizacion de la siguiente pantalla*/
		$this->load->view('login_view');
		/*la visualizacion del final de la pantalla*/
		$this->load->view('templates/footer');
	}
	/*la visualizacion y validacion del usuario y contraseña del usuario*/
	public function validar(){
		$usuario = $_POST['usuario'];
		$pass = $_POST['password'];

		echo $usuario . " " . $pass;
	}
}
