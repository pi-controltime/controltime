<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Regdiario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Regdiario_model");

	}	

	public function index()
	{
		$dato=array(
			"title_page"=>"Registro diario | ControlTime"
		);

		$this->load->view('header_principal',$dato);

	}
}
?>