<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    
		    $this->load->model('login_model');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		$dato['title_page'] = "Autenticacion | ControlTime";		
		$this->load->view('templates/header',$dato);
		$this->load->view('login_view');
		$this->load->view('templates/footer');

		if ($this->session->userdata('user_logueado')) {
					redirect('/index.php/principal','refresh');
		}
		else{
			$this->cerrarSesion();
		}
	}

	public function validar(){
		$usuario = $_POST['usuario'];
		$pass = $_POST['password'];

		$usuEncontrado= $this->login_model->login($usuario,$pass);

		if ($usuEncontrado) {
			/*strtoupper = CONVIERTE TODO EL TEXTO A MAYUSCULAS*/
			if (strtoupper($usuEncontrado->perso_estado)=="ACTIVO") {
				$data = array(
					'user_logueado' => TRUE,
					'name_usuario' => $usuEncontrado->perso_usermail,
					'tipo_usuario' => $usuEncontrado->perso_cedula
				);
				$this->session->set_userdata($data);
				
				redirect('/index.php/principal','refresh');
			}
			else
			{

				echo '<script>alert("Lo sentimos, el usuario ya no se encuentra activo en nuestro sistema. Para mas información comuniquese con el administrador.")</script>';
				$this->cerrarSesion();
			}

		}
		else
		{
			echo '<script>alert("El usuario no se encuntra registrado o no tiene permiso para acceder. Por favor cominiquese con el administrador.")</script>';
			redirect('/index.php/inicio','refresh');
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
