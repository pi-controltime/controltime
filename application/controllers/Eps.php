<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eps extends CI_Controller {

	function __construct(){
		    parent::__construct();
		    $this->load->model('instituciones_model');
		    /*$this->load->library('recaptcha');*/

	}
	public function index()
	{
		$dato['title_page'] = "Eps | ControlTime"; 


		$this->load->view('templates/header_principal', $dato);
		$this->load->view('eps_view');


	}

}

?>