<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    /*$this->load->model('login_model');
		    $this->load->library('recaptcha');*/

	}
	public function index()
	{
		$dato['title_page'] = "Principal | ControlTime"; 
		
		$this->load->view('templates/header_principal', $dato);
		$this->load->view('principal_view');
		$this->load->view('templates/footer');
	}
	
}