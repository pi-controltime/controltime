<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repersonas extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('repersonas_model');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		if ($this->session->userdata('user_logueado')) {
			$dato['title_page'] = "Reporte Personas | ControlTime"; 

			$all = $this->repersonas_model->listar();
			
			$data = array(
				'resPerso'=>$all
			);

			$this->load->view('templates/header_principal', $dato);
			$this->load->view('repersonas_view',$data);
		}
		else
		{
			echo "<script>alert('No iniciaste sesion, no puedes ingresar a este lugar.');</script>";
			redirect('index.php/login', 'refresh');
		}


	}
}