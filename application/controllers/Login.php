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

		if ($usuario == "admin") {
			
			if ($pass=="123") {
				redirect('/index.php/principal','refresh');
			}
			else{
				echo '<script>alert("La contraseña es incorrecta.")</script>';
				redirect('/index.php/inicio','refresh');
			}
		
		}
		else
		{
			echo '<script>alert("El usuario no se encuntra registrado o no tiene permiso para acceder. Por favor cominiquese con el administrador.")</script>';
			redirect('/index.php/inicio','refresh');
		}
/*
		$validar= $this->login_model->login($email);

		if ($validar) {

			$data = array(
				'user_logueado' => TRUE,
				'name_usuario' => $validar->EMAIL_USUARIO,
				'tipo_usuario' => $validar->TIPO_USUARIO,
				'venta_adicional' =>$validar->VENTAADICIONAL_USUARIO
			);
			$this->session->set_userdata($data);
				redirect('/index.php/principal','refresh');
			}
			else
			{
				echo '<script>alert("El usuario no se encuntra registrado o no tiene permiso para acceder. Por favor cominiquese con el administrador.")</script>';
				redirect('/index.php/inicio','refresh');
			}*/
		
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
