<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    /*$this->load->model('login_model');
		    $this->load->library('recaptcha');*/

	}
	public function index()
	{
		$dato['title_page'] = "Personas | ControlTime"; 
		$this->load->view('templates/header', $dato);
		$this->load->view('personas_view');
		$this->load->view('templates/footer');
	}
}