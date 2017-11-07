<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/*public function __construct(){

	}*/
	public function index()
	{
		
		$this->load->view('templates/header');
		$this->load->view('inicio_view');
		$this->load->view('templates/footer');
	}
}
