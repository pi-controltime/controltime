<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certlistos extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('certlistos_model');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		if ($this->session->userdata('user_logueado')) {
			$dato['title_page'] = "Listos Certificar | ControlTime";

			$all = $this->certlistos_model->getData();

			$datos = array(
				"restabla"=>$all
			);

			$this->load->view('templates/header_principal', $dato);
			$this->load->view('certlistos_view',$datos);
			$this->load->view('templates/footer_principal');
		}
		else
		{
			echo "<script>alert('No iniciaste sesion, no puedes ingresar a este lugar.');</script>";
			redirect('index.php/login', 'refresh');
		}
	}
}
