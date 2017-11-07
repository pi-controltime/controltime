<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/*public function __construct(){

	}*/
	public function index()
	{
		
		$this->load->view('templates/header');
		$this->load->view('login_view');
		$this->load->view('templates/footer');
	}
	public function validar(){
		$usuario = $_POST['usuario'];
		$pass = $_POST['password'];

		echo $usuario . " " . $pass;
	}
}
