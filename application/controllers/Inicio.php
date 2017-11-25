<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    /*$this->load->model('login_model');
		    $this->load->library('recaptcha');*/

	}
	public function index()
	{
		$dato['title_page'] = "Inicio | ControlTime"; 
		$this->load->view('templates/header', $dato);
		$this->load->view('inicio_view');
		$this->load->view('templates/footer');
	}
}
