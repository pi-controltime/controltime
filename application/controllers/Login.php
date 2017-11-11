<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    /*$this->load->model('login_model');
		    $this->load->library('recaptcha');*/

	}
	public function index()
	{
		$dato['title_page'] = "Autenticacion | ControlTime";		
		$this->load->view('templates/header',$dato);
		$this->load->view('login_view');
		$this->load->view('templates/footer');
	}
	public function validar(){
		$usuario = $_POST['usuario'];
		$pass = $_POST['password'];

		//echo $usuario . " " . $pass;
		if($usuario="admin" && $pass = "123")
		{
			redirect('/index.php/principal','refresh');
		}
		
	}
	public function cerrarSesion(){
		/*$data = array(
		    'user_logueado' => FALSE
		);
		$this->session->set_userdata($data);*/
		$this->session->sess_destroy();
		redirect('/index.php/inicio','refresh');
	}
}
